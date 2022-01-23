<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import Database Library
use App\Models\Furniture; //import category model
use Session;
use App\Models\Category;

class FurnitureController extends Controller
{
    public function add(){
        $r=request(); //receive data by GET or POST method
        $image=$r->file('furnitureImage');
        $image->move('Images',$image->getClientOriginalName()); //images is the location of the folder
        $imageName=$image->getClientOriginalName();

        $addFurniture=Furniture::create([
            'name'=>$r->furnitureName,
            'price'=>$r->furniturePrice,
            'image'=>$imageName,
            'quantity'=>$r->furnitureQuantity,
            'categoryID'=>$r->categoryID,
            'id'=>$r->id,
        ]);
        Session::flash('success',"Furniture added successful!");
        return redirect()->route('showFurniture');
    }

    public function show(){
        $showFurniture=DB::table('furniture') //generate all from category in SQL
        
        ->leftjoin('categories','categories.id','=','furniture.categoryID')
        ->select('furniture.*','categories.name as catName')
        ->get();

        return view('showFurniture')->with('furniture',$viewFurniture);
    }

    public function edit($id){
        $furniture=Furniture::all()->where('id',$id);
        
        return view('editFurniture')->with('furniture',$furniture)->with('categoryID',Category::all());
    }

    public function update(){
        $r=request();
        $furniture=Furniture::find($r->furnitureID);

        if($r->file('furnitureImage')!=''){
            $image=$r->file('furnitureImage');        
            $image->move('Images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $furniture->image=$imageName;
            }    
        
        $furniture->name=$r->furnitureName;
        $furniture->price=$r->furniturePrice;
        $furniture->quantity=$r->pfurnitureQuantity;
        $furniture->categoryID=$r->categoryID;
        $furniture->save();

        return redirect()->route('showFurniture');
    }

    public function delete($id){
       $deleteFurniture=Furniture::find($id);
        $deleteFurniture->delete();
        Session::flash('success',"Furniture deleted successfully!");
        Return redirect()->route('showFurniture');
    }

    public function view(){
        //$viewFurniture = Furniture::all();
        $viewFurniture = DB::table('furniture')
        ->select('furniture.*')
        ->get();
 
         Return view('viewFurniture')->with('furniture',$Furniture);
     }

    public function furnitureDetail($id){
        $furniture=Furniture::all()->where('id',$id);

        return view('furnitureDetail')->with('furniture',$furniture);
    }

}


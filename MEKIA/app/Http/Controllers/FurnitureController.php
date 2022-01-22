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
        return redirect()->route('addFurniture');
    }

    public function view(){
        $viewFurniture=DB::table('furniture') //generate all from category in SQL
        
        ->leftjoin('categories','categories.id','=','furniture.categoryID')
        ->select('furniture.*','categories.name as catName')
        ->get();

        return view('showFurniture')->with('furniture',$viewFurniture);
    }

    /*public function delete($id){
       $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        Session::flash('success',"Product deleted successfully!");
        Return redirect()->route('showProduct');
    }

    public function edit($id){
       $products=Product::all()->where('id',$id);
       
       return view('editProduct')->with('products',$products)->with('categoryID',Category::all());
    }

    public function update(){
        $r=request();
        $products=Product::find($r->productID);

        if($r->file('productImage')!=''){
            $image=$r->file('productImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $products->image=$imageName;
            }    
        
        $products->name=$r->productName;
        $products->description=$r->productDescription;
        $products->price=$r->productPrice;
        $products->quantity=$r->productQuantity;
        $products->categoryID=$r->categoryID;
        $products->save();

        return redirect()->route('showProduct');
    }

    public function productDetail($id){
        $products=Product::all()->where('id',$id);

        return view('productDetail')->with('products',$products);
    }

    public function searchProduct(){
        $r=request();
        $keyword=$r->keyword;
        $products=DB::table('products')->where('name','like','%',$keyword.'%')->get();

        return view('showProduct')->with('products',$products);
    }*/

}


@extends('staffLayout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Edit Furniture</h3>
        <form action="{{route('editFurniture')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($furniture as $furniture)
            <div class="form-group">
                <label for="furnitureName">Furniture Name</label>
                <input type="text" class="form-control" id="furnitureName" name="furnitureName" value="{{$furniture->name}}">
                <input type="hidden" name="furnitureID" id="furnitureID" value="{{$furniture->id}}">
            </div>

            <div class="form-group">
                <label for="furniturePrice">Price</label>
                <input type="number" class="form-control" id="furniturePrice" name="furniturePrice" value="{{$furniture->price}}">
            </div>

            <div class="form-group">
                <label for="furnitureQuantity">Quantity</label>
                <input type="number" class="form-control" id="furnitureQuantity" name="furnitureQuantity" value="{{$furniture->quantity}}">
            </div>

            <div class="form-group">
                <label for="furnitureImage">Image</label>
                <img src="{{asset('Images')}}/{{$furniture->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="furnitureImage" name="furnitureImage">
            </div>

            <div class="form-group">
                <label for="categoryID">Category</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
        
@endsection
@extends('stafflayout')
@section('content')

<div class="row" style="padding-top: 80px;">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Furniture</h3>
        <form action="{{route('addFurniture')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="furnitureName">Furniture Name</label>
                <input type="text" class="form-control" id="furnitureName" name="furnitureName">
            </div>

            <div class="form-group">
                <label for="furniturePrice">Furniture Price</label>
                <input type="number" class="form-control" id="furniturePrice" name="furniturePrice">
            </div>

            <div class="form-group">
                <label for="furnitureQuantity">Furniture Quantity</label>
                <input type="number" class="form-control" id="furnitureQuantity" name="furnitureQuantity">
            </div>

            <div class="form-group">
                <label for="furnitureImage">Furniture Image</label>
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

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
        
@endsection
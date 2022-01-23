@extends('staffLayout')
@section('content')

<div class="row" style="padding-top:80px;">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <h3>Show Furniture</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                @foreach($furniture as $furniture)
                <tr>
                    <td>{{$furniture->id}}</td>
                    <td><img src="{{ asset('images/') }}/{{$furniture->image}}" width="100" class="img-fluid" alt=""></td>
                    <td>{{$furniture->name}}</td>
                    <td>{{$furniture->price}}</td>
                    <td>{{$furniture->quantity}}</td>
                    <td>{{$furniture->catName}}</td>
                    <td>
                    <a href="{{ route('editFurniture',['id'=>$furniture->id])}}" class="btn btn-warning btn-xs">Edit</a>
                    <a href="{{ route('deleteFurniture',['id'=>$furniture->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>

@endsection
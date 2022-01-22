@extends('staffLayout')
@section('content')

<div class="row" style="padding-top: 80px;">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Category</h3>
        <form action="{{route('addCategory')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName">
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
        
@endsection
@extends('staffLayout')
@section('content')

    <div class="row" style="padding-top:8%;">
        <div class="col-sm-2"></div>
        <div clsas="col-sm-8">
            <br><br>
            <h1>Staff Control Panel</h1>
            <a href="{{ route('addFurniture')}}" class="btn btn-warning btn-xs">Add Furniture</a>
            <a href="{{ route('addCategory')}}" class="btn btn-warning btn-xs">Add Category</a>
            <a href="{{ route('showFurniture')}}" class="btn btn-warning btn-xs">Show All Furnitures</a>
        </div>
    </div>
    
  <br><br>

@endsection
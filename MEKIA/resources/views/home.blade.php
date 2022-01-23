@extends('customerLayout')
@section('content')

<style>
    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        color: black;
    }

    .carousel-control-prev,
    .carousel-control-next {
        color: white;
        font-size: 30px;
    }
</style>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="display: flex;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://adacatlanta.com/wp-content/uploads/2016/04/century-gal-artifact.room_-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://loopphonebooths.com/wp-content/uploads/2020/09/HuntsOffice-scaled.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://s3-media4.fl.yelpcdn.com/bphoto/vcbP5cYPvR3bxxsRgf7WXg/o.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

<div class="furniture-content" style="background-color: #434d45; padding: 3%;">
    <a href="#" class="title-furniture mb-5" style="font-size: 30px;letter-spacing: 2px;">WHY US?</a>
    <hr style="width: 1420px; background-color: white;">
    <div style="display: flex; justify-content: space-evenly;">
        <div class="card mb-4" style="width: 400px;">
            <div class="card-body" style="height:100px;">
                <h5 class="card-title">Beauitful Design</h5>
                <p class="card-text" style="white-space: normal;">
                    MEKIA designs guarantee you the prettiest furnitures that you can get for the best fit of your house. Our designers are always on the trend and at the front line to bring you latest design of furnitures.
                </p>
            </div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="card mb-4" style="width: 400px;">
            <div class="card-body" style="height:200px;">
                <h5 class="card-title">Comfortable Design</h5>
                <p class="card-text" style="white-space: normal;height:100px;">
                    Not only that our furnitures are aesthetic, our designers also designed them to be comfortable as well. Our customer would not have to worry about getting a good looking piece but it is not as functional as the other.
                </p>
        </div>
    </div>
</div>
</div>



@endsection
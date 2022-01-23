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

<div class="movie-content" style="background-color: #434d45; padding: 3%;">
    <a href="#" class="title-movie mb-5" style="font-size: 30px;letter-spacing: 2px;">Latest Furniture</a>
    <hr style="width: 1420px; background-color: white;">
    <div style="display: flex; justify-content: space-evenly;">
        <div class="card mb-4" style="width: 400px;">
            <img class="card-img-top" src="https://www.ikea.com/my/en/images/products/odger-chair-red__1038449_pe839684_s5.jpg?f=xl" alt="Movie poster" width="100%">
            <div class="card-body" style="max-height: 400px;">
                <h5 class="card-title">Furniture Name</h5>
                <p class="card-text" style="white-space: normal;overflow: scroll;height: 200px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Immo alio genere; Itaque fecimus. Duo Reges: constructio interrete. Sed residamus, inquit, si placet. <i>Id est enim, de quo quaerimus.</i>Quid ad utilitatem tantae pecuniae? Qui ita affectus, beatum esse numquam probabis; Dat enim intervalla et relaxat. Ita credo. Quae cum essent dicta, discessimus.
                </p>
                <a href="/"><button class="btn btn-dark">More info</button></a>
                <a href="/"><button class="btn btn-outline-dark">Booking</button></a>
            </div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="card mb-4" style="width: 400px;">
            <img class="card-img-top" src="https://www.ikea.com/my/en/images/products/odger-chair-red__1038449_pe839684_s5.jpg?f=xl" alt="Movie poster" width="100%">
            <div class="card-body" style="max-height: 400px;">
                <h5 class="card-title">Furniture Name</h5>
                <p class="card-text" style="white-space: normal;overflow: scroll;height: 200px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Immo alio genere; Itaque fecimus. Duo Reges: constructio interrete. Sed residamus, inquit, si placet. <i>Id est enim, de quo quaerimus.</i>Quid ad utilitatem tantae pecuniae? Qui ita affectus, beatum esse numquam probabis; Dat enim intervalla et relaxat. Ita credo. Quae cum essent dicta, discessimus.
                </p>
                <a href="/"><button class="btn btn-dark">More info</button></a>
                <a href="/"><button class="btn btn-outline-dark">Booking</button></a>
            </div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="card mb-4" style="width: 400px;">
            <img class="card-img-top" src="https://www.ikea.com/my/en/images/products/odger-chair-red__1038449_pe839684_s5.jpg?f=xl" alt="Movie poster" width="100%">
            <div class="card-body" style="max-height: 400px;">
                <h5 class="card-title">Furniture Name</h5>
                <p class="card-text" style="white-space: normal;overflow: scroll;height: 200px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Immo alio genere; Itaque fecimus. Duo Reges: constructio interrete. Sed residamus, inquit, si placet. <i>Id est enim, de quo quaerimus.</i>Quid ad utilitatem tantae pecuniae? Qui ita affectus, beatum esse numquam probabis; Dat enim intervalla et relaxat. Ita credo. Quae cum essent dicta, discessimus.
                </p>
                <a href="/"><button class="btn btn-dark">More info</button></a>
                <a href="/"><button class="btn btn-outline-dark">Booking</button></a>
            </div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="card mb-4" style="width: 400px;">
            <img class="card-img-top" src="https://www.ikea.com/my/en/images/products/odger-chair-red__1038449_pe839684_s5.jpg?f=xl" alt="Movie poster" width="100%">
            <div class="card-body" style="max-height: 400px;">
                <h5 class="card-title">Furniture Name</h5>
                <p class="card-text" style="white-space: normal;overflow: scroll;height: 200px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Immo alio genere; Itaque fecimus. Duo Reges: constructio interrete. Sed residamus, inquit, si placet. <i>Id est enim, de quo quaerimus.</i>Quid ad utilitatem tantae pecuniae? Qui ita affectus, beatum esse numquam probabis; Dat enim intervalla et relaxat. Ita credo. Quae cum essent dicta, discessimus.
                </p>
                <a href="/"><button class="btn btn-dark">More info</button></a>
                <a href="/"><button class="btn btn-outline-dark">Booking</button></a>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
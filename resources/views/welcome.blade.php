@extends('master')
@section('content')

<div class="container">
    {{-- Start restaurant Banner here.. --}}

    <div class="row mt-1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('images/restaurant-banner.jpg')}}" class="d-block w-100 " style="height: 525px;">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/food1.jpg')}}" class="d-block w-100 " alt="..." style="height: 525px;">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/food1.jpg')}}" class="d-block w-100 " alt="..." style="height: 525px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    {{-- END Resturant-banner here --}}

    <div class="row mt-2">

        @foreach ($recipes as $recipe)
        <div class="col col-sm-6 col-md-4 mb-3">
            {{-- @foreach ($recipes as $recipe) --}}
            <div class="card">

                <img src="{{$recipe->food_image}}" class="d-block w-100 ">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"> <b> {{$recipe->food_title}} </b></h6>
                        <p class="card-text">{{$recipe->food_description}}</p>

                        <button  class="card-link btn btn-primary toggle-class" data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $recipe->food_status ? '' : '' }}><i class="bi bi-hand-thumbs-up-fill"></i>{{$recipe->food_staus}}

                        </button>
                        {{-- <button  class="card-link btn btn-primary toggle-class" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $recipe->food_status ? '' : '' }}><i class="bi bi-hand-thumbs-up-fill"></i>{{$recipe->food_staus}}
                            <input data-id="{{$recipe->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Like" data-off="Deslike" {{ $recipe->food_status ? '' : '' }}>
                        </button> --}}
                </div>
            </div>

            {{-- @endforeach --}}
            {{-- <div class="card">

                    <img src="{{asset('images/food1.jpg')}}" class="d-block w-100 ">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"> <b> Food subtitle </b></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link btn btn-primary"><i class="bi bi-hand-thumbs-down-fill"></i></i>Like</a>
                </div>
            </div> --}}
        </div>
        @endforeach





</div>

@endsection

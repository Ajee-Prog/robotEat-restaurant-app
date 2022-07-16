
@extends('master')
@section('content')
<h1> About Page</h1>
<h1><button type="submit" id="toggleLike" class=" btn {{$btn_color}} "> <i class="bi {{$btn_icon_up}}"></i>Like </h1>
    <button type="submit" id="toggleDislike" class=" btn {{$btn_full_danger}} "> <i class="bi {{$btn_icon_down}}"></i>Deslike</button>



    @if(!empty($recipes))
    @foreach ($recipes as $recipe)

    <div class="col col-sm-6 col-md-4 mb-3">
        {{-- @foreach ($recipes as $recipe) --}}
        <div class="card">

            {{-- <img src="{{$recipe->food_image ?? ''}}" class="d-block w-100 "> --}}

            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><b> {{$recipe->food_title ?? ''}} </b></h6>
                    <p class="card-text">{{$recipe->food_description ?? ''}}</p>

                    <button type="submit" id="toggleLike"  class="card-link btn {{$btn_color}} toggle-class" ><i class="bi bi-hand-thumbs-up-fill"></i>

                    </button>
                    <button type="submit" id="toggleDislike"  {{$class}}="card-link btn {{$btn_color_danger}} toggle-class" ><i class="bi bi-hand-thumbs-down-fill" id="toggleDislike"></i>
                    </button>

            </div>

        </div>


    </div>

       <td>{‌{$post->Category->name ?? '' }}</td>
    @endforeach
@endif


    @foreach ($recipes as $recipe)
    print_r($recipes)
    {{-- <div class="col col-sm-6 col-md-4 mb-3"> --}}
        {{-- @foreach ($recipes as $recipe) --}}
        {{-- <div class="card">

            <img src="{{$recipe->food_image}}" class="d-block w-100 ">

            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><b> {{$recipe->food_title}} </b></h6>
                    <p class="card-text">{{$recipe->food_description}}</p>

                    <button type="submit" id="toggleLike"  {{$class}}="card-link btn {{$btn_color}} toggle-class" ><i class="bi bi-hand-thumbs-up-fill"></i>{{$recipe->food_staus}}

                    </button>
                    <button type="submit" id="toggleDislike"  {{$class}}="card-link btn {{$btn_color_danger}} toggle-class" >{{$recipe->food_staus}}<i class="bi bi-hand-thumbs-down-fill" id="toggleDislike"></i>
                    </button>

            </div>

        </div> --}}


    {{-- </div> --}}
    @endforeach
@endsection


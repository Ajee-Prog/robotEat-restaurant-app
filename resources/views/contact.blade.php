
@extends('master')
@section('content')
<h1> Contact Page</h1>
<h1> is my Contact Page <button type="submit" id="toggleLike" class=" btn {{$btn_color}} "> <i class="bi {{$btn_icon_up}}"></i>Like </h1>
    <button type="submit" id="toggleDislike" class=" btn {{$btn_full_danger}} "> <i class="bi {{$btn_icon_down}}"></i>Deslike</button>

@endsection

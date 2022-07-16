@extends('master')
@section('content')


<h1> is my footer <button type="submit" id="toggleLike" class=" btn {{$btn_color}} "> <i class="bi {{$btn_icon_up}}"></i>Like </h1>
<button type="submit" id="toggleDislike" class=" btn {{$btn_full_danger}} "> <i class="bi {{$btn_icon_down}}"></i>Deslike</button>
<h1>Toggle page</h1>

@endsection

@section('footer')

This is my footerThis
  <h1> This is my footer</h1>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#toggleLike').click(

                    $(this).alert("I Was Clicked")

            );
        });
    </script>
@endsection

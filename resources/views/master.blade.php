<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>master-layout</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous"> --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{--  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Font Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
</head>
<body>


      {{-- New --}}

      <nav class="navbar navbar-dark navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">RobotEat</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="/contact">Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">

                    <a class="nav-link" href="#" id="call"> <i class="bi bi-telephone"></i> Call to place order</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        @yield("content")
      </main>
<footer>
    @yield("footer")
</footer>



<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){

// jQuery methods go here...
$('#toggleDislike').hide();
// $('#call')
        $("#toggleLike").on('click', function(){
  //alert("Button Like Clicked");
  $(this).hide();
  $("#toggleDislike").show();


})
$("#toggleDislike").on('click', function(){
  //alert("Button Like Clicked");
  $(this).hide();
  $("#toggleLike").show();


})

$('#call').mouseover(function(){
  $('#call').alert("Button Like Clicked").css("background-color", "yellow");
})


});
</script>
</body>
<script>
    $(document).ready(function(){

// jQuery methods go here...
$('#call').mouseover(function(){
  $('#call').alert("Button Like Clicked").css("background-color", "yellow");
})

});
</script>

{{-- <script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 'Like' : 'Deslike';
          var recipe_id = $(this).data('id');

          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/recipe',
              data: {'status': status, 'recipe_id': recipe_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script> --}}
</html>

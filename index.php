<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="carlesgomalb">
    <link rel="icon" href="../../../../favicon.ico">

    <title>carlesgomalb.com</title>

    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>



    <div class="container">
      <div class="innerContainer">
        <h1 id="title">CARLESGOMALB.COM</h1>
        <h2 id="subtitle">Welcome to my website!</h2>

        <div class="inner-container">

          <div class="row">
            <div class="col-md-4">
              <ul class="list-group" style="padding:10px;">
                <li class="list-group-item active"><b>ABOUT ME</b></li>
                <li class="list-group-item">Name <b>Carles Gómez Alberola</b></li>
                <li class="list-group-item">Date of birth <b>06/09/1992</b></li>
                <li class="list-group-item">Location <b>Barcelona, Spain</b></li>
                <li class="list-group-item">Contact <b>carlesgomalb@hotmail.es</b></li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-group" style="padding:10px;">
                <li class="list-group-item active"><b>MY JOBS</b></li>
                <li class="list-group-item">
                  <b>Inteccno ME Systems / Otsuka Pharmaceutical S.A.</b> 5 YEARS
                  <p>System administrator (Windows Server)</p>
                  <p>Helpdesk/Induction to users</p>
                  <p>Fullstack PHP developer with laravel framework</p>
                </li>
                <li class="list-group-item">
                  <b>Inteccno ME Systems</b>
                  <p>System administrator (Windows Server)</p>
                  <p>Helpdesk/Induction to users</p>
                  <p>Fullstack PHP developer with laravel framework</p>
                </li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>


    $(document).ready(function(){
      $("#title").slideDown(1000).ready(function(){
        $("#subtitle").delay(600).slideDown(1000).delay(1000).slideUp(1000);
        $(".inner-container").delay(3600).slideDown(1000);
      });
    });

  </script>
</body>
</html>

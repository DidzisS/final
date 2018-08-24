<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Starta lapa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <body style="background-color:lightgoldenrodyellow;">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</head>
<body>

<!--Navigācija Hederis-->
<div class="container w-80">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ziņas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div>
    </nav>
</div>

  




<?

foreach ($titles as $title) {
    {{$title->photo_name}}
} ?>


<!--Karuselis-->
<div class="karuselis w-80 d-flex justify-content-center ">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="http://g3.delphi.lv/images/pix/520x315/QehXyJVNJdI/8c0cf5b7eb8376b9af-50327011.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " src="http://g1.delphi.lv/images/pix/520x315/Z1-1aExNXMw/led-gaismeklu-razotajs-vizulo-3-50323075.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " src="http://g1.delphi.lv/images/pix/520x315/vAhPQLQcU6k/microphonemikrofonspiecipiecilvradioradio-piecilv-studijastudijastudio-46117615.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>  <!--Karuselis beigas-->


<!--Lapas satura daļa-->
<div class="container">
    
    <div class="row">
    <div class="card col-3" >
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary ">Find out more</a>
            </div>
    </div>
    <div class="card col-3">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Find out more</a>
            </div>
    </div>
    <div class="card col-3">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Find out more</a>
            </div>
          </div>
    <div class="card col-3 ">
                <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Find out more</a>
                </div>
              </div>
    </div>
    </div>

<!--Lapotāja pogas-->
<nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>


<!--Fūteris-->
<div class="py-4 bg-dark"> Lapas autors esmu es! </div>

        
        
<!-- javaskript daļa Poga kas padzen uz augšu
<div class="container" style="height:400px;">
	<div class="row">
	    <br>
            <p>Please view this snippet in <a href="http://bootsnipp.com/fullscreen/x3p9" target="_blank">full screen here</a> and scroll all the way down.</p>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    
        
	</div>
</div> --> 


</div>





</body>
</html>
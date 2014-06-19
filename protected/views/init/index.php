
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/EMSicon.png">
    
    <title>Emergency Medical Service</title>

    <!-- Bootstrap core CSS -->
   	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Emergency Medical Service</a>
            </div>
            
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:EMS" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Emergency Medical Service</h1>
              <p>Accede a una herramineta creada para servicios médicos de emergencia.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo Yii::app()->request->baseUrl; ?>/init/login" role="button">Inicia sesión</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:EMS" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Fármacos</h1>
              <p>Accede a una amplia base de datos de farmacos.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:EMS" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Protocolos</h1>
              <p>Accede a protocolos recomendados por expertos.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse protocols</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/img/farmacos_v2_140x140.png" alt="">
          <h2>Fármacos</h2>
          <p>EMS te permite crear, añadir y editar fármacos.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/img/protocolos140x140.png" alt="">
          <h2>Protocolos</h2>
          <p>Prueba la herramienta que EMS ofrece para la creación de protocolos de actuación.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/img/notas140x140.png" alt="">
          <h2>Notas de intervención</h2>
          <p>Utiliza esta herramienta para visualizar las notas que efectúas en una intervención mediante tu aplicación Android.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">EMS in Cloud para Android <span class="text-muted"></span></h2>
          <p class="lead">¡Sincroniza tus datos con tu dispositivo móvil! Pulsa en el botón para descargar la aplicación.</p>
          <a href="https://play.google.com/store/apps/details?id=es.ucm.ric">
            <img alt="Get it on Google Play"
                 src="<?php echo Yii::app()->request->baseUrl; ?>/img/es_google_play.png" />
          </a>
        </div>
        <div class="col-md-1">  
        </div>
        <div class="col-md-4">
          <div id="carousel_fade" class="carousel slide carousel-fade">
            <div class="carousel-inner">

                    <div class="item active">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/CarouselAndroid/App_init.png">                          
                    </div>

                    <div class="item ">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/CarouselAndroid/App_menu.png"> 
                    </div>
                
                    <div class="item ">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/CarouselAndroid/App_home.png"> 
                    </div>
                    
                    <div class="item ">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/CarouselAndroid/App_protocolos.png"> 
                    </div>
                
                    <div class="item ">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/CarouselAndroid/App_protocolos2.png"> 
                    </div>
                    
                    <div class="item ">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/CarouselAndroid/App_farmacos.png"> 
                    </div>

            </div>
            <a class="carousel-control left btn-control " href="#carousel_fade" data-slide="prev">‹</a>
            <a class="carousel-control right btn-control" href="#carousel_fade" data-slide="next">›</a>
          </div>          
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/Example_Protocolos.png">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">EMS in Cloud. <span class="text-muted">¿Aún no te has registrado?</span></h2>
          <p class="lead">¡Crea tus protocolos y sincroniza con tu aplicación!</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Arriba</a></p>
        <p>&copy; Emergency Medical Service in cloud Company 2013-2014 &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y Condiciones</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/docs.min.js"></script>
  </body>
</html>

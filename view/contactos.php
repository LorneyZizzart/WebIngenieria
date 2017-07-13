<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONTACTOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/materialize.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
	background-color:   #032e06;
      margin-bottom: 0;
      border-radius: 0;
	padding: 10px;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color:  #022704;
      color: white;
      padding: 71px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FACULTAD DE INGENIERIA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Principal</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Carreras<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ingenier&iacute;a de Sistemas</a></li>
            <li><a href="#">Ingenieria de Telecomunicaciones</a></li>
            <li><a href="#">Ingenieria Ambiental</a></li>
          </ul>
        </li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Eventos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar Sessi&oacute;n</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Misi&oacute;n</a></p>
      <p><a href="#">Visi&oacute;n</a></p>
      <p><a href="#">Reglamentos</a></p>
    </div>	

    <div class="col-sm-8 text-left"> 
      <h1>CONTACTOS</h1>
		
	                    <div class="col-md-6 col-sm-12  col-xs-12 animated footer-col">
                      <h2 style="font-size:22px">Horarios de atención</h2>
                      <ul class="vertical office-hours">
                        <li>Lunes a Jueves:</li>
                        <li><strong>Mañanas:</strong> 8:00 a 12:30</li>
                        <li><strong>Tardes:</strong> 14:30 a 18:30</li>
                        <li>Viernes: 8:00 a 13:00 </li>
                        <li>(Para todas las carreras)</li>
                      </ul>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 animated footer-col">
                      <h2 style="font-size:22px">Información de contacto</h2>
                    <div class="textwidget">
                        <ul class="address">
                            <li>
                                <i class="fa fa-home"></i>
                                <h4>Dirección:</h4>
                                <p style="text-align:justify">Av. Simón I. Patiño Km 1. Vinto - Cochabamba - Bolivia</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>(591 4) 4263330</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@uab.edu.bo</p>
                            </li>
                        </ul>
                        <hr>

                    </div><!-- text widget /-->
                </div>

    </div>

  </div>
</div>

<footer>

<div class="container">
<h3>Buscanos en ...</h3>
    <hr>
        <div class="text-left left-block">
            <p class="txt-railway">- En las redes sociales -</p>
</div>
</div>

</footer>

</body>
</html>

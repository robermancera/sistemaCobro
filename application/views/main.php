<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./js/jquery-3.3.1.slim.min.js" ></script>
    <script src="./node_modules/bootstrap/js/dist/popover.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/alignment.css">
    <title>Administrador</title>
</head>
<body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Login/toMain">Eeldm</a>
            <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="Toggle navigation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $check_login ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Login/toPageRegister">Registrar Cliente</a>
                    </li>
                    <li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>index.php/Login/toMovimiento">Movimientos</a>
                    </li>
                    </ul>    
                
                </div>
                          
            </div>

            </div>
    </nav>
    <section class="center">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Bienvenido administrador</h1>
            <p class="lead">Eres libre de revisar todos los pagos, siempre y cuando
                no intentes hacer <i><b>code injection</i></b>
            </p>
            <div id="carouselExampleSlidesOnly" class="carousel slide huver" data-ride="carousel"e>
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./assets/1.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Administra</h5>
                    <p>Todo el negocio al alcance de la palma de tu mano</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 h-100" src="./assets/2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Identifica</h5>
                    <p>A todos esos vatos locos que no te pagan y navajealos</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/3.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Lleva la contabilidad</h5>
                    <p>De todo el varo que te gastas en Piedra</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
            <div class="col-sm-4">
                  <a class="btn btn-danger" href="<?=base_url().'index.php/Login/logout';?>">Logout</a>
            </div>
                    
    </section>

        
</body>
</html>

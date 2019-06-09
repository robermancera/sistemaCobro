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
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand"  href="<?=base_url().'index.php/Login/toMain'?>">Eeldm</a>
            <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="Toggle navigation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Login/toPageRegister">Registrar Cliente</a>
                    </li>
                    <li>
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/Login/toMovimiento">Movimientos</a>
                            </li>
                    </li>
                    </ul>    
                
                </div>
                          
            </div>

            </div>
    </nav>
    <section class="center dos">
    <!--<table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
            </tbody>
          </table>
          -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Registro de Cliente</h1>
            <p class="lead">
            Ingresa por favor estos datos:
            <form>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Teléfono:</label>
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Correo electrónico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.mx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                    </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </p>
        </div>
        </div>
                    
    </section>

        
</body>
</html>
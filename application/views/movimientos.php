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
            <a class="navbar-brand" href="<?=base_url().'index.php/Login/toMain'?>">Eeldm</a>
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
            <h1 class="display-4">Página Movimientos</h1>
            <p class="lead">
              En esta página podrás realizar las funciones básicas para obtener los movimientos<br>
              <button type="button" class="btn btn-outline-primary">Deudores</button>
              <button type="button" class="btn btn-outline-primary">Pagos</button>
            </p>
        </div>
        </div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Deudores</h1>
        <table class="table table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Id. Deuda</th>
                    <th>Fecha Deuda</th>
                    <th>Cantidad Deuda</th>
                    
                    <!--
                      SELECT 
                          tbl_usuario.fld_id, 
                          tbl_usuario.fld_nombre, 
                          tbl_usuario.fld_telefono,
                          tbl_usuario.fld_correo,
                          tbl_deudas.fld_id,
                          tbl_deudas.fld_fecha,
                          tbl_deudas.fld_cantidad
                      FROM INNER JOIN tbl_usuario ON tbl_usuario.fld_id = tbl_deudas.fld_id_usuario;
                    -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    -->
                  </tr>
                  <tr>
                    <!-- 
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                  -->
                  </tr>
                </tbody>
              </table>
              
            </table>
            
      </div>
    </div>
                    
    </section>

        
</body>
</html>
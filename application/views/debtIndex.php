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
                          
            </div>

            </div>
    </nav>
    <section class="center dos">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Vista Deudor</h1>
            <p class="lead">
              En esta página podrás visualizar tus deudas<br>
            </p>
        </div>
        </div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Deudor:</h1>
        <table class="table table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th>Deudas</th>
                    <th>Pagos</th>
                    
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
                <form action="<?php echo base_url(); ?>index.php/Payroll/createDebt" method="post">
                <tbody>
                <?php print_r( $name ) ?>
                <?php for ($i=0; $i<$max ; $i++) { ?>
                  <tr>
                    <td><?php 
                        if($i < count($debt))
                    echo $debt[$i]['fld_cantidad']?></td>
                    <td><?php
                        if($i < count($pay))
                    echo $pay[$i]['fld_cantidad']?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              
            </table>
            
      </div>
    </div>
        <a class="btn btn-danger" href="<?=base_url().'index.php/Login/logout';?>">Logout</a>          
    </section>
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Publicar Producto</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
    <section>
      <div class="container">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-center">Publicar Productos</h2>
          <form class="form-horizontal" action="<?php echo base_url('registro/guardar'); ?>" method="post">
            <div class="form-group input-group">
              <span class="input-group-addon">Nombre</span>
              <input type="text" name="nombre" class="form-control"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Precio</span>
              <input type="number" name="precio" class="form-control"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Descripcion</span>
              <textarea class="form-control" name="descripcion"></textarea>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-success" value="guardar" >Guardar</button>
            </div>
          </form>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripci&oacute;n</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($catalogo as $valor) { ?>
                <tr>
                  <td><?php echo $valor->idproductos; ?></td>
                  <td><?php echo $valor->nombre;?></td>
                  <td><?php echo $valor->precio; ?></td>
                  <td><?php echo $valor->descripcion; ?></td>
                  <td><a href="<?php echo base_url('registro/eliminar/producto/').$valor->idproductos;?>">X</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </tabla>
        </div>
      </div>
    </section>
  </body>
</html>

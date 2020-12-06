<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Nuevo usuario</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Nuevo usuario</h1>
        <form action="<?php echo base_url(); ?>nuevo-usuario/save" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre completo</label>
                        <input type="text" name="nombre" class="form-control <?php echo form_error('nombre') ? 'is-invalid':'' ; ?>" placeholder="Nombre completo" value="<?php echo set_value('nombre'); ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('nombre'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ; ?>" aria-describedby="emailHelp" placeholder="Correo eléctronico" value="<?php echo set_value('email'); ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Perfil</label>
                                <select>
                                    <option>aca quiero una consulta a la bd </option>
                                </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Entes u Organismos</label>
                                <select>
                                    <option>aca quiero una consulta a la bd </option>
                                </select>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ; ?>"placeholder="Contraseña" value="<?php echo set_value('password'); ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Repite la contraseña</label>
                        <input type="password" name="repeatPassord" class="form-control <?php echo form_error('repeatPassord') ? 'is-invalid':'' ; ?>" placeholder="Contraseña" value="">
                        <div class="invalid-feedback">
                            <?php echo form_error('repeatPassord'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>
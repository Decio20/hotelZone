 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de usuarios
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">
                Crear usuarios
            </button>
        </div>

        <div class="box-body">
          
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre de usuario</th>
                        <th>Contraseña</th>
                        <th>Foto</th>
                        <th>Rol</th>
                        <th>Editar/Eliminar</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        $verUsuario = new UsuariosController();
                        $verUsuario->verUsuarios();
                    ?>

                
                </tbody>
            </table>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>


  <!-- Crear Usuarios -->
   <div class="modal fade" role="dialog" id="CrearUsuarios">
        <div class="modal-dialog">

            <div class="modal-content">

                <form  method="post" role="form" enctype="multipart/form-data">

                    <div class="modal-body">

                        <div class="box-body">

                            <div class="form-group">
                                <h2>Nombre usuario:</h2>

                                <input type="text" class="form-control input-lg" name="usuarioN" required>
                            </div>

                            <div class="form-group">
                                <h2>Contraseña:</h2>

                                <input type="password" class="form-control input-lg" name="claveN" required>
                            </div>

                            <div class="form-group">
                                <h2>Seleccionar rol:</h2>

                                <select class="form-control input-lg" name="rolN">

                                    <option value="">Seleccionar rol</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Editor de Contenido">Editor de Contenido</option>
                                    <option value="Marketing">Marketing</option>

                                </select>

                            </div>


                            <div class="form-group">
                                <h2>Foto:</h2>

                                <input type="file" name="fotoN" id="">
                                <p class="help-block">Peso máximo permitido 200MB</p>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
   </div>
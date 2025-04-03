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
            <button class="btn btn-primary">
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
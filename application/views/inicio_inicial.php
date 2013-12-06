<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">

    <?php 
        if( isset($usuario_actualizar) ){
            $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
            $first_name = $usuario_actualizar->first_name;
            $username = $usuario_actualizar->username;
            $last_name = $usuario_actualizar->last_name;
            $document_number = $usuario_actualizar->document_number;       
            $state = $usuario_actualizar->state;       
            $is_admin = $usuario_actualizar->is_admin;       
            $email = $usuario_actualizar->email;
            $accion = 'actualizar';
        }
        else{
            $id = '';
            $first_name = '';
            $username = '';
            $last_name = '';
            $document_number = '';
            $state  = '';
            $is_admin = '';
            $email = '';
            $accion = 'insertar';
        }
    ?>

    <div style="background-color:#0088BB;" class="container">
        <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li  class="active">
                    <a href="<?php echo base_url(); ?>inicial">Usuarios</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>estudiantes">Estudiantes</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>profesores">Profesores</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>cursos">Cursos</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>grupos">Grupos</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>aulas">Aulas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>carreras">Carreras</a>
                  </li>
                  <li>
                    <a href="#">Horario</a>
                  </li>
                </ul>
            </div>
        </div>
	    <section>

            
        <h2>Usuarios Registrados</h2>


        <div class="control-group">
            <form class="form-inline">
                <input type="text" list="datos" autofocus required/>
                <datalis id="datos">
                    
                </datalis>
                <input type="submit" class="btn btn-primary" value="Mostrar">
            </form>
        </div>

        <button class="btn btn-primary" id="mostrar">Ver Formulario</button>
        <button class="btn btn-primary" id="ocultar">Ocultar Formulario</button>
        <br><br>
        <div id="form1" style="display:none">
            <section >
                <form class="form-horizontal" action="<?php echo base_url(); ?>inicial/<?php echo $accion; ?>" method="post">
                    <?php echo $id; ?>
                <p><label>Nombre:</label> <input autofocus type="text" name="first_name" value="<?php echo $first_name; ?>" required/></p>
                <p><label>Apellido:</label> <input type="text" name="last_name" value="<?php echo $last_name; ?>" required/></p>
                <p><label>Username:</label> <input type="text" name="username" value="<?php echo $username; ?>" required/></p>
                <p><label>Cedula:</label> <input type="text" name="document_number" value="<?php echo $document_number; ?>" required/></p>
                <p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" required/></p>
                <p><label>Estado:</label> <input type="text" name="state" value="<?php echo $state; ?>" required/></p>
                <p><label>Estado:</label> <input type="text" name="is_admin" value="<?php echo $is_admin; ?>" required/></p>
                <p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar" id="ocultar"/></p>
                </form>
            </section>
            <section>
        </div>
        <!--Creación de Tabla-->
        <table class="table table-striped table-bordered table-condensed"> <!--border="1" width="750px" cellpacing="50px"-->
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nombre de Usuario</th>
                <th>Cédula</th>
                <th>Estado</th>
                <th>Administrador</th>
                <th>Modificar</th>
                <th>Eliminar</th>
                <th>Email</th>
            </tr>
            <?php if (count($inicial) > 0 ): ?>
                <?php foreach($inicial as $Usuario) : ?>
                    <tr>
                        <?php echo $id; ?>
                        <td class="nombre"><?php echo $Usuario->first_name; ?></td>
                        <td class="apellido"><?php echo $Usuario->last_name; ?></td>
                        <td class="username"><?php echo $Usuario->username; ?></td>
                        <td class="cedula"><?php echo $Usuario->document_number; ?></td>
                        <td class="email"><?php echo $Usuario->email; ?></td>
                        <td class="state"><?php echo $Usuario->state; ?></td>
                        <td class="is_admin"><?php echo $Usuario->is_admin; ?></td>
                        <td ><a href="<?php echo base_url(); ?>index.php/inicial/index/<?php echo $Usuario->id; ?>"><button class="btn" id="inserte">Modificar</button><a/></td>
                        <td><a href="<?php echo base_url(); ?>index.php/inicial/eliminar/<?php echo $Usuario->id; ?>"><button class="btn btn-danger">Eliminar</button><a/></td>
                    </tr>
                <?php endforeach; ?>
            <?php else :?>
                <h2>Lo sentimos, aún no hay usuarios registrados</h2>
            <?php endif; ?>
        </table>
    </div>

    <footer>
        
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $("#mostrar").click(function(ver){
                    $("#form1").show("slow");
                });

                $("#ocultar").click(function(ver){
                    $("#form1").hide(1000);
                });
            });    

        </script>
    </footer>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">

    <div style="background-color:#0088BB;" class="container" style="top:100px">
        <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li>
                    <a href="<?php echo base_url(); ?>inicial">  Inicio  </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>estudiantes">Estudiantes</a>
                  </li>
                  <li class="active">
                    <a href="<?php echo base_url(); ?>profesores">Profesor</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>cursos">Cursos</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>grupos">Grupos</a>
                  </li>
                  <li>
                    <a href="#">Horario</a>
                  </li>
                </ul>
            </div>
        </div>  

        <?php 
            if( isset($profesor_actualizar) ){
                $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
                $first_name = $profesor_actualizar->first_name;
                $username = $profesor_actualizar->username;
                $last_name = $profesor_actualizar->last_name;
                $document_number = $profesor_actualizar->document_number;       
                //$password = $profesor_actualizar->password;       
                $email = $profesor_actualizar->email;
                $accion = 'actualizar';
            }
            else{
                $id = '';
                $first_name = '';
                $username = '';
                $last_name = '';
                $document_number = '';
                $password = '';
                $email = '';
                $accion = 'insertar';
            }
        ?>

    	<h2>Profesor CRUD</h2> <br>
        <div class="control-group">
            <form class="form-inline">
                <input type="text" list="datos" autofocus required/>
                <datalis id="datos">
                </datalis>
                <input type="submit" class="btn btn-primary" value="Mostrar">
            </form>
        </div>

        <button class="btn btn-primary" id="insert">Insertar</button>
        <br><br>
        <!--Formulario para cambiar datos-->
    	<section id="parrafo">
        	<form action="<?php echo base_url(); ?>profesores/<?php echo $accion; ?>" method="post">
                <?php echo $id; ?>
        		<p><label>Nombre:</label> <input autofocus type="text" name="first_name" value="<?php echo $first_name; ?>" required/></p>
        		<p><label>Apellido:</label> <input type="text" name="last_name" value="<?php echo $last_name; ?>" required/></p>
                <p><label>Username:</label> <input type="text" name="username" value="<?php echo $username; ?>" required/></p>
                <p><label>Cedula:</label> <input type="text" name="document_number" value="<?php echo $document_number; ?>" required/></p>
                <p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" required/></p>
        		<p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar" /></p>
        	</form>


            <!--Muestra la tabla-->
            <table class="table table-striped table-bordered table-condensed">
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nombre de Usuario</th>
            <th>Cédula</th>
            <th>Email</th>
            <th>Modificar</th>
            <th>Eliminar</th>
            </tr>
            </table>
            <?php if (count($profesores) > 0 ): ?>
                <?php foreach($profesores as $profesor) : ?>
                <table class="table table-striped table-bordered table-condensed">
                    <tr>
                    <td class="nombre"><?php echo $profesor->first_name; ?></td>
                    <td class="apellido"><?php echo $profesor->last_name; ?></td>
                    <td class="username"><?php echo $profesor->username; ?></td>
                    <td class="cedula"><?php echo $profesor->document_number; ?></td>
                    <!--p class="password" ><?php echo $estudiante->password; ?></p-->
                    <td class="email"><?php echo $profesor->email; ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/profesores/index/<?php echo $profesor->id; ?>"><button class="btn">Modificar</button><a/></td>
                    <td><a href="<?php echo base_url(); ?>index.php/profesores/eliminar/<?php echo $profesor->id; ?>"><button class="btn btn-danger">Eliminar</button><a/></td>
                    </tr>
                </table>
                <?php endforeach; ?>
            <?php else :?>
                <h2>No hay registros</h2>
            <?php endif; ?>
        </section>
    </div>    
     <script src="<?php echo base_url();?>js/jquery.js"></script>
     <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>
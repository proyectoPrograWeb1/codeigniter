<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">
<?php 
    if( isset($estudiante_actualizar) ){
        $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
        $first_name = $estudiante_actualizar->first_name;
        $username = $estudiante_actualizar->username;
        $last_name = $estudiante_actualizar->last_name;
        $document_number = $estudiante_actualizar->document_number;       
        $email = $estudiante_actualizar->email;
        $accion = 'actualizar';
    }
    else{
        $id = '';
        $first_name = '';
        $username = '';
        $last_name = '';
        $document_number = '';
        $email = '';
        $accion = 'insertar';
    }
?>
    
    <div style="background-color:#0088BB;" class="container" style="top:100px">
        <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li>
                    <a href="<?php echo base_url(); ?>inicial">  Inicio  </a>
                  </li>
                  <li class="active">
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
                    <a href="#">Horario</a>
                  </li>
                </ul>
            </div>
        </div>
    
    	<h2>Estudiante CRUD</h2>

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
        <div id="form1" style="display:none"> <!--style="display:none-->
    	<section >
        	<form class="form-horizontal" action="<?php echo base_url(); ?>estudiantes/<?php echo $accion; ?>" method="post">
                <?php echo $id; ?>
        		<p><label>Nombre:</label> <input autofocus type="text" name="first_name" value="<?php echo $first_name; ?>" required/></p>
        		<p><label>Apellido:</label> <input type="text" name="last_name" value="<?php echo $last_name; ?>" required/></p>
                <p><label>Username:</label> <input type="text" name="username" value="<?php echo $username; ?>" required/></p>
                <p><label>Cedula:</label> <input type="text" name="document_number" value="<?php echo $document_number; ?>" required/></p>
                <p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" required/></p>
        		<p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar" id="ocultar"/></p>
        	</form>
        </section>
        <section>
        </div>

            <!--Creación de Tabla-->
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
            <?php if (count($estudiantes) > 0 ): ?>
                <?php foreach($estudiantes as $estudiante) : ?>
                <table class="table table-striped table-bordered table-condensed"> <!--border="1" width="750px" cellpacing="50px"-->
                    <tr>
                    <td class="nombre"><?php echo $estudiante->first_name; ?></td>
                    <td class="apellido"><?php echo $estudiante->last_name; ?></td>
                    <td class="username"><?php echo $estudiante->username; ?></td>
                    <td class="cedula"><?php echo $estudiante->document_number; ?></td>
                    <td class="email"><?php echo $estudiante->email; ?></td>
                    <td colspan="0"><a href="<?php echo base_url(); ?>index.php/estudiantes/index/<?php echo $estudiante->id; ?>"><button class="btn" id="inserte">Modificar</button><a/></td>
                    <td colspan="0"><a href="<?php echo base_url(); ?>index.php/estudiantes/eliminar/<?php echo $estudiante->id; ?>"><button class="btn btn-danger">Eliminar</button><a/></td>
                    </tr>
                </table>
            <?php endforeach; ?>
            <?php else :?>
                <h2>Lo sentimos, aún no hay profesores registros</h2>
            <?php endif; ?>
        </section>
    </div>
    <footer>
        
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $("#insert").click(function(ver){
                    $("#form1").show("slow");
                });

                $("#ocultar").click(function(ver){
                    $("#form1").hide(50);
                });
            });    

        </script>
    </footer>
</body>
</html>
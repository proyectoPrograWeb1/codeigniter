<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">

    <div style="background-color:#0088BB;" class="container">
        <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li  class="active">
                    <a href="<?php echo base_url(); ?>inicial">  Inicio  </a>
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
                    <a href="#">Horario</a>
                  </li>
                </ul>
            </div>
        </div>
    	    <section>


            <div class="control-group">
                <form class="form-inline">
                    <input type="text" list="datos" autofocus required/>
                    <datalis id="datos">
                    </datalis>
                    <input type="submit" class="btn btn-primary" value="Mostrar">
                </form>
            </div>

            <!--Creación de Tabla-->

            <h2>Estudiastes</h2>

            <table class="table table-striped table-bordered table-condensed">
            <tr>
            <th >Nombre</th>
            <th >Apellido</th>
            <th >Nombre de Usuario</th>
            <th >Cédula</th>
            <th colspan="20">Email</th>
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
                        <td colspan="20" class="email"><?php echo $estudiante->email; ?></td>
                    </tr>
                </table>
                <?php endforeach; ?>
            <?php else :?>
                <h2>Lo sentimos, aún no hay estudiantes registros</h2>
            <?php endif; ?>
            <br>
            <h2>Profesores</h2>
            <table class="table table-striped table-bordered table-condensed">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre de Usuario</th>
                    <th>Cédula</th>
                    <th>Email</th>
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
                    <td class="email"><?php echo $profesor->email; ?></td>
                </tr>
            </table>
            <?php endforeach; ?>
            <?php else :?>
                <h2>Lo sentimos, aún no hay profesores registros</h2>
            <?php endif; ?>
        </section>
    </div>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    
</body>
</html>
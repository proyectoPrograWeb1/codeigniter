<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>

    <div class="container">
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
                    <a href="#">Cursos</a>
                  </li>
                  <li>
                    <a href="#">Grupos</a>
                  </li>
                  <li>
                    <a href="#">Horario</a>
                  </li>
                </ul>
            </div>
        </div>
	    <section>

            <!--Creación de Tabla-->

            <h2>Estudiastes</h2>

            <table class="table">
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
                <table class="table"> <!--border="1" width="750px" cellpacing="50px"-->
                    <tr>
                    <td class="nombre"><?php echo $estudiante->first_name; ?></td>
                    <td class="apellido"><?php echo $estudiante->last_name; ?></td>
                    <td class="username"><?php echo $estudiante->username; ?></td>
                    <td class="cedula"><?php echo $estudiante->document_number; ?></td>
                    <td colspan="20" class="email"><?php echo $estudiante->email; ?></td>
                    <!--td colspan="0"><a href="<?php echo base_url(); ?>index.php/estudiantes/index/<?php echo $estudiante->id; ?>"><button class="btn">Modificar</button><a/></td>
                    <td colspan="0"><a href="<?php echo base_url(); ?>index.php/estudiantes/eliminar/<?php echo $estudiante->id; ?>"><button class="btn">Eliminar</button><a/></td-->
                    </tr>
                </table>
                <?php endforeach; ?>
            <?php else :?>
                <h2>Lo sentimos, aún no hay estudiantes registros</h2>
            <?php endif; ?>
            <br>
            <h2>Profesores</h2>
            <table class="table">
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
                    <table class="table">
                        <tr>
                        <td class="nombre"><?php echo $profesor->first_name; ?></td>
                        <td class="apellido"><?php echo $profesor->last_name; ?></td>
                        <td class="username"><?php echo $profesor->username; ?></td>
                        <td class="cedula"><?php echo $profesor->document_number; ?></td>
                        <!--p class="password" ><?php echo $estudiante->password; ?></p-->
                        <td class="email"><?php echo $profesor->email; ?></td>
                        <!--td><a href="<?php echo base_url(); ?>index.php/profesores/index/<?php echo $profesor->id; ?>"><button class="btn">Modificar</button><a/></td>
                        <td><a href="<?php echo base_url(); ?>index.php/profesores/eliminar/<?php echo $profesor->id; ?>"><button class="btn">Eliminar</button><a/></td-->
                        </tr>
                    </table>
                    <?php endforeach; ?>
                <?php else :?>
                    <h2>Lo sentimos, aún no hay profesores registros</h2>
                <?php endif; ?>
        </section>
    </div>

    <script src="<?php echo base_url();?>js/jquery.js>"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js>"></script>
    
</body>
</html>
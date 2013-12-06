<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">
<?php 
    if( isset($grupo_actualizar) ){
        $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
        $course_id = $grupo_actualizar->course_id;
        $quarter  = $grupo_actualizar->quarter ;
        $professor_id = $grupo_actualizar->professor_id;
        $group_number = $grupo_actualizar->group_number;       
        $enabled = $grupo_actualizar->enabled;
        $accion = 'actualizar';
    }
    else{
        $id = '';
        $course_id = '';
        $quarter  = '';
        $professor_id = '';
        $group_number = '';
        $enabled = '';
        $accion = 'insertar';
    }
?>
    
    <div style="background-color:#0088BB;" class="container" style="top:100px">
        <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li>
                    <a href="<?php echo base_url(); ?>inicial">  Usuarios  </a>
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
                  <li class="active">
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
    
    	<h2>Grupo CRUD</h2>

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
            	<form class="form-horizontal" action="<?php echo base_url(); ?>grupos/<?php echo $accion; ?>" method="post">
                    <?php echo $id; ?>
            		<p><label>Curso id:</label> <input autofocus type="text" name="course_id" value="<?php echo $course_id; ?>" required/></p>
            		<p><label>Profesor id:</label> <input type="text" name="professor_id" value="<?php echo $professor_id; ?>" required/></p>
                    <p><label>Cuatrimestre:</label> <input type="text" name="quarter " value="<?php echo $quarter ; ?>" required/></p>
                    <p><label>Número de Grupo:</label> <input type="text" name="group_number" value="<?php echo $group_number; ?>" required/></p>
                    <p><label>Estado:</label> <input type="text" name="enabled" value="<?php echo $enabled; ?>" required/></p>
            		<p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar"/></p>
            	</form>
            </section>
            <section>
        </div>
        <!--Creación de Tabla-->
        <table class="table table-striped table-striped table-bordered table-condensed"> <!--border="1" width="750px" cellpacing="50px"-->
            <tr>
                    <th>Curso id</th>
                    <th>Profesor id</th>
                    <th>Cuatrimestre</th>
                    <th>Númoero de Grupo</th>
                    <th>Estado</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                
            <?php if (count($grupos) > 0 ): ?>
                <?php foreach($grupos as $grupo) : ?>
                    <tr>
                        <td class="curso_id"><?php echo $grupo->course_id; ?></td>
                        <td class="profesor_id"><?php echo $grupo->professor_id; ?></td>
                        <td class="cuatrimestre "><?php echo $grupo->quarter ; ?></td>
                        <td class="numoero_de_Grupo"><?php echo $grupo->group_number; ?></td>
                        <td class="estado"><?php echo $grupo->enabled; ?></td>
                        <td colspan="0"><a href="<?php echo base_url(); ?>index.php/grupos/index/<?php echo $grupo->id; ?>"><button class="btn" id="inserte">Modificar</button><a/></td>
                        <td colspan="0"><a href="<?php echo base_url(); ?>index.php/grupos/eliminar/<?php echo $grupo->id; ?>"><button class="btn btn-danger">Eliminar</button><a/></td>
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
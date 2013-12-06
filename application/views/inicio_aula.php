<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">
<?php 
    if( isset($aula_actualizar) ){
        $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
        $code = $aula_actualizar->code;
        $name = $aula_actualizar->name;
        $location = $aula_actualizar->location;
        $id_courso = $aula_actualizar->id_courso;
        $accion = 'actualizar';
    }
    else{
        $id = '';
        $code = '';
        $name = '';
        $location = '';
        $id_courso = '';
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
                  <li>
                    <a href="<?php echo base_url(); ?>grupos">Grupos</a>
                  </li>
                  <li class="active">
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
        
    	<h2>Aul CRUD</h2>
        
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
        	<section>
            	<form class="form-vertical" action="<?php echo base_url(); ?>aulas/<?php echo $accion; ?>" method="post">
                    <?php echo $id; ?>
            		<p><label>Codigo:</label> <input autofocus type="text" name="code" value="<?php echo $code; ?>" required/></p>
            		<p><label>Nombre:</label> <input type="text" name="name" value="<?php echo $name; ?>" required/></p>
                    <p><label>Ubicación:</label> <input type="text" name="location" value="<?php echo $location; ?>" required/></p>                    
                    <p><label>Curso id:</label> <input  type="text" name="id_courso" value="<?php echo $id_courso; ?>" required/></p>                    
                    <p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar"/></p>
            	</form>
            </section>
        </div>
        <section>
            <table class="table table-striped table-bordered table-condensed"> <!--border="1" width="750px" cellpacing="50px"-->
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Cursos id</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                <!--Creación de Tabla-->
                <?php if (count($aulas) > 0 ): ?>
                    <?php foreach($aulas as $aula) : ?>
                        <tr>
                            <td class="codigo"><?php echo $aula->code; ?></td>
                            <td class="name"><?php echo $aula->name; ?></td>
                            <td class="location"><?php echo $aula->location; ?></td>
                            <td class="course_id"><?php echo $aula->id_courso; ?></td>
                            <td colspan="0"><a href="<?php echo base_url(); ?>index.php/aulas/index/<?php echo $aula->id; ?>">
                                    <button class="btn">Modificar</button><a/>
                            </td>
                            <td colspan="0"><a href="<?php echo base_url(); ?>index.php/aulas/eliminar/<?php echo $aula->id; ?>">
                                    <button class="btn btn-danger">Eliminar</button><a/>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else :?>
                    <h2>Lo sentimos, aún no hay aulas registradas</h2>
                <?php endif; ?>
            </table>            
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
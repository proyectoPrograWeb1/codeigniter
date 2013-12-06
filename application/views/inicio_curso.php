<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body style="background-color:#0088BB;">
<?php 
    if( isset($curso_actualizar) ){
        $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
        $code = $curso_actualizar->code;
        $name = $curso_actualizar->name;
        $description = $curso_actualizar->description;
        $accion = 'actualizar';
    }
    else{
        $id = '';
        $code = '';
        $name = '';
        $description = '';
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
                  <li>
                    <a href="<?php echo base_url(); ?>estudiantes">Estudiantes</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>profesores">Profesores</a>
                  </li>
                  <li  class="active">
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
        
    	<h2>Curso CRUD</h2>
        
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
        
    	<section>
        	<form class="form-vertical" action="<?php echo base_url(); ?>cursos/<?php echo $accion; ?>" method="post">
                <?php echo $id; ?>
        		<p><label>Codigo:</label> <input autofocus type="text" name="code" value="<?php echo $code; ?>" required/></p>
        		<p><label>Nombre:</label> <input type="text" name="name" value="<?php echo $name; ?>" required/></p>
                <p><label>Descripción:</label> <input class="input-xxlarge" type="text" name="description" value="<?php echo $description; ?>" required/></p>                    
                <p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar"/></p>
        	</form>
        </section>
        <section>

            <!--Creación de Tabla-->
            <table class="table table-striped table-bordered table-condensed">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
            </table>
            <?php if (count($cursos) > 0 ): ?>
                <?php foreach($cursos as $curso) : ?>
                <table class="table table-striped table-bordered table-condensed"> <!--border="1" width="750px" cellpacing="50px"-->
                    <tr>
                        <td class="codigo"><?php echo $curso->code; ?></td>
                        <td class="name"><?php echo $curso->name; ?></td>
                        <td class="description"><?php echo $curso->description; ?></td>
                        <td colspan="0">
                            <a href="<?php echo base_url(); ?>index.php/cursos/index/<?php echo $curso->id; ?>">
                                <button class="btn">Modificar</button>
                            <a/>
                        </td>
                        <td colspan="0">
                            <a href="<?php echo base_url(); ?>index.php/cursos/eliminar/<?php echo $curso->id; ?>">
                                <button class="btn btn-danger">Eliminar</button>
                            <a/>
                        </td>
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
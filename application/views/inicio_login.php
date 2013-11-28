<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>
  
    	<h2>Inicio de Sesión</h2>
        <br>
    	<section>
        	<form class="form-vertical" action="<?php echo base_url(); ?>index.php/estudiantes/<?php echo $accion; ?>" method="post">
                <?php echo $id; ?>
        		<p><label>Nombre:</label> <input autofocus type="text" name="first_name" value="<?php echo $first_name; ?>" /></p>
        		<p><label>Apellido:</label> <input type="text" name="last_name" value="<?php echo $last_name; ?>" /></p>
                <p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" /></p>
                <p><label>Cedula:</label> <input type="text" name="document_number" value="<?php echo $document_number; ?>" /></p>
                <p><label>Password:</label> <input type="password" name="password" value="<?php echo $password; ?>" /></p>
        		<!--select name="categoria">
                    <option selected>Profesor</option>
                    <option>Estudiante</option>
                </select-->
        		<p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar"/></p>
        	</form>
        </section>
    </div>

    <script src="<?php echo base_url();?>js/jquery.js>"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js>"></script>
    
</body>
</html>
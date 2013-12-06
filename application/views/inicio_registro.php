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
        $password = $usuario_actualizar->password;    
        $email = $usuario_actualizar->email;
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
    
<body style="background-color:#0088BB;"> <!--style="background-color:#99CCFF;"-->

    <div class="center-block" style="background-color:#F5F5DC; height:530px; width: 385px; left:35%; top:100px; position: absolute; border-radius: 30px; box-shadow: 2px 2px 5px #999;">
        <div align="center">

            <!--Formulario para logiarse-->
            <form class="form-horizontal" action="<?php echo base_url(); ?>registros/<?php echo $accion; ?>" method="post">
                
                <label><h4>Registro de Usuarios</h4></label>
                <br><br>
                <p><label>Nombre:</label> <input autofocus type="text" name="first_name" value="<?php echo $first_name; ?>" required/></p>
                <p><label>Apellido:</label> <input type="text" name="last_name" value="<?php echo $last_name; ?>" required/></p>
                <p><label>Username:</label> <input type="text" name="username" value="<?php echo $username; ?>" required/></p>
                <p><label>Cedula:</label> <input type="text" name="document_number" value="<?php echo $document_number; ?>" required/></p>
                <p><label>Contraseña:</label> <input type="password" name="password" value="<?php echo $password; ?>" required></p>
                <p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" required/></p>
                <p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar"/></p>
            </form>
        </div>
    </div>
    <footer>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    
    </footer>
</body>
</html>
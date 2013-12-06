<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">

    
</head>

<!--?php

    $document_number = '';
    $password = '';
    $accion = 'comprobar';
    <?php echo $accion; ?>

?-->

<body style="background-color:#0088BB;"> <!--style="background-color:#99CCFF;"-->

    <div class="center-block" style="background-color:#F5F5DC; height:210px; width:385px; left:35%; top:200px; position: absolute; border-radius: 30px; box-shadow: 2px 2px 5px #999;">
        
        <!--Formulario para logiarse-->
        <form class="form-horizontal" action="<?php echo base_url(); ?>usuarios/comprobar/" method="post" >
            
            <div class="control-group">
                <div class="controls">
                    <label><h4>Inicio de Sesión</h4></label>
                </div>
            </div>
            <!--Div que contiene el label Cédula e imput document_number para digitar la cédula-->
            <div class="control-group">

                <label class="control-label">Cédula:</label>
                <div class="controls">
                    <input autofocus  class="input-medium" type="text" id="document_number" name="document_number" placeholder="Cédula" required>
                </div>

            </div>
            <!--Div que contiene el label Constraseña e imput password para digitar la contraseña-->
            <div class="control-group">

                <label class="control-label"> Contraseña:   </label>
                <div class="controls">
                    <input class="input-medium" class="controls" type="password"  id="password" name="password" placeholder="Contraseña" required>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">  
                    <a href=" " id="url"><button type="submit" class="btn btn-primary" >Entrar</button></a>
                </div>
            </div>
       
        </form>
    </div>
    <footer>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        
        <!--script >
          
            $(document).ready(function(){

                $("#ingresar").click(function(evento){
                    var usuario = $.trim($('#document_number').val().toUpperCase());
                    var passw = $.trim($('#password').val().toUpperCase());

                    if((usuario == '')||(passw == '')) //En caso de que uno o los dos campos estén vacios
                    {
                        alert("Hay campos vacios"); //muestra el mensaje

                    }else{ //Si no están vacios, direcionar la vista inicial
                    
                      document.getElementById("url").href = "<?php echo base_url(); ?>inicial";
                    }
                });
             
            });
        </script-->
    </footer>
</body>
</html>
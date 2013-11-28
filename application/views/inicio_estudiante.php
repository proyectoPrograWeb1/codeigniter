<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>
<?php 
    if( isset($estudiante_actualizar) ){
        $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
        $first_name = $estudiante_actualizar->first_name;
        $username = $estudiante_actualizar->username;
        $last_name = $estudiante_actualizar->last_name;
        $document_number = $estudiante_actualizar->document_number;       
        //$password = $estudiante_actualizar->password;       
        $email = $estudiante_actualizar->email;
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
    
    <div class="container" style="top:100px">
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
        
    	<h2>Estudiante CRUD</h2>
        <br>
    	<section>
        	<form name="frmLogin" onsumint="return fntValidar(this);" class="form-vertical" action="<?php echo base_url(); ?>index.php/estudiantes/<?php echo $accion; ?>" method="post">
                <?php echo $id; ?>
        		<p><label>Nombre:</label> <input autofocus type="text" name="first_name" value="<?php echo $first_name; ?>" /></p>
        		<p><label>Username:</label> <input type="text" name="username" value="<?php echo $username; ?>" /></p>
                <p><label>Apellido:</label> <input type="text" name="last_name" value="<?php echo $last_name; ?>" /></p>
                <p><label>Cedula:</label> <input type="text" name="document_number" value="<?php echo $document_number; ?>" /></p>
                <!--p><label>Password:</label> <input type="password" name="password" value="<?php echo $password; ?>" /></p-->
        		<p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" /></p>
                <!--select name="categoria">
                    <option selected>Profesor</option>
                    <option>Estudiante</option>
                </select-->
        		<p><input class="btn btn-primary" type="submit" name="guardar" value="Guardar"/></p>
        	</form>
        </section>
        <section>

            <!--Creación de Tabla-->
            <table class="table table-bordered">
            <tr>
            <th >Nombre</th>
            <th >Apellido</th>
            <th >Nombre de Usuario</th>
            <th >Cédula</th>
            <th colspan="20">Email</th>
            <th >Modificar</th>
            <th >Eliminar</th>
            </tr>
            </table>
            <?php if (count($estudiantes) > 0 ): ?>
                <?php foreach($estudiantes as $estudiante) : ?>
                <table class="table table-bordered"> <!--border="1" width="750px" cellpacing="50px"-->
                    <tr>
                    <td class="nombre"><?php echo $estudiante->first_name; ?></td>
                    <td class="apellido"><?php echo $estudiante->last_name; ?></td>
                    <td class="username"><?php echo $estudiante->username; ?></td>
                    <td class="cedula"><?php echo $estudiante->document_number; ?></td>
                    <td colspan="20" class="email"><?php echo $estudiante->email; ?></td>
                    <td colspan="0"><a href="<?php echo base_url(); ?>index.php/estudiantes/index/<?php echo $estudiante->id; ?>"><button class="btn">Modificar</button><a/></td>
                    <td colspan="0"><a href="<?php echo base_url(); ?>index.php/estudiantes/eliminar/<?php echo $estudiante->id; ?>"><button class="btn btn-danger">Eliminar</button><a/></td>
                    </tr>
                </table>
                <?php endforeach; ?>
            <?php else :?>
                <h2>No hay registros</h2>
            <?php endif; ?>

        </section>

    </div>

    <script src="<?php echo base_url();?>js/jquery.js>"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js>"></script>

    <script>

        //funcion que es llamada en el evento submit del formulario
        function fntValidar(){
            //obtener el formulario para utilizarlo en la validacion
            var frmFormulario=document.forms['frmLogin'];
            //contar la cantidad de elementos que contiene el formulario
            var iElementos=frmFormulario.elements.length;
                     
            //recorrer todos los elementos del formulario
            for(var iCont=0;iCont<iElementos;iCont++){
                //obtener el elemento actual para utilizarlo
                var objElemento=frmFormulario.elements[iCont];
                         
                //validar unicamente los elementos del tipo "text" (campos de texto)
                if(objElemento.type=='text'){
                    /*estamos utilizando la funcion trim (funcion no propia de JavaScript)
                    para eliminar los espacios en blanco al inicio y final de una cadena*/
                    if(trim(objElemento.value)==''){
                        //mostramos un mensaje al usuario
                        alert('Por favor, complete todos los campos del formulario.');
                        //enfocamos el campo que exta vacio
                        objElemento.focus();
                        //borramos el contenido del campo (podria contener espacios en blanco)
                        objElemento.value='';
                        //devolvemos false para que el formulario no sea procesado
                        return false;
                    }
                }
            }
                     
            //llegamos hasta aqui solo en caso de que todos los campos no esten vacios
            //le preguntamos al usuario si desea almacenar los datos
            if(!confirm('¿Desea almacenar los datos actuales?')){
                //el usuario indica que no desea almacenar los datos
                //entonces devolvemos false para que el formulario no sea procesado
                return false;
            }
        }
                 
        //funcion para eliminar los espacios al inicio y final de cualquier cadena
        //en otros lenguajes se conoce como "trim", JavaScript no cuenta con ella
        function trim(strTexto){
            //eliminamos los espacios iniciales y finales, con expresiones regulares
            return strTexto.replace(/^\s+/g,'').replace(/\s+$/g,'');

    </script>
    
</body>
</html>
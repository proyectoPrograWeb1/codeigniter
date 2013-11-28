<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Crear Usuario</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<script type="text/javascript">
	function confirma(){
	    if (confirm("¿Realmente desea eliminarlo?")){
	        alert("El registro ha sido eliminado.") }
	        else {
	        return false
	    }
	}
	</script>
</head>
<body>
<table>
    <th>Nombre</th>
    <th>Email</th>
    <th>Asunto</th>
    <th>Mensajes</th>
    <th>Hora</th>
    <th>Fecha</th>
    <th>Eliminar</th>
    <?php
    if ($comentarios)
    {
        foreach($comentarios as $comentario)
        {
    ?>
    <tr>
        <td><?=$comentario->nombre?></td>
        <td><?=$comentario->email?></td>
        <td width="180"><?=$comentario->asunto?></td>
        <td><?=$comentario->mensajes?></td>
        <td width="80"><?=$comentario->fecha?></td>
        <td><?=$comentario->hora?></td>
        <td><a onclick="if(confirma() == false) return false" href="<?=base_url()?>eliminar/borrar_comentario/<?=$comentario->id?>">Eliminar</a></td>
    </tr>
    <?php
    }
    }else{
    ?>
    <tr>
        <td colspan="7" align="center">No hay comentarios</td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
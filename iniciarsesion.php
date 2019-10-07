<!DOCTYPE html>
<div class="form5">
<center>
<html>
<head>
<meta charset="utf-8 name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión</title>
<link rel="stylesheet" href="css/form5.css">
</head>
<body>
<?php require 'partials/header.php' ?>

<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?>
<table width=100%>

	<tr>
		<th align="center" style="width=100%" colspan="4"> <h1>Iniciar Sesión</h1>
		<span>o <a class="text" href="agregaralumno.php">Registrarse<br></a></span>
		<br>
		<form method="post" action="iniciarsesion2.php" > </th></tr>

	<tr>
	<th></th>
	<td align="center" width=30%> <legend><span class="number">1</span> Correo: </legend> <br>
								<legend><span class="number">2</span> Contraseña: </legend> <br ></td>
								
	<td width=30% align="left"> <input  type="email" style="width: 100%" name="correo"  placeholder="Ingresa tu correo" required> <br>
								<input  type="password" style="width: 100%"  name="contrasena" placeholder="Ingresa tu contraseña" required> <br> </td>
	<td></td>
	</tr>
	
	<tr>
	<th align="center" style="width=100%" colspan="4">  <input type="submit" value="Inicar Sesión">   <br>
		  <span> <a class="text" href="email.php">¿Has olvidado la contraseña?</a></span> </th>
	</tr>
</form>

</table>
</body>
</html>
</div>
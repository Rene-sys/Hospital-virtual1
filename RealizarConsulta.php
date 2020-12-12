<html> 
<head>
</head>
<body background= "https://sc01.alicdn.com/kf/HTB1LmewyyCYBuNkHFCcq6AHtVXak/200957677/HTB1LmewyyCYBuNkHFCcq6AHtVXak.jpg_.webp>
<form action="welcome.php" method="post">
<div class="row">
	<H1 align="center"><label>NOMBRE</label></H1>
	<H1 align="center"><input type="text" name="CeduText" class="form-control"></H1>
</div>
<div class="row">
<form action="welcome.php" method="post">
	<H1 align="center"><label>Apellido</label></H1>
	<H1 align="center"><input type="text" name="ApeText" class="form-control"></H1>

</div>
<div class="row">
<form action="welcome.php" method="post">
	<H1 align="center"><label>DESCRIPCION</label></H1>
	<H1 align="center"><input type="text" name="ApeText" class="form-control"></H1>
	
</div>
<div class="row">
<form action="welcome.php" method="post">
	<H1 align="center"><label>FECHA</label></H1>
	<H1 align="center"><input type="text" name="FechText" class="form-control"></H1>

</div>
<div class="row">
	<H1 align="center"><label>ASEGURADO</label></H1>
	<H1 align="center"><input type="text" name="HorText" class="form-control"></H1>
</div>
<H1 align="center"><input type="submit"></H1>
</form>
<br><a href="principal.php"><input type="button" name="regresar" value="REGRESAR"></a></br>
<br><a href="https://us04web.zoom.us/j/77121233539?pwd=WFMwV0hTdk1GeUhMSmhYNUo3MXc1dz09"><input type="button" name="regresar" value="CONECTARSE POR ZOOM"></a></br>
	<b><B><I>ID:</B></I><br>
	<B><I>CONTRASENA:</B></I>
</FORM>
</body>
<?php

// si pulsamos el boton "Realizar consulta"...
if (isset($_POST["RECEPCION_LINEA"])){
$ID_Cita = $_POST["ID_REGISTRO"];
$ID_DEPART = $_POST["ID_CITA"];
$CEDULA = $_POST["NOMBRE_PAC"];
$NOMBRE = $_POST["APELLIDO"];
$APELLLIDO = $_POST["DESCRIPCION"];
$FECHA = $_POST["FECHA"];
$HORA = $_POST["ASEGURADO"];



}
?>
</div>
</form>
<!--<div class="footer">
<p>Copyrigh</p>
</div>-->
</body>
</html>
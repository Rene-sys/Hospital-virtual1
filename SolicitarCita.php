<html> 
<head>
</head>
<body  background="https://mott.social/wp-content/uploads/2019/08/consultorio-exitosos.jpg" >
<form action="welcome.php" method="post">
<div class="row">
	<H1 align="center"><label>elija el departamento en donde desea solicitar su cita</label></H1>
	<H1 align="center"><select name="barcodeType" id="barcodeType" class="form-control"></H1>
	<option value="1">Cardiología</option>  		 
	<option value="2">Neumología </option> 
	<option value="3">Odontología </option>
	<option value="4">Psicología </option>
	<option value="5">Hematología </option>
	<option value="6">Geriatría </option>
	<option value="7">Oncología </option>
	<option value="8">Pediatría </option>
	<option value="9">Medicina_interna </option>
	<option value="10">Gastroenterología </option>
	<option value="11">Toxicología </option>
	<option value="12">Dermatología </option>
	<option value="13">Reumatología </option>
	<option value="14">Alergología </option>
</select>
</div>
<div class="row">
	<H1 align="center"><label>ingrese su cedula:</label></H1>
	<H1 align="center"><input type="text" name="CeduText" class="form-control"><H1>
</div>
<div class="row">
	<H1 align="center"><label>Nombre</label></H1>
	<H1 align="center"><input type="text" name="NomText" class="form-control"></H1>
</div>
<div class="row">
	<H1 align="center"><label>Apellido</label></H1>
	<H1 align="center"><input type="text" name="ApeText" class="form-control"></H1>
</div>
<div class="row">
	<H1 align="center"><label>Fecha</label>
	<H1 align="center"><input type="text" name="FechText" class="form-control"></H1>
</div>
<div class="row">
	<H1 align="center">Hora</H1>
 	<b><H1 align="center"><select name="barcodeType" id="barcodeType" class="form-control"></H1></br>
 	<option value="1">7:00-8:00</option>
 	<option value="2">8:00-9:00</option>
 	<option value="3">9:00-10:00</option>
	<option value="3">10:00-11:00</option>
	<option value="3">11:00-12:00</option>
	<option value="3">1:00-2:00</option>
	<option value="3">2:00-3:00</option>
	<option value="3">3:00-4:00</option>
</select>
</div>
<H1 align="center"><input type="submit"></H1>
</FORM>
<br><a href="principal.php"><input type="button" name="regresar" value="INSERTAR Y REGRESAR"></a></br>

</body>

<?php

// si pulsamos el boton "Solicitar"...
if (isset($_POST["Solicitar_Cita"])){
$ID_Cita = $_POST["ID_CITA"];
$ID_DEPART = $_POST["ID_DEPART"];
$CEDULA = $_POST["CEDULA"];
$NOMBRE = $_POST["NOMBRE"];
$APELLLIDO = $_POST["APELLIDO"];
$FECHA = $_POST["FECHA"];
$HORA = $_POST["HORA"];

}
?>
</div>
</form>
<!--<div class="footer">
<p>Copyrigh</p>
</div>-->
</body>
</html>
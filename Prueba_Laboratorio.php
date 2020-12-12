<html> 
<head>
</head>
<body background= "https://www.labosd.com/wp-content/uploads/revslider/banner-4.jpg">
<from method="post">
<div class="row">
	<H1 align="center"><label>Laboratorio</label></H1>
	<H1 align="center"><select name="Laboratype" id="describtype" class="from-control"></H1>
	<option value="01">solicitud de laboratorio</option>
	<option value="02">Pruebas de laboratorio</option>
</select>
</div>
<div class="row">
	<H1 align="center">nombre del paciente</H1>
	<H1 align="center"><input type="text" name="pacText" class="form-control"></H1>
</div>
<div class="row">
	<H1 align="center"><label>cedula</label></H1>
	<H1 align="center"><input type="text" name="cedText" class="form-control"></H1>
</div>
<div class="row">
	<H1 align="center"><label>Descripcion de la prueba</label></H1>
	<H1 align="center"><input type="text" name="descText" class="form-control"></H1>
</div>
<div class="row">
	<H1 align="center"><label>Pruebas de Laboratorio</label></H1>
	<H1 align="center"><select name="Laboratype" id="describtype" class="from-control"></H1>
	<option value="01">Prueba de Heces</option>
	<option value="02">Prueba de Perfil Renal</option>
	<option value="03">Prueba de Perfil Lipido</option>
	<option value="04">Pruebas de Perfil Hipertilico</option>
	<option value="05">Prueba de Perfil Urinalis</option>
	<option value="06">Pruebas de Perfil Hemograma</option>
	<option value="07">Pruebas de Perfil Metabolico</option>
</select>
</div>
<H1 align="center"><input type="submit"></H1>
</form>
<br><a href="principal.php"><input type="button" name="regresar" value="INSERTAR Y REGRESAR"></a></br>
</body>
<?php

// si pulsamos el boton "Laboratorio"...
if (isset($_POST["Laboratorrio"])){
$ID_LAB = $_POST["ID_LAB"];
$ID_Paciente = $_POST["ID_PACIENTE"];
$Descripcion = $_POST["DESCRIPCION"];
$P_HECES = $_POST["P_HECES"];
$P_RENAL = $_POST["P_RENAL"];
$P_LIQUIDO = $_POST["P_LIQUIDO"];
$P_HIPERTILICO = $_POST["P_HIPERTILICO"];
$P_URINALIS = $_POST["P_URINALIS"];
$P_HEMOGRAMA = $_POST["P_HEMOGRAMA"];
$P_METABOLICO = $_POST["P_METABOLICO"];


}
?>
</div>
</form>
<!--<div class="footer">
<p>Copyrigh</p>
</div>-->
</body>
</html>

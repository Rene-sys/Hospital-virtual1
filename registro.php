<?php
$ID_HOSPITAL = $_POST["opcion"];
$ID_CEDULA = $_POST["ident"];
$NOMBRE = $_POST["nombre"];
$APELLIDO = $_POST["apellido"];
$PAIS = $_POST["pais"];
$TELEFONO = $_POST["cell"];
$GENERO = $_POST["genero"];
$CONTRASENA = $_POST["contra"];

$connection = oci_connect('"Virtual"','grupo1','localhost/xe');
$sql = "INSERT INTO REGISTRO_PROFESIONAL(ID_HOSPITAL,ID_CEDULA,NOMBRE,APELLIDO,PAIS,TELEFONO,GENERO,CONTRASENA) VALUES('$ID_HOSPITAL','$ID_CEDULA','$NOMBRE','$APELLIDO','$PAIS','$TELEFONO','$GENERO','$CONTRASENA')";
$union = oci_parse($connection,$sql);
oci_execute($union);
oci_commit($connection);


?>
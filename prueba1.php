
<?php
$boton1="";
if(isset($_POST['boton1']))$boton1=$_POST['boton1'];

if($boton1){

$username ='"Virtual"';

$password= 'grupo1';

$connection_string = 'localhost/xe';

$connection =oci_connect(
  $username,
   $password,
   $connection_string
 );

if (!$connection)
   echo 'oops:( conexion fallida';
else
   echo 'CONECTADO A ORACLE';
oci_close($connection);
}
?>
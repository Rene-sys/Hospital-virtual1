<?php
  function buscarpersona($connection, $id )
{ 
  
  $sql="SELECT * FROM "Virtual"."CLAVE_USUARIO" WHERE id=$ID_CONTRASENA"";
 $objPersona = null;

 $stmt = oci_parse($connection, $sql);
 $ok = oci_execute( $stmt );

 if($ok == true)
{

 if(oci_num_rows($stmt) > 0 )
  $objPersona = oci_fetch_object( $stmt );
}
oci_free_statement($stmt);

return $objPersona;
}
?>
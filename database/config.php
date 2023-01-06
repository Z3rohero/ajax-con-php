<?php 

   $conn =  new mysqli("127.0.0.1","root","","prueba");
   if($conn -> connect_error){
    die('error de conexion'.$conn->connet_error);
   }else{
    echo "conexio exitosa";
   }

?>
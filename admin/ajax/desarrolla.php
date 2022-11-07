<?php

switch($_GET["origen"]){
 case 'codclie':
   include_once 'codlcie.class.php';
   $usuario = new Usuarios();
 break;

 case 'prov':
   include_once 'directorio.class.php';
   $clase_origen="proveedores";
   $usuario = new Usuarios();
 break;
 case 'tax':
    include_once 'taxid.class.php';
    $usuario = new Usuarios();
 break;
 case 'clien':    
   include_once 'directorio.class.php';
   $clase_origen="clientes";
   $usuario = new Usuarios();
 break;
 case 'alian':
    include_once 'directorio.class.php';
    $clase_origen="alianza";
    $usuario = new Usuarios();
 break;
 case 'usuarios_entradas':
    include_once 'usuarios_entradas.class.php';
 break;
 case 'item':
 
 // include_once 'taxid.class.php';
  //  $usuario = new Usuarios();

   include_once 'items.class.php';
   $usuario = new Usuarios();
 break;

}

//echo utf8_encode(json_encode($usuario->buscarUsuario($_GET['term'])));
echo json_encode($usuario->buscarUsuario($_GET['term'],$clase_origen));
?>

<?php
class Usuarios
{
    public function  __construct() {
        include("config_ajax.php");
        mysql_connect($dbhost, $dbuser, $dbpass);

        mysql_select_db($dbname);
    }

    public function buscarUsuario($nombreUsuario){
        $datos = array();
             
        $sql = "SELECT nombre FROM taxid WHERE nombre LIKE '%$nombreUsuario%'";

        $resultado = mysql_query($sql);

        while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
            $datos[] = array("value" => utf8_encode($row['nombre']));
        }

        return $datos;
    }
}

?>
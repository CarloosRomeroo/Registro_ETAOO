<?php
/**
 * Created by Carlos.
 * Date: 01/11/2023
 * Time: 0920
 */

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','ETAOO');


$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    //echo "<script>alert('Conexión con exito a la base de datos');</script>";
}catch (PDOException $e){
    //print_r($e);
    // echo "fr";
    echo "<script>alert('error al conectar con la base de datos');</script>";
}

$URL='http://localhost/sismatriculacion';

date_default_timezone_set("America/Tegucigalpa");
$fechaHora =date("Y-m-d H:i:s");
$fecha_del_sistema =date("Y-m-d");
$hora_del_sistema =date("H:i:s");
$estado_del_registro = "1";


$dia_actual = date("d");

?>


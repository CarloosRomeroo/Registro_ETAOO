<?php
/**
 * Created by Carlos.
 */

include ('../app/config.php');


date_default_timezone_set("America/Tegucigalpa");
$fechaHora = date('Y-m-d h:i:s');
$estado = '1';


$ci = $_POST['ci'];

//comprobar
$contador=0;
$query = $pdo->prepare("SELECT * FROM tb_ETAOO WHERE ci = '$ci' AND estado ='1' ");
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
}
if($contador>0){
    echo "<h1>El estudiante ya fue registrado <a href='comprobante.php?ci=$ci'>Imprimir comprobante</a></h1>";

}else{
    //echo "no fue registrado";
    $apellidos_nombres = $_POST['apellidos_nombres'];
    $ci = $_POST['ci'];
    $nroCelular = $_POST['nroCelular'];
    $correo = $_POST['correo'];
    $genero = $_POST['genero'];
    $municipio = $_POST['municipio'];
    $barrio = $_POST['barrio'];
    $tutor = $_POST['tutor'];
    $cTradicional = $_POST['cTradicional'];
    $cGastronomia = $_POST['cGastronomia'];
    $cBarismo = $_POST['cBarismo'];
    $cGeneral = $_POST['cGeneral'];
    $tGeneral = $_POST['tGeneral'];
    $tGastronomia = $_POST['tGastronomia'];
    $tReposteria = $_POST['tReposteria'];
    $adminEmpresas = $_POST['adminEmpresas'];
    $mercaYcomercializacion = $_POST['mercaYcomercializacion'];
    $jornada = $_POST['jornada'];
    $horario = $_POST['horario'];
    $tipoMatricula = $_POST['tipoMatricula'];
    $nroDeposito = $_POST['nroDeposito'];
    $nroID = $_POST['nroId'];
    $pFormativa = $_POST['pFormativa'];



//$foto_deposito_matricula = $_POST['foto_deposito_matricula'];
    $nombre_de_foto_perfil = "".date('Y-m-d-h-i-s');
    $filename1 = $nombre_de_foto_perfil."__".$_FILES['fotoDeposito']['name'];
    $location = "documentos/".$filename1;
    move_uploaded_file($_FILES['fotoDeposito']['tmp_name'],$location);



//$documentos = $_POST['documentos'];
    $nombre_de_foto_perfil = "".date('Y-m-d-h-i-s');
    $filename3 = $nombre_de_foto_perfil."__".$_FILES['documentos']['name'];
    $location = "documentos/".$filename3;
    move_uploaded_file($_FILES['documentos']['tmp_name'],$location);



    $sentencia = $pdo->prepare('INSERT INTO tb_ETAOO
(apellidos_nombres,ci,nroCelular,correo,genero,municipio,barrio,tutor,cTradicional,cGastronomia,cBarismo,cGeneral,tGeneral,tGastronomia,tReposteria,adminEmpresas,mercaYcomercializacion,pFormativa,jornada,horario,tipoMatricula,nroDeposito,nroId,fotoDeposito,fotoCedula,documentos, fyh_creacion, estado)
VALUES ( :apellidos_nombres,:ci,nroCelular,:correo,:genero,:municipio,:barrio,:tutor,:cTradicional,:cGastronomia,:cBarismo,:cGeneral,:tGeneral,:tGastronomia,:tReposteria,:adminEmpresas,:mercaYcomercializacion,:pFormativa,:jornada,:horario,:tipoMatricula,:nroDeposito,:nroId,:fotoDeposito,:fotoCedula,:documentos, :fyh_creacion,: estado)');

    $sentencia->bindParam(':apellidos_nombres',$apellidos_nombres);
    $sentencia->bindParam(':ci',$ci);
    $sentencia->bindParam(':nroCelular',$nroCelular);
    $sentencia->bindParam(':correo',$correo);
    $sentencia->bindParam(':genero',$genero);
    $sentencia->bindParam(':municipio',$municipio);
    $sentencia->bindParam(':barrio',$barrio);
    $sentencia->bindParam(':tutor',$tutor);
    $sentencia->bindParam(':cTradicional',$cTradicional);
    $sentencia->bindParam(':cGastronomia',$cGastronomia);
    $sentencia->bindParam(':cBarismo',$cBarismo);
    $sentencia->bindParam(':cGeneral',$cGeneral);
    $sentencia->bindParam(':tGeneral',$tGeneral);
    $sentencia->bindParam(':tGastronomia',$tGastronomia);
    $sentencia->bindParam(':tReposteria',$tReposteria);
    $sentencia->bindParam(':adminEmpresas',$adminEmpresas);
    $sentencia->bindParam(':mercaYcomercializacion',$mercaYcomercializacion);
    $sentencia->bindParam(':pFormativa',$pFormativa);
    $sentencia->bindParam(':jornada',$jornada);
    $sentencia->bindParam(':horario',$horario);
    $sentencia->bindParam(':tipoMatricula',$tipoMatricula);
    $sentencia->bindParam(':nroDeposito',$nroDeposito);
    $sentencia->bindParam(':nroId',$nroId);
    $sentencia->bindParam(':fotoDeposito',$fotoDeposito);
    $sentencia->bindParam(':fotoCedula',$fotoCedula);
    $sentencia->bindParam('fyh_creacion',$fechaHora);
    $sentencia->bindParam('estado',$estado_del_registro);

    if($sentencia->execute()){
        echo 'success';
        header('Location: comprobante.php?ci='.$ci );
    }else{
        echo 'error al registrar a la base de datos';
    }
}

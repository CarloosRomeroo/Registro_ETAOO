<?php
/**
 * Created by Carlos.
 * Date: 21/11/2023
 */
include('../app/config.php');
?>
<!doctype html>
<html lang="es">
<head>
    <title>ETAOO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo $URL;?>/public/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script src="<?php echo $URL;?>/public/js/jquery-3.5.1.min.js"></script>
</head>
<body style=" background-image: url('https://cdn.pixabay.com/photo/2023/11/01/17/55/etaoo-8358513_960_720.jpg');
    background-repeat: no-repeat;
    z-index: -3;
    background-size: 100vw 100vh;background-attachment: fixed">

<br><br>

<div class="container" style="background-color: #E56130">
    <div class="row">
        <div class="col-md-4">
            <br>
           <h1 style="color: #F9F1E6">Registro</h1>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <img src="https://hilariweb.com/public/icono1.png"
                 style="margin-top: 10px;float: right" width="100px" alt="">
        </div>
    </div>
    <br>
    <h2 ALIGN="center">Escuela de Artes y Oficios "ETAOO"</h2>
    <div class="row" style="background-color: #083831;color:#ffffff;height: 50px">
        <div class="col-md-12">
            <center>
                <h4 style="margin-top: 10px">MATRICULA 2024</h4></center>
        </div>
    </div>
    <div class="row">
        <div class="container" style="width: 95%">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary" style="box-shadow: 0px 5px 5px 5px #c0c0c0">
                        <div class="card-header">
                            Registre sus datos
                        </div>
                        <div class="card-body">
                            <form action="controller_create.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">APELLIDOS Y NOMBRES (MAYÚSCULA) </label>
                                            <input type="text" name="apellidos_nombres" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">CEDULA DE IDENTIDAD </label>
                                            <input type="number" name="ci" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="" style="font-size: 13px">NÚMERO DE CELULAR</label>
                                            <input type="number" name="celular" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" style="font-size: 13px">CORREO ELECTRONICO</label>
                                            <input type="email" name="correo" class="form-control" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TUTOR </label>
                                            <select name="tutor" id="" class="form-control" required>
                                                <option value="ALVERTINA H">ALVERTINA H</option>
                                                <option value="NOEL LOPEZ">NOEL LOPEZ</option>
                                                <option value="MIRNA LOPEZ">MIRNA LOPEZ</option>
                                                <option value="ABILIO MIMRAN">ABILIO MIMRAN</option>
                                                <option value="WENDY VENTURA">WENDY VENTURA</option>
                                                <option value="DANILO LEYVA HERNANDEZ">DANILO LEYVA HERNANDEZ</option>
                                                <option value="EVELIN TABORA">EVELIN TABORA</option>
                                                <option value="CARMEN PAZ">CARMEN PAZ</option>
                                                <option value="ANUAR MALDONADO">ANUAR MALDONADO</option>
                                                <option value="CARLOS KIBHER">CARLOS KIBHER</option>
                                                <option value="CARLOS LEON">CARLOS LEON</option>
                                                <option value="CARLOS VALENZUELA">CARLOS VALENZUELA</option>
                                                <option value="KAREN ALFARO">KAREN ALFARO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">CURSO O TALLER </label>
                                            <select name="especialidad" id="" class="form-control" required>
                                                <option value="COMIDA MEXICANA">COMIDA MEXICANA</option>
                                                <option value="BARBERIA">BARBERIA</option>
                                                <option value="BARISMO">BARISMO</option>
                                                <option value="BARTENDER">BARTENDER</option>
                                                <option value="ELECTRICIDAD BASICA">ELECTRICIDAD BASICA</option>
                                                <option value="COSTURA BASICA">COSTURA BASICA</option>
                                                <option value="BELLEZA Y COSMETOLOGIA">BELLEZA Y COSMETOLOGIA</option>
                                                <option value="CARPINTERIA BASICA">CARPINTERIA BASICA</option>
                                                <option value="GASTRONOMIA">GASTRONOMIA</option>
                                                <option value="COMIDA INTENSIVA">COMIDA INTENSIVA</option>
                                                <option value="CURSO DE PIÑATAS">CURSO PIÑATA</option>
                                                <option value="TALLER DE HAMBURGUESAS">TALLER DE HAMBURGUESAS</option>
                                                <option value="TALLER DE ALITAS Y CHICKEN FINGERS">TALLER DE ALITAS Y CHICKEN FINGERS</option>
                                                <option value="TALLER DE TACOS">TALLER DE TACOS</option>
                                                <option value="FLORISTERIA">FLORISTERIA</option>
                                                <option value="INGLES">INGLES</option>
                                                <option value="COMIDA INTENSIVA">COMIDA INTENSIVA</option>
                                                <option value="REPOSTERIA">REPOSTERIA</option>
                                                <option value="UÑAS ACRILICAS">UÑAS ACRILICAS</option>
                                                <option value="TALLER DE CAJITAS DE GENGIBRE">TALLER DE CAJITAS DE GENGIBRE</option>
                                                <option value="TALLER DE COMIDA CHINA">TALLER DE COMIDA CHINA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">JORNADA </label>
                                            <select name="ano_for" id="" class="form-control" required>
                                                <option value="LUNES">LUNES</option>
                                                <option value="MARTES">MARTES</option>
                                                <option value="MIERCOLES">MIERCOLES</option>
                                                <option value="JUEVES">JUEVES</option>
                                                <option value="VIERNES">VIERNES</option>
                                                <option value="SABADO">SABADO</option>
                                                <option value="DOMINGO">DOMINGO</option>
                                                <option value="LUNES - MARTES - VIERNES">LUNES - MARTES - VIERNES</option>
                                                <option value="MIERCOLES - JUEVES - SABADO">MIERCOLES - JUEVES - SABADO</option>
                                                <option value="SABADO - DOMINGO">SABADO - DOMINGO</option>
                                                <option value="LUNES - SABADO - VIERNES">LUNES - SABADO - VIERNES</VIERNES-></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">HORARIO </label>
                                            <select name="horario" id="" class="form-control" required>
                                                <option value="08:00 - 16:00">08:00 - 16:00</option>    
                                                <option value="08:00 - 12:00">08:00 - 12:00</option>
                                                <option value="13:00 - 16:00">13:00 - 16:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">TIPO DE MATRICULA </label>
                                            <select name="tipo_matriculacion" id="" class="form-control" required>
                                                <option value="ESTUDIANTE REGULAR ">
                                                    ESTUDIANTE REGULAR
                                                </option>
                                                <option value="ESTUDIANTE CAMO">
                                                    ESTUDIANTE BECARIO
                                                </option>
                                                <option value="ESTUDIANTE COOP. NUEVA VIDA LTDA">
                                                    ESTUDIANTE PROYECTO
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NÚMERO DE DEPOSITO  O RECIBO : (EJEMPLO = 10XXXXX3)  </label>
                                            <input type="text" name="nro_deposito_matricual" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">ADJUNTAR EL RECIBO DE DEPÓSITO (MATRICULA) </label>
                                            <input type="file" name="foto_deposito_matricula" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <hr>
                                <center>
                                    <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('Por favor revisa bien los datos antes de enviar');">
                                        <i class="fa fa-save"></i> Registrar Alumno
                                    </button>
                                </center>

                            </form>
                        </div>
                    </div>
                </div>



            </div>
            <br>
        </div>
    </div>
</div>





</body>
</html>
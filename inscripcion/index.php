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

    <script src="<?php echo $URL;?>/public/js/jquery- 3.5.1.min.js"></script>
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
                                            <label for="">NOMBRES Y APELLIDOS (MAYÚSCULA) </label>
                                            <input type="text" name="apellidos_nombres" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">CODIGO DE ESTUDIANTE </label>
                                            <input type="number" name="ci" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="" style="font-size: 13px">NÚMERO DE CELULAR</label>
                                            <input type="number" name="nroCelular" class="form-control" required>
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">GENERO </label>
                                            <select name="genero" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="MASCULINO">MASCULINO</option>
                                                <option value="FEMENINO">FEMENINO</option>
                                                <option value="NO ESPECIFICO">NO ESPECIFICO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">MUNICIPIO </label>
                                            <select name="municipio" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="SANTA ROSA DE COPAN">SANTA ROSA DE COPAN</option>
                                                <option value="CABAÑAS">CABAÑAS</option>
                                                <option value="CONCEPCION">CONCEPCION</option>
                                                <option value="COPAN RUINAS">COPAN RUINAS</option>
                                                <option value="CORQUIN">CORQUIN</option>
                                                <option value="CUCUYAGUA">CUCUYAGUA</option> 
                                                <option value="DOLORES">DOLORES</option>
                                                <option value="DULCE NOMBRE">DULCE NOMBRE</option>
                                                <option value="EL PARAISO">EL PARAISO</option>
                                                <option value="FLORIDA">FLORIDA</option>
                                                <option value="LA JIGUA">LA JIGUA</option>
                                                <option value="LA UNION">LA UNION</option>
                                                <option value="NUEVA ARCADIA">NUEVA ARCADIA</option>
                                                <option value="SAN AGUSTIN">SAN AGUSTIN</option>
                                                <option value="SAN JERONIMO">SAN JERONIMO</option>
                                                <option value="SAN JOSE">SAN JOSE</option>
                                                <option value="SAN JUAN DE OPOA">SAN JUAN DE OPOA</option>
                                                <option value="SAN NICOLAS">SAN NICOLAS</option>
                                                <option value="SAN PEDRO COPAN">SAN PEDRO COPAN</option>
                                                <option value="SANTA RITA">SANTA RITA</option>
                                                <option value="TRINIDAD COPAN">TRINIDAD COPAN</option>
                                                <option value="VERACRUZ">VERACRUZ</option>
                                                <option value="OTRO">OTRO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">BARRIO/COLONIA </label>
                                            <input type="text" name="barrio" class="form-control" required>
                                        </div>
                                    </div>
                                
                                </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TUTOR </label>
                                            <select name="tutor" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="ABILIO MIRANDA">ABILIO MIRANDA</option>
                                                <option value="MIRNA GOMEZ">MIRNA GOMEZ</option>
                                                <option value="CARMEN CASTRO">CARMEN CASTRO</option>
                                                <option value="ALBERTINA HERNANDEZ">ALBERTINA HERNANDEZ</option>
                                                <option value="WENDY VENTURA">WENDY VENTURA</option>
                                                <option value="DANILO LEYVA HERNANDEZ">DANILO LEYVA HERNANDEZ</option>
                                                <option value="EVELIN TABORA">EVELIN TABORA</option>
                                                <option value="ALEJANDRA PORTILLO">ALEJANDRA PORTILLO</option>
                                                <option value="ANUAR MALDONADO">ANUAR MALDONADO</option>
                                                <option value="CARLOS KIBHER">CARLOS KIBHER</option>
                                                <option value="CARLOS LEON">CARLOS LEON</option>
                                                <option value="CARLOS VALENZUELA">CARLOS VALENZUELA</option>
                                                <option value="KAREN ALFARO">KAREN ALFARO</option>
                                                <option value="XIOMARA SANTAMARIA">XIOMARA SANTAMARIA</option>
                                                <option value="MARCOS RAMOS">MARCOS RAMOS</option>
                                                 <option value="OTRO">OTRO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">CURSOS TRADICIONALES </label>
                                            <select name="cTradicional" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="SOLDADURA">SOLDADURA</option>
                                                <option value="CARPINTERIA">CARPINTERIA</option>
                                                <option value="ELECTRICIDAD">ELECTRICIDAD</option>
                                                <option value="CORTE Y CONFECCION">CORTE Y CONFECCION</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">GASTRONOMIA GENERAL </label>
                                            <select name="cGastronomia" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="GASTRONOMIA PARA SUB CHEF">GASTRONOMIA PARA SUB CHEF</option>
                                                <option value="AYUDANTES DE COCINA">AYUDANTES DE COCINA</option>
                                                <option value="GASTRONOMIA NACIONAL E INTERNACIONAL">GASTRONOMIA NACIONAL E INTERNACIONAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">BARISMO</label>
                                            <select name="cBarismo" id="" class="form-control" required>
                                                <option value=""></option>
                                                <option value="BARISMO BASICO">BARISMO BASICO</option>
                                                <option value="BARISMO INTERMEDIO">BARISMO INTERMEDIO</option>
                                                <option value="CATACION">CATACION</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">CURSOS GENERALES </label>
                                            <select name="cGeneral" id="" class="form-control" required>
                                                <option value=""></option>
                                                <option value="INGLES">INGLES</option>
                                                <option value="REPOSTERIA">REPOSTERIA</option>
                                                <option value="PANADERIA">PANADERIA</option>
                                                <option value="BARBERIA">BARBERIA</option>
                                                <option value="BELLEZA Y COSMETOLOGIA">BELLEZA Y COSMETOLOGIA</option>
                                                <option value="UÑAS ACRILICAS">UÑAS ACRILICAS</option>
                                                <option value="REFRIGERACION BASICA">REFRIGERACION BASICA</option>
                                                <option value="INSTALACION Y MANTENIMIENTO DE AIRES ACONDICIONADOS">INSTALACION Y MANTENIMIENTO DE AIRES ACONDICIONADOS</option>
                                                <option value="FLORISTERIA">FLORISTERIA</option>
                                                <option value="BISUTERIA">BISUTERIA</option>
        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TALLERES GENERALES  </label>
                                            <select name="tGeneral" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="ELABORACION DE JABONES Y VELAS">ELABORACION DE JABONES Y VELAS</option>
                                                <option value="ELABORACION DE VINOS ARTESANALES">ELABORACION DE VINOS ARTESANALES</option>
                                                <option value="ELABOFRACION DE PIÑATAS">ELABORACION DE PIÑATAS</option>
                                                <option value="BARTENDER">BARTENDER</option>
                                                <option value="PRIMEROS AUXILIOS">PRIMEROS AUXILIOS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TALLERES GASTRONOMIA </label>
                                            <select name="tGastronomia" id="" class="form-control" required>
                                                <option value=""></option>
                                                <option value="MODULO DE PIZZA">MODULO DE PIZZA</option>
                                                <option value="MODULO DE HAMBURGUESAS">MODULO DE HABURGUESAS</option>
                                                <option value="MODULO DE ALITAS Y CHICKEN FINGERS">MODULO DE ALITAS Y CHICKEN FINGERS</option>
                                                <option value="MODULO DE COMIDA ASIATICA">MODULO DE COMIDA ASIATICA</option>
                                                <option value="MODULO DE COMIDA CHINA">MODULO DE COMIDA CHINA</option>
                                                <option value="MODULO DE COMIDA ITALIANA">MODULO DE COMIDA ITALIANA</option>
                                                <option value="MODULO DE TABLAS DE QUESO">MODULOS DE TABLAS DE QUESO</option>
                                                <option value="MODULO DE BOQUITAS">MODULO DE BOQUITAS</option>
                                                <option value="MODULO DE ENCURTIDOS Y JALEAS">MODULO DE ENCURTIDOS Y JALEAS</option>
                                                <option value="MODULO DE LACTEOS">MODULO DE LACTEOS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TALLERES REPOSTERIA </label>
                                            <select name="tReposteria" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="MODULO DE POSTRES FRIOS">MODULO DE POSTRES FRIOS</option>
                                                <option value="MODULO DE ELABORACION Y DECORACION DE PASTELES">MODULO DE ELABORACION Y DECORACION DE PASTELES</option>
                                                <option value="MODULO DE DONAS">MODULO DE DONAS</option>
                                                <option value="OTRO">OTRO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">ADMINISTRACION DE EMPRESAS </label>
                                            <select name="adminEmpresas" id="" class="form-control" required>
                                                <option value=""></option>
                                                <option value="PROCEDIMIENTOS ADMINISTRATIVOS">PROCEDIMIENTOS ADMINISTRATIVOS</option>
                                                <option value="ANALISIS FINANCIEROS Y TOMA DE DECISIONES">ANALISIS FINANCIEROS Y TOMA DE DECISIONES </option>
                                                <option value="CONTABILIDAD DE COSTOS">CONTABILIDAD DE COSTOS</option>
                                                <option value="ESTRUCTURA DE COSTOS">ESTRUCTURA DE COSTOS</option>
                                                <option value="EDUCACION FINANCIERA">EDUCACION FINANCIERA</option>
                                                <option value="CONTABILIDAD BASICA">CONTABILIDAD BASICA</option>
                                                <option value="CALCULO DE IMPUESTOS SOBRE VENTA Y RENTA">CALCULO DE IMPUESTOS SOBRE VENTA Y RENTA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">MERCADEO Y COMERCIALIZACION </label>
                                            <select name="mercaYcomercializacion" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="EXPORTACION  E IMPORTACION DE PRODUCTOS Y MAQUINARIA">EXPORTACION  E IMPORTACION DE PRODUCTOS Y MAQUINARIA</option>
                                                <option value="ATENCION AL CLIENTE">ATENCION A CLIENTE</option>
                                                <option value="PLANES Y MODELOS DE NEGOCIO">PLANES Y MODELOS DE NEGOCIO</option>
                                                <option value="ESTUDIO DE MERCADO">ESTUDIO DE MERCADO</option>
                                                <option value="ESTRATEGIA DE VENTA Y MARKETING DIGITAL">ESTRATEGIA DE VENTA Y MARKETING DIGITAL</option>
                                                <option value="HERRAMIENTAS DE RECOLECCION DE DATOS">HERRAMIENTAS DE RECOLOECCION DE DATOS</option>
                                                <option value="ANALISIS ESTADISTICO">ANALISIS DESTADISTICOS</option>
                                                <option value="USO DE REDES SOCIALES">USO DE REDES SOCIALES</option>
                                                <option value="CREACION Y DESAROLLO DE NUEVOS PRODUCTOS">CREACION Y DESAROLLO DE NUEVOS PRODUCTOS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TUTOR </label>
                                            <select name="tutor" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="COMO CREAR UN CV EFECTIVO">COMO CREAR UN CV EFECTIVO</option>
                                                <option value="FORMATO Y ESTRUCTURA ADECUADA">FORMATO Y ESTRUCTURA ADECUADA</option>
                                                <option value="DESTACAR LOGROS Y HABILIDADES">DESTACAR LOGROS Y HABILIDADES</option>
                                                <option value="COMO REDACTAR UNA CARTA DE PRESENTACION PERSUSIVA">COMO REDACTAR UNA CARTA DE PRESENTACION PERSUSIVA</option>
                                                <option value="PERSONALIZACION PARA DIFERENTES EMPLEADORES">WENDY VENTURA</option>
                                                <option value="ACOMPAÑAR EL CV DE MANERA EFECTIVA">ACOMPAÑAR EL CV DE MANERA EFECTIVA</option>
                                                <option value="PRESENTACION PARA ENTREVISTAS">PRESENTACION PARA ENTREVISTAS</option>
                                                <option value="PREGUNTAS COMUNES EN ENTREVISTAS Y RESPUESTAS ADECUADAS">PREGUNTAS COMUNES EN ENTREVISTAS Y RESPUESTAS ADECUADAS</option>
                                                <option value="TECNICA DE COMUNICACION NO VERBAL">TECNICA DE COMUNICACION NO VERBAL</option>
                                                <option value="ESTRATEGIAS DE BUSQUEDA DE TRABAJO">ESTRATEGIAS DE BUSQUEDA DE TRABAJO</option>
                                                <option value="USO DE REDES PROFESIONALES Y SITIOS WEB DE EMPLEO">USO DE REDES PROFESIONALES Y SITIOS WEB DE EMPLEO</option>
                                                <option value="COMO APROVECHAR LAS FERIAS DE EMPLEO">COMO APROVECHAR LAS FERIAS DE EMPLEO</option>
                                                <option value="HABILIDADES DE COMUNICACIOIN EFECTIVA">HABILIDADES DE COMUNICACIOIN EFECTIVA</option>
                                                <option value="TRABAJO EN EQUIPO Y COLOBORACIONES">TRABAJO EN EQUIPO Y COLOBORACIONES</option>
                                                <option value="GESTION DEL CONFLICTO EN EL ENTORNO LABORAL">GESTION DEL CONFLICTO EN EL ENTORNO LABORAL</option>
                                                 <option value="LIDERAZGO EFECTIVO EN EL TRABAJO">LIDERAZGO EFECTIVO EN EL TRABAJO</option>
                                                 <option value="TOMA DE DECISIONES Y RESOUCION DE PROBLEMAS">TOMA DE DECISIONES Y RESOUCION DE PROBLEMAS</option>
                                                <option value="MOTIVACION Y GESTION DE EQUIPOS">MOTIVACION Y GESTION DE EQUIPOS</option>
                                                <option value="TECNICAS DE GESTION DE EMPLEO">ECNICAS DE GESTION DE EMPLEO</option>
                                                <option value="PRIORIZACION DE TAREAS">PRIORIZACION DE TAREAS</option>
                                                <option value="EVITAR LA PROCRASTINACION">EVITAR LA PROCRASTINACION</option>
                                                <option value="USO DE HERRAMIENTAS DE PRODUCTIVIDAD EN LINEA">USO DE HERRAMIENTAS DE PRODUCTIVIDAD EN LINEA</option>
                                                <option value="CONOCIMIENTOS BASICOS DE PROGRAMACIÓN">CONOCIMIENTOS BASICOS DE PROGRAMACIÓN</option>
                                                 <option value="SEGURIDAD EN LINEA Y PRIVACIDAD">SEGURIDAD EN LINEA Y PRIVACIDAD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">MERCADEO Y COMERCIALIZACION </label>
                                            <select name="especialidad" id="" class="form-control" required>
                                                <option value=""></option>    
                                                <option value="PLANIFICACION DE CARRERA A LARGO PLAZO">PLANIFICACION DE CARRERA A LARGO PLAZO</option>
                                                <option value="LA IMPORTANCIA DE LA CAPACITACION CONTINUA">LA IMPORTANCIA DE LA CAPACITACION CONTINUA</option>
                                                <option value="OBTENCION DE CERTIFICACIONES Y GRADOS ADICIONALES">OBTENCION DE CERTIFICACIONES Y GRADOS ADICIONALES</option>
                                                <option value="INICIO DE UN NEGOCIO PROPIO">INICIO DE UN NEGOCIO PROPIO</option>
                                                <option value="PLANIFICACION EMPRESARIAL">PLANIFICACION EMPRESARIAL</option>
                                                <option value="FINANZAS PARA EMPRENDEDORES">FINANZAS PARA EMPRENDEDORES</option>
                                                <option value="COMPORTAMIENTO ETICO EN EL LUGAR DE TRABAJO">COMPORTAMIENTO ETICO EN EL LUGAR DE TRABAJO</option>
                                                <option value="RESPONSABILIDAD SOCIAL CORPORATIVA">RESPONSABILIDAD SOCIAL CORPORATIVA</option>
                                                <option value="CREACION DE UN ENTORNO INCLUSIVO">CREACION DE UN ENTORNO INCLUSIVO</option>
                                                <option value="PREVENCION DE LA DISCRIMINACION Y EL ACOSO LABORAL">PREVENCION DE LA DISCRIMINACION Y EL ACOSO LABORAL</option>
                                                <option value="DESAROLLO DE RESILIENCIA EMOCIONAL">DESAROLLO DE RESILIENCIA EMOCIONAL</option>
                                                <option value="TECNICAS DE MANEJO DEL ESTRES">TECNICAS DE MANEJO DEL ESTRES</option>
                                                <option value="COMO MANTENER EL EQUILIBRIO ENTRE TRABAJO Y VIDA PERSONAL">COMO MANTENER EL EQUILIBRIO ENTRE TRABAJO Y VIDA PERSONAL</option>
                                                <option value="TECNICAS DE NEGOCIACION">TECNICAS DE NEGOCIACION</option>
                                                <option value="RESOLUCION DE CONFLICTOS EN EL TRABAJO">RESOLUCION DE CONFLICTOS EN EL TRABAJO</option>
                                                <option value="HABILIDADES DE MEDIACION">HABILIDADES DE MEDIACION</option>
                                                <option value="COMUNICACION CON COLEGAS SUPERIORES Y SUBORDINADOS">COMUNICACION CON COLEGAS SUPERIORES Y SUBORDINADOS</option>
                                                <option value="PRESENTACIONES EFECTIVAS">PRESENTACIONES EFECTIVAS</option>
                                                <option value="COMUNICACION EN ENTORNOS VIRTUALES">COMUNICACION EN ENTORNOS VIRTUALES</option>
                                                <option value="TRANSICION EXITOSA DE LA ESCUELA AL TRABAJO">TRANSICION EXITOSA DE LA ESCUELA AL TRABAJO</option>
                                                <option value="EXPECTATIVAS EN EL PRIMER EMPLEO">EXPECTATIVAS EN EL PRIMER EMPLEO</option>
                                                <option value="DESAROLLO DE HABILIDADES INICIALES EN EL TRABAJO">DESAROLLO DE HABILIDADES INICIALES EN EL TRABAJO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">JORNADA </label>
                                            <select name="jornada" id="" class="form-control" required>
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
                                            <select name="tipoMatricula" id="" class="form-control" required>
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
                                            <label for="">NÚMERO DE DEPOSITO O RECIBO : (EJEMPLO = 10XXXXX3)  </label>
                                            <input type="text" name="nroDeposito" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">ADJUNTAR EL RECIBO DE DEPÓSITO (MATRICULA) </label>
                                            <input type="file" name="fotoDeposito" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">ADJUNTAR LA FOTO DEL DNI </label>
                                            <input type="file" name="fotoCedula" class="form-control" required>
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

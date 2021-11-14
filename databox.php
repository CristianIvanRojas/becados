<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>DataBox</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/databox/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/databox/styleCris.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/databox/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="https://polotic.misiones.gob.ar/wp-content/uploads/2020/03/cropped-logo-poloweb.fw_-192x192.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/databox/styletabla.css">
    <link rel="stylesheet" href="css/databox/jquery.mCustomScrollbar.min.css">
    
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="https://polotic.000webhostapp.com/index/index.html"><img src="images/databox/logo.png" alt="#"></a> </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <a href="index.html"><button type="button" class="float-right btn btn-primary"
                                style="width: 20%;">Atrás</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- Mediciones -->

    <br>

    <section>



        <?php
        //Toma el ultimo registro de la base de datos
        $sql = "SELECT * FROM valores ORDER BY id DESC LIMIT 1";
        //$sql = "SELECT * from registro";
        $result = mysqli_query($con, $sql);
        if ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <div class="contenedorcard">
            <div class="card" style="border-radius: 50px; height:34em;width:22em;">
                <div class="bg-image ripple" data-mdb-ripple-color="light"
                    style="border-top-left-radius: 50px; border-top-right-radius: 13px;">

                    <!--ALERTA EN COLORES (cambia imagen)-------------------------------->
                    <?php
                        if ($mostrar['temperatura'] > 45) {
                        ?>
                    <img src="images/databox/Rojo.png" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <?php
                        } elseif ($mostrar['temperatura'] >= 30  and $mostrar['temperatura'] < 45) {
                        ?>
                    <img src="images/databox/Amarillo1.png" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <?php
                        } else {
                        ?>
                    <img src="images/databox/Azul.png" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <?php
                        }
                        ?>
                    <div class="mask" style="background-color: rgba(100,92,89);">
                        <div class="text-center text-white">
                            <p class="h3 mb-6">Fecha y Hora</p>
                            <p class="h5 mb-6"><?php echo $mostrar['hora'] ?></p>
                            <p class="h3 mb-6"><?php echo $mostrar['temperatura'] ?>°C</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 text-center">

                    <div class="d-flex justify-content-between">
                        <p class="h5 fw-normal">Humedad</p>
                        <p class="h5 fw-normal"></i><?php echo $mostrar['humedad'] ?>%</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="h5 fw-normal">Luminosidad</p>
                        <p class="h5 fw-normal"><i class="fas fa-sun pe-2"></i><?php echo $mostrar['luminosidad'] ?>%
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="contenedorcard">
            <div class="card" style="border-radius: 50px; height:35em;width:22em;">
                <div class="bg-image ripple" data-mdb-ripple-color="light"
                    style="border-top-left-radius: 50px; border-top-right-radius: 13px;">

                    <!--ALERTA EN COLORES (cambia imagen)-------------------------------->
                    <img src="images/databox/Azul.png" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <div class="mask" style="background-color: rgba(100,92,89);">
                        <div class="text-center text-white">
                            <p class="h3 mb-6">Fecha y Hora</p>
                            <p class="h5 mb-6">Sin Registros</p>
                            <p class="h3 mb-6">--°C</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 text-center">

                    <div class="d-flex justify-content-between">
                        <p class="h5 fw-normal">Humedad</p>
                        <p class="h5 fw-normal"></i>--%</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="h5 fw-normal">Luminosidad</p>
                        <p class="h5 fw-normal"><i class="fas fa-sun pe-2"></i>--%
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <?php
        }
        ?>



        </div>
        <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Data Box</h1>
                                    <p class="parrafoDos">Es un dispositivo que consta de un sistema electrónico capaz
                                        de relevar
                                        diferentes parámetros dentro de un espacio físico teniendo en cuenta ciertos
                                        aspectos en cuanto a seguridad e higiene.
                                        Los mismos son: luminosidad, humedad, temperatura y movimiento.
                                        El dispositivo posee una estructura / carcasa contenedora diseñada completamente
                                        en un
                                        software de modelado para luego ser impresa en una impresora 3D, la cual aloja
                                        los diferentes sensores y componentes electrónicos.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="images/databox/databox.png" alt="img" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Componentes</h1>
                                    <p class="parrafoDos">Placa Arduino UNO.
                                        2 Módulos relay.
                                        1 TEMPT6000: sensor de luminosidad(fototransistor).
                                        1 Sensor PIR: detector de movimiento (infrarrojo).
                                        1 Sensor DHT22: sensor de humedad y temperatura.
                                        1 Buzzer: alarma sonora.
                                        3 Relay.
                                        Tarjeta SD: almacenamiento de datos.
                                        Pantalla Led: visualización de datos.
                                        Módulo RTC.
                                        Batería de 3v.
                                    </p>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="images/databox/databoeplode.23.png" alt="img" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="botones">
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class='fa fa-angle-left'></i></a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class='fa fa-angle-right'></i>
                </a>
            </div>
        </div>
    </section>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Datos Históricos</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
					<?php
                        //$mes = date("m");
                        $fecha = "SELECT hora FROM valores";
                        $fecha = mysqli_query($con, $fecha);
                        $fecha = mysqli_fetch_array($fecha);
                        $fecha = $fecha[0];

                        //toma el mes del ultimo registro de la tabla
                        $ultimoMes = "SELECT MONTH(hora) FROM valores ORDER BY id DESC LIMIT 1";
                        $ultimoMes = mysqli_query($con, $ultimoMes);
                        $ultimoMes = mysqli_fetch_array($ultimoMes);
                        $ultimoMes = $ultimoMes[0];
                        //toma el mes del primer registro de la tabla
                        $primerMes = "SELECT MONTH(hora) FROM valores LIMIT 1";
                        $primerMes = mysqli_query($con, $primerMes);
                        $primerMes = mysqli_fetch_array($primerMes);
                        $primerMes = $primerMes[0];

                        ?>
						<table class="table">
						  <thead class="thead-primary">
						    <tr class="tabla2">
								<th>Mes/Año</th>
                                <th>Valor</th>
                                <th>Temperatura</th>
                                <th>Humedad</th>
                                <th>Luminosidad</th>
						    </tr>
                            <style>
                            .tabla2 {
                            line-height: 1.5;
                            font-weight: 400;
                            font-family: "Poppins", Arial, sans-serif;
                            color: #000; }
                            </style>
						  </thead>
						  <?php

                            for ($i = $primerMes; $i <= $ultimoMes; $i++) {
                                /********** TOMO AÑO PARA FILTRAR******** */
                                date_default_timezone_set("America/Argentina/Buenos_Aires");
                                $date = new DateTime();
                                $anio = $date->format('Y');

                                $sql = "SELECT MAX(temperatura) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $maxTemperatura = mysqli_fetch_array($resultado);
                                $sql = "SELECT MAX(humedad) FROM valores WHERE MONTH(hora) LIKE '%$i%' AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $maxHumedad = mysqli_fetch_array($resultado);
                                $sql = "SELECT MAX(luminosidad) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $maxLuminosidad = mysqli_fetch_array($resultado);
                                $sql = "SELECT MIN(temperatura) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $minTemperatura = mysqli_fetch_array($resultado);
                                $sql = "SELECT MIN(humedad) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $minHumedad = mysqli_fetch_array($resultado);
                                $sql = "SELECT MIN(luminosidad) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $minLuminosidad = mysqli_fetch_array($resultado); ?>
						  <tbody>
						  <tr>
                                <th scope="row"><?php echo $i . " / " . $anio ?></th>
                                    <td>MAXIMO</td>
                                    <td><?php echo $maxTemperatura[0] ?>°C</td>
                                    <td><?php echo $maxHumedad[0] ?>%</td>
                                    <td><?php echo $maxLuminosidad[0] ?>%</td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $i . " / " . $anio ?></th>
                                    <td>MINIMO</td>
                                    <td><?php echo $minTemperatura[0] ?>°C</td>
                                    <td><?php echo $minHumedad[0] ?>%</td>
                                    <td><?php echo $minLuminosidad[0] ?>%</td>
                                </tr>
                            </tbody>

                            <?php
                            }
                            ?>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</section>


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
    </script>
    <script src="js/maintabla.js"></script>
    <script src="js/popper.js"></script>
    <div id="ultimo"></div>
</body>

</html>
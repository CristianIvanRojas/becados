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
    <title>AquaLilium</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/aqualilium/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/aqualilium/styleCris.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/aqualilium/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/aqualilium/styletabla.css">
    <link rel="stylesheet" href="css/aqualilium/jquery.mCustomScrollbar.min.css">
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
                                <div class="logo"> <a href="https://polotic.000webhostapp.com/index/index.html"><img
                                            src="images/logo.png" alt="#"></a> </div>

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
    <br>

    <!-- Mediciones -->



    <section>



        <?php
        //Toma el ultimo registro de la base de datos
        $sql = "SELECT * FROM valores ORDER BY id DESC LIMIT 1";
        //$sql = "SELECT * from registro";
        $result = mysqli_query($con, $sql);
        if ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <div class="contenedorcard">
            <div class="card" style="border-radius: 50px; height:34em; width:22em">
                <div class="bg-image ripple" data-mdb-ripple-color="light"
                    style="border-top-left-radius: 50px; border-top-right-radius: 13px;">

                    <!--ALERTA EN COLORES (cambia imagen)-------------------------------->
                    <?php
                        if ($mostrar['temperatura'] > 45) {
                        ?>
                    <img src="images/aqua/aqua.jpeg" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <?php
                        } elseif ($mostrar['temperatura'] >= 30  and $mostrar['temperatura'] < 45) {
                        ?>
                    <img src="images/aqua/aqua.jpeg" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <?php
                        } else {
                        ?>
                    <img src="images/aqua/aqua.jpeg" class="w-100"
                        style="height: 16em; border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    <?php
                        }
                        ?>
                    <div class="mask" style="background-color: rgba(3,52,76);">
                        <div class="text-center text-white">
                            <p class="h3 mb-6">Fecha y Hora</p>
                            <p class="h5 mb-6"><?php echo $mostrar['hora'] ?></p>
                            <p class="h3 mb-6"><?php echo $mostrar['temperatura'] ?>°C</p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 text-center">

                    <div class="d-flex justify-content-between">
                        <p class="h5 fw-normal">Ph</p>
                        <p class="h5 fw-normal"></i><?php echo $mostrar['ph'] ?></p>
                    </div>


                </div>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="contenedorcard">
            <div class="card">
                <div class="bg-image ripple" data-mdb-ripple-color="light"
                    style="border-top-left-radius: 50px; border-top-right-radius: 13px;">

                    <!--ALERTA EN COLORES (cambia imagen)-------------------------------->
                    <img src="images/aqua/aqua.png" class="w-100"
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
                        <p class="h5 fw-normal">pH</p>
                        <p class="h5 fw-normal"></i>--</p>
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
                    <div class="containerInfo">
                        <div class="row marginii">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>AquaLilium</h1>
                                    <p class="parrafoDos">¿Cuál es la mejor manera de poder realizar un control de
                                        calidad del agua en una
                                        zona medianamente inaccesible? La respuesta es muy sencilla: a través de una
                                        boya multiparamétrica. Es por ello que diseñamos “Aqua Llilium”, un dispositivo
                                        flotante capaz de medir la temperatura y PH del líquido en el que se lo acomode.
                                        El objetivo de poder saber la temperatura del agua de río es fundamental para
                                        tener en cuenta determinados factores. La temperatura influye en diferentes
                                        aspectos como lo son el oxígeno disuelto, algo clave para las tasas de
                                        respiración y crecimiento de plantas y animales.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img class="imgCarrousel" src="images/aqua/boyarender3aa.jpg"
                                            alt="img" /></figure>
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
                                    <h1>AquaLilium</h1>
                                    <p class="parrafoDos">Asimismo, al hablar del pH nos referimos a un parámetro que
                                        indica la acidez del
                                        agua. El rango varía de 0 a 14, siendo 7 el rango promedio (rango neutral). Un
                                        pH menor a 7 indica acidez, mientras que un pH mayor a 7, indica un rango
                                        básico. el pH es en realidad una medición de la cantidad relativa de iones de
                                        hidrógeno e hidróxido en el agua. El agua que contiene más iones de hidrógeno
                                        tiene una acidez mayor, mientras que el agua que contiene más iones de hidróxido
                                        indica un rango básico. La contaminación puede cambiar el PH del agua, lo que a
                                        su vez puede dañar la vida animal y vegetal que existe en el agua.
                                    </p>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img class="imgCarrousel" src="images/aqua/boya1.jpg" alt="img" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row marginii">
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img class="imgCarrouselComponente" src="images/aqua/boya3.jpeg" alt="img" />
                                    </figure>
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
                                    <th>pH</th>

                                </tr>
                                <style>
                                .tabla2 {
                                    line-height: 1.5;
                                    font-weight: 400;
                                    font-family: "Poppins", Arial, sans-serif;
                                    color: #000;
                                }
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
                                $sql = "SELECT MAX(ph) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $maxPh = mysqli_fetch_array($resultado);

                                $sql = "SELECT MIN(temperatura) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $minTemperatura = mysqli_fetch_array($resultado);
                                $sql = "SELECT MIN(ph) FROM valores WHERE MONTH(hora) LIKE '%$i%'AND YEAR(hora) LIKE '%$anio%'";
                                $resultado = mysqli_query($con, $sql);
                                $minPh = mysqli_fetch_array($resultado); ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $i . " / " . $anio ?></th>
                                    <td>MAXIMO</td>
                                    <td><?php echo $maxTemperatura[0] ?>°C</td>
                                    <td><?php echo $maxPh[0] ?>%</td>

                                </tr>
                                <tr>
                                    <th scope="row"><?php echo $i . " / " . $anio ?></th>
                                    <td>MINIMO</td>
                                    <td><?php echo $minTemperatura[0] ?>°C</td>
                                    <td><?php echo $minPh[0] ?>%</td>

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
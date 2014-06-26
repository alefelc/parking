<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Berazategui Estacionamiento Responsable</title>
    <meta name="description" content="Your description here" />
    <meta name="keywords" content="Your keywords here" />
    <meta name="author" content="Your author name here" />
    <!-- Mobile specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-57-precomposed.png">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icons/favicon.png">
    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    <style>
    body {
        text-align:center;
    }
    .gmap3 {
        margin: 0 auto;
        width: 100%;
        height: 500px;
    }
    </style>
    <script>
        function login() {
            if (!$("#dni").val()) {
                alert("completar dni");
            }
            $.ajax({
                type: "POST",
                url: "http://www.ztechsys.com/BER/wsHandler.php",
                data: {
                    action: "login_person",
                    dni: $("#dni").val(),
                    password: $("#password").val()
                },
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        showErrorMessage();
                    } else {
                        //respose = {credit, session_code}
                        //escribir cookies
                        setSaldoSectionContent();
                    }
                }
            });
        }
        function setSaldoSectionContent() {
            $("#divSaldoOrLogin").empty();
            $("#divSaldoOrLogin").html('
                <div class="row subscribe">
                    <div class=".col-xs-6">
                    <div id="content">
                    <h2 class="title">Saldo Actual</h2>
                <h4 class="title">$ ' + response.credit + '</h4>
                <h2 class="title" style="margin-top:30px">Recarga Saldo</h2>
                </div>
                <form action="#" method="post">
                    <input type="email" name="Email" required="" class="subscribe-box" placeholder="Ingresa el PIN">
                    <input type="submit" value="Cargar" name="subscribe" class="subscribe-btn">
                    </form>
                </div>
                </div>
            ');
        }
        function showErrorMessage() {
            alert("Login incorrecto");
        }
    </script>
    <script type="text/javascript">
    $(function() {
        $('#test1').gmap3({
            map: {
                options: {
                    center: [-34.5869392, -58.4566448],
                    zoom: 14,
                    scrollwheel: false
                }
            },
            marker: {
                values: [{
                    latLng: [-34.5869392, -58.4566448],
                    data: "Buenos Aires !"
                }, {
                    address: "Av Corrientes 1669, Buenos Aires",
                    data: "El Gato Negro"
                }, {
                    address: "Av de Mayo 825, Buenos Aires",
                    data: "Cafe Tortoni",
                }],
                options: {
                    draggable: false
                },
                events: {
                    mouseover: function(marker, event, context) {
                        var map = $(this).gmap3("get"),
                            infowindow = $(this).gmap3({
                                get: {
                                    name: "infowindow"
                                }
                            });
                        if (infowindow) {
                            infowindow.open(map, marker);
                            infowindow.setContent(context.data);
                        } else {
                            $(this).gmap3({
                                infowindow: {
                                    anchor: marker,
                                    options: {
                                        content: context.data
                                    }
                                }
                            });
                        }
                    },
                    mouseout: function() {
                        var infowindow = $(this).gmap3({
                            get: {
                                name: "infowindow"
                            }
                        });
                        if (infowindow) {
                            infowindow.close();
                        }
                    }
                }
            }
        });
    });
    </script>
</head>

<body>
    <!-- Begin preloader -->
    <div id="preloader">
        <div id="status">
            <div id="circleG">
                <div id="circleG_1" class="circleG"></div>
                <div id="circleG_2" class="circleG"></div>
                <div id="circleG_3" class="circleG"></div>
            </div>
        </div>
    </div>
    <!-- End preloader -->
    <div id="wrap">
        <div id="content-area">
            <!-- Begin charge section -->
            <section class="panel-countdown">
                <div id="countdown_dashboard">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <img src="images/logo.png" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6" id="divSaldoOrLogin">
                                <div class="row subscribe">
                                    <div class=".col-xs-6">
                                        <div id="content">
                                            <h2 class="title">Saldo Actual</h2>
                                            <h4 class="title">$ 300</h4>
                                            <h2 class="title" style="margin-top:30px">Recarga Saldo</h2>
                                        </div>
                                        <form action="#" method="post">
                                            <input type="email" name="Email" required="" class="subscribe-box" placeholder="Ingresa el PIN">
                                            <input type="submit" value="Cargar" name="subscribe" class="subscribe-btn">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End charge section -->
            <!-- Begin sale's point section -->
            <section class="panel-about">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="test1" class="gmap3"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End sale's point section -->
            <!-- Begin parking section -->
            <section class="panel-services">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                        </div>
                    </div>
                </div>
            </section>
            <!-- End parking section -->
            <!-- Begin contact section -->
            <section class="panel-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                    <img src="images/logo.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="row subscribe">
                                <div class=".col-xs-6">
                                    <div id="content">
                                        <h1 class="title">Contacto</h1>
                                    </div>
                                    <form role="form" action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Mensaje" required=""></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default subscribe-btn">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact section -->
        </div>
    </div>
    <!-- Begin tabs section -->
    <div class="tab-container">
        <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab active">
            <span class="tab-detail">
                <span class="tab-heading">Saldo</span>
                <i class="fa fa-usd"></i>
            </span>
        </a>
        <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab">
            <span class="tab-detail">
                <span class="tab-heading">Puntos de Venta</span>
                <i class="fa fa-home"></i>
            </span>
        </a>
        <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab">
            <span class="tab-detail">
                <span class="tab-heading">Estacionamientos</span>
                <i class="fa fa-road"></i>
            </span>
        </a>
        <a href="javascript:void(0)" class="col-xs-6 col-sm-3 tab">
            <span class="tab-detail">
                <span class="tab-heading">Contacto</span>
                <i class="fa fa-envelope"></i>
            </span>
        </a>
    </div>
    <!-- En tabs section -->
    <!-- Scripts -->
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/jquery.lwtCountdown-1.0.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/global.js"></script>
</body>

</html>

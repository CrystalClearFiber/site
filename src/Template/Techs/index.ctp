<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo 'Crystal Clear'; ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .teamphoto{
            height: 300px;
            width: 200px;
            border-style:solid;
            /*border-color:#f05f40;*/
            border-width:1px;
        }
     
    #crossfade {
        position:relative;
        height:250px;
        width:400px;
    }
    #crossfade img {
        position:absolute;
        left:0;
        opacity: 1;
        -webkit-transition: opacity .3s ease-in-out;
        -moz-transition: opacity .3s ease-in-out;
        -o-transition: opacity .3s ease-in-out;
        -ms-transition: opacity .3s ease-in-out;    
        transition: opacity .3s ease-in-out;
    }
     
    #crossfade img.top:hover {
        opacity:0;
    }
    </style>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">Crystal Clear</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Your Technicians</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <!--<h1>A Fiber Optic Service Provider</h1>-->
                <br><br><br><br><br><br>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Meet the Technicians</h2>
                    <hr class="light">
                    <p class="text-faded">Our technicians and field office are located on-site in the Tollgate Village.  This offers better response times and allows us to provide a 30 minute arrival window, as opposed to having to wait all morning or afternoon for a technician to arrive.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" style="background-color:#cccccc;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Your Technicians</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3 style="color:#f05f40">Matt</h3>
                        <div id="crossfade">
                            <img class="bottom teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Matt/matt2-200x300.JPG" />
                            <img class="top teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Matt/matt1-200x300.JPG" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3 style="color:#f05f40">Lucas</h3>
                        <div id="crossfade">
                            <img class="bottom teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Lucas/lucas2-200x300.JPG" />
                            <img class="top teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Lucas/lucas1-200x300.JPG" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3 style="color:#f05f40">Jeremiah</h3>
                        <!--<img class="teamphoto" src="img/blank_profile.png" alt="team member photo">-->
                        <div id="crossfade">
                            <img class="bottom teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Jeremiah/jeremiah.jpg" />
                            <img class="top teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Jeremiah/jeremiah.jpg" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3 style="color:#f05f40">Jason</h3>
                        <!--<img class="teamphoto" src="img/blank_profile.png" alt="team member photo">-->
                        <div id="crossfade">
                            <img class="bottom teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Jason/jason2-200x300.JPG" />
                            <img class="top teamphoto" src="https://s3.amazonaws.com/cctimages/siteimages/Jason/jason1-200x300.JPG" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>

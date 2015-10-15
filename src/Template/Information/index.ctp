<?php

$community = ucfirst(substr($_SERVER[REQUEST_URI], 13));

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
                <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <img height="906" width="700" src="https://s3.amazonaws.com/cctimages/CCT+New+Customer+-+<?php echo $community;?>-1.png" alt="Coming Soon!" />
                    <!-- <a href="/" class="btn btn-default btn-xl">Return Home</a> -->
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <img height="906" width="700" src="https://s3.amazonaws.com/cctimages/CCT+New+Customer+-+<?php echo $community;?>-2.png" alt=" "/>
                    <!-- <a href="/" class="btn btn-default btn-xl">Return Home</a> -->
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <img height="906" width="700" src="https://s3.amazonaws.com/cctimages/CCT+New+Customer+-+<?php echo $community;?>-3.png" alt=" "/>
                    <!-- <a href="/" class="btn btn-default btn-xl">Return Home</a> -->
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <img height="906" width="700" src="https://s3.amazonaws.com/cctimages/CCT+New+Customer+-+<?php echo $community;?>-4.png" alt=" "/>
                    <!-- <a href="/" class="btn btn-default btn-xl">Return Home</a> -->
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

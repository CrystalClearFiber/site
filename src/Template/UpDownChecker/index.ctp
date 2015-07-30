<?php
$TG_ATT_Circuit = shell_exec('ping -c 1 12.126.19.218');
$TG_WIN_Circuit = shell_exec('ping -c 1 64.90.28.14');

$TG_ATT_Circuit = get_packet_info($TG_ATT_Circuit);
$TG_WIN_Circuit = get_packet_info($TG_WIN_Circuit);

function get_packet_info($string){
    $fin = "ERROR";
    $arr = explode(" ", $string);
    foreach ($arr as $value){
        if (strpos($value, "%") !== FALSE){
            $fin = str_replace('%', '', $value);
            break;
        }
    }
    return $fin;
}
?>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo 'Crystal Clear Technologies'; ?></title>

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
        .col-centered{
            margin-left: 147px;
        }
        .col-left{
            float: left;
            margin: 0 auto;
        }
        .col-right{
            float: right;
            margin: 0 auto;
        }
    </style>

</head>

<body onload="get_results()" id="page-top">

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
                <a class="navbar-brand page-scroll" href="/">Crystal Clear Technologies</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/UpDownChecker">Refresh</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="text-faded">Use this page to check the status of Crystal Clear's networks</p>
                    <a href="/UpDownChecker" class="btn btn-default btn-xl">Refresh</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Networks</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3>Tollgate Village AT&T Circuit</h3>
                        <i id="ping1" class="fa fa-4x fa-check wow bounceIn text-primary" data-wow-delay=".1s"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3>Tollgate Village Windstream Circuit</h3>
                        <i id="ping2" class="fa fa-4x fa-remove wow bounceIn text-primary" data-wow-delay=".1s"></i>
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
    <script type="text/javascript">
        function get_results(){
            var ATT = "<?php echo $TG_ATT_Circuit; ?>";;
            var WIN = "<?php echo $TG_WIN_Circuit; ?>";;

            if (ATT == 0 || ATT == '0'){
                document.getElementById("ping1").className = "fa fa-4x fa-check wow bounceIn text-primary";
                document.getElementById("ping1").style.color = "green";  
            }
            else{
                document.getElementById("ping1").className = "fa fa-4x fa-remove wow bounceIn text-primary";
                document.getElementById("ping1").style.color = "red";  
            }

            if (WIN == 0 || WIN == '0'){
                document.getElementById("ping2").className = "fa fa-4x fa-check wow bounceIn text-primary";
                document.getElementById("ping2").style.color = "green";       
            }
            else{
                document.getElementById("ping2").className = "fa fa-4x fa-remove wow bounceIn text-primary";
                document.getElementById("ping2").style.color = "red";
            }
        }
    </script>

</body>

    


</html>

<?php
        $errName = '';
        $errEmail = '';
        $errMessage = '';  
        $errHuman = '';
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'example@bootstrapbay.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            }
        }
    }
?>

<html lang="en">

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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Learn More <span class="caret"></span>
                        </a>
                        <ul role="presentation" class="dropdown-menu">
                            <li>
                                <a href="/History">History</a>
                            </li>
                            <li>
                                <a href="/FAQ">FAQ</a>
                            </li>
                            <li>
                                <a href="news">News and Events</a>
                            </li>
                            <li>
                                <a href="Techs">Meet the Technicians</a>
                            </li>
                            <li>
                                <a href="video">Video Tutorials</a>
                            </li>
                            <li>
                                <a href="/CustPortal">Customer Portal</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#updowncheck">Check Network</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          My Account <span class="caret"></span>
                        </a>
                        <ul role="presentation" class="dropdown-menu">
                            <li>
                                <a href="https://cableanytime.com/CrystalClearFiber/">Pay Bill</a>
                            </li>
                            <li>
                                <a href="https://cableanytime.com/CrystalClearFiber/">Internet</a>
                            </li>
                            <li>
                                <a href="https://voice.crystalclearfiber.com/portal/">Voice</a>
                            </li>
                            <li>
                                <a href="https://www.directv.com/DTVAPP/login/login.jsp">DIRECTV</a>
                            </li>
                        </ul>
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
                    <h2 class="section-heading">Fiber Optics</h2>
                    <hr class="light">
                    <p class="text-faded">Technology has opened a world of possibilities for today’s families.  Services that are developed for business environments are now made available for the home.  The backbone of this new connectivity is Fiber-To-The-Home, a reliable, super-capacity conduit for Voice, Data and Video.  Crystal Clear partners with leading developers to provide uncompromising quality in comprehensive, community-based Fiber-To-The-Home systems.</p>
                    <p class="text-faded">Optical Fiber consists of thin, glass threads that transfer massive amounts of data and information on a point-to-point infrastructure.  Using light as a driving force, this reliable and secure connectivity provides users less interference and higher speeds than traditional copper wiring.  As more communities are moving towards Fiber-To-The-Home, optical fiber is providing value to the future and to your home.</p>                
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" role="form" method="post" action="index.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                              
                        </div>
                    </div>
                </form> 
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
    <script src="js/review.fade.js"></script>

</body>
</html>


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
        /*.answer{
            display:none;
        }*/
        .question{
            cursor:pointer;
            cursor:hand;
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
                <a class="navbar-brand page-scroll" href="/">Crystal Clear Technologies</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">FAQs</a>
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
                    <h2 class="section-heading">Crystal Clear FAQs</h2>
                    <hr class="light">   
                    <br>
                    <h3 class="question" id="q1" onclick="hide_unhide(this)">Do I have to use Crystal Clear Services?</h4>
                    <p id="a1" class="answer" style="display:none;">No. You do not have to use Crystal Clear services and are free to use any provider at any time. However, in your community, there is a bulk agreement with the HOA that requires the property owner to pay a minimum fee even if the services are chosen not to be utilized. Currently, the base package is $75 per month for the first 12 months and $65 per month after the first 12 months. </p>
                    <br>
                    <h3 class="question" id="q2" onclick="hide_unhide(this)">What is a bulk agreement?</h4>     
                    <p id="a2" class="answer" style="display:none;">A bulk agreement is one that involves full community participation in order to get lower prices for the package than would other wise be possible. This is not exclusive and allows for the use of any other providers that are in the area as well.</p>             
                    <br> 
                    <h3 class="question" id="q3" onclick="hide_unhide(this)">Why is Crystal Clear involved with DIRECTV services?</h3>
                    <p id="a3" class="answer" style="display:none;">DIRECTV contracted with Crystal Clear to install, service, and maintain the video services in your community.</p>
                    <br>     
                    <h3 class="question" id="q4" onclick="hide_unhide(this)">Who do I contact for DIRECTV services?</h3>
                    <p id="a4" class="answer" style="display:none;">All calls related to DIRECTV should be directed to Crystal Clear @ 615-550-4600 or support@crystalclearfiber.com. The normal DIRECTV call center is not set up to handle Bulk accounts and you may be given incorrect information if you call them directly.  Crystal Clear will not be responsible for any increased cost that may be incurred if the account is not set up properly. </p>
                    <br>  
                    <h3 class="question" id="q5" onclick="hide_unhide(this)">Why do I get a bill from both DIRECTV and Crystal Clear?</h3>
                    <p id="a5" class="answer" style="display:none;">DIRECTV allows us to bill for the base package only. All DIRECTV equipment and additional services above the base package will be billed directly to the customer on the credit / debit card DIRECTV has on file for you. Crystal Clear will bill you for the base package and all Internet and Phone services to which you are subscribed.</p>
                    <br>  
                    <h3 class="question" id="q6" onclick="hide_unhide(this)">Why is Crystal Clear pricing different from what I see online at DIRECTV.com</h3>
                    <p id="a6" class="answer" style="display:none;">DIRECTV offers different promotions to bulk account customers than to General Market customers. Pricing shown on the DIRECTV website is promotional pricing only for General Market customers. After these promotions end after a few months, General Market pricing is higher than that of bulk customers. Bulk customers also pay less for the “mirroring” fee than General Market customers. Bulk customers get the first receiver at no monthly cost where as General Market customers do not.</p>
                    <br>  
                    <h3 class="question" id="q7" onclick="hide_unhide(this)">I thought Crystal Clear used Fiber Optics to provide service?</h3>
                    <p id="a7" class="answer" style="display:none;">Crystal Clear does provide all Internet and Phone services via a Point - to - Point fiber to the home network (FTTH) which provides substantial value to each home that comes online. Studies have shown fiber increases the value by approximately $5000 - $10,000 per home. DIRECTV decided to abandon the previous platform that allowed us to layer the video signal onto the fiber and thus the reason for their traditional extraterrestrial set up that is currently being installed.</p>
                    <br>  
                    <h3 class="question" id="q8" onclick="hide_unhide(this)">Does Crystal Clear manage my wireless network?</h3>
                    <p id="a8" class="answer" style="display:none;">No. Currently, Crystal Clear does not provide or manage customer wireless networks at this time.</p>
                    <br>  
                    <h3 class="question" id="q9" onclick="hide_unhide(this)">What is an ONT?</h3>
                    <p id="a9" class="answer" style="display:none;">Optical Network Terminal. This is the box inside your low voltage panel where Crystal Clear terminates the fiber and converts the services back to copper so that it can be used by your devices in the home. The ONT is where the responsibility of Crystal Clear ends and for the customer begins. You never want to push the reset button on this box as it will lose its configuration and a technician will have to come out to your home to restore services, if pressed. </p>
                    <br>  
                    <h3 class="question" id="q10" onclick="hide_unhide(this)">Why am I not getting the same speeds over my wireless router?</h3>
                    <p id="a10" class="answer" style="display:none;">Not all wireless routers support the same speeds. Crystal Clear’s internet speeds are the maximum that can be achieved when plugged directly into Crystal Clear’s ONT in your home but are not guaranteed. Crystal Clear is not responsible for any speeds or coverage over a wireless router or any other device past the ONT. Many factors affect wireless router speeds and coverage area including, but not limited to: walls and insulation in your home, location of the wireless routers, wireless channel saturation, household items such as microwaves and bluetooth devices , and the capacity of the device that is connecting to the wireless network.</p>
                    <br>  
                    <h3 class="question" id="q11" onclick="hide_unhide(this)">Do I need a router?</h3>
                    <p id="a11" class="answer" style="display:none;">Crystal Clear’s equipment does have routing (DHCP) capabilities that are turned on by default but we do not provide wireless services at this time. If you would like to have wireless services, you will need to purchase a wireless access point to access your network wirelessly. For the customers who would also prefer to handle DHCP themselves, we can provide pass through services to accommodate.</p>
                    <br>  
                    <h3 class="question" id="q12" onclick="hide_unhide(this)">Why does my internet seem to be slow?</h3>
                    <p id="a12" class="answer" style="display:none;">First make sure you are hard wired directly to the ONT  and that no other equipment is in-between your device and the ONT in the Low Voltage Panel. Also check to ensure the device you are testing can support the speeds you are subscribed to. A little bit of over head is expected on any network.  However, if you are still constantly seeing speeds significantly less than what you are subscribed while following the steps above, you may need to contact us for a service call to look at the issue.</p>
                    <br>  
                    <h3 class="question" id="q13" onclick="hide_unhide(this)">How do I reboot my router?</h3>
                    <p id="a13" class="answer" style="display:none;">On the back of your router, you will see a power adapter.  Unplug the power adapter for 10-20 seconds.  Plug the power adapter back into the router. Wait a minute for the router to reboot. Also check to see if the ethernet cable is securely plugged into the router.  To see a video tutorial click <a style="color: #23236B;" href="/Video#routerreboot">here</a>.</p>
                    <br>  
                    <h3 class="question" id="q14" onclick="hide_unhide(this)">How do I reboot my DirecTV receiver</h3>
                    <p id="a14" class="answer" style="display:none;">On the front of your DIRECTV receiver you will see a panel.  Open the door and press the red Reset button.  To see a video tutorial click <a style="color: #23236B;"href="/Video#DTVreboot">here</a>.</p>
                    <br>
                    <h3 class="question" id="q15" onclick="hide_unhide(this)">How do I reboot my ONT (Optical Network Terminal)?</h3>
                    <p id="a15" class="answer" style="display:none;">In the low voltage panel of your home, you will see the ONT (Optical Network Terminal) box.  There will be a black power adapter that connects the ONT to the power source. To reboot, you can unplug the power adapter directly from the power source, and wait 10-20 seconds.  Plug the power adapter back into the power source.  Or you can unplug the power adapter from the ONT by pressing the pin and pull straight down.  Wait 10-20 seconds and plug the power adapter back into the ONT.   The ONT will take approximately two (2) minutes to reboot.  When you see two (2) green lights, the ONT is rebooted.  You never want to push the reset button on the ONT as it will lose its configuration and a technician will have to come out to your home to restore services, if pressed. To see a video tutorial click <a style="color: #23236B;"href="/Video#ontreboot">here</a>.</p>
                    <br>
                    <br>
                    <br>   
                    <a href="/" class="btn btn-default btn-xl">Return Home</a>
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
        function hide_unhide(q){
            var num = q.id.substr(1, q.id.length);
            var p_change = 'a' + num;
            var p_disp = document.getElementById(p_change).style.display;
            if (p_disp == "none"){
                document.getElementById(p_change).style.display = "inline";
            }
            else{
                document.getElementById(p_change).style.display = "none";
            }
        }
    </script>

</body>

</html>

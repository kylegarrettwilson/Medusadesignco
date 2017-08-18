<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Medusa Design Co.</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />

    <!-- animate.css -->
    <link rel="stylesheet" href="../assets/animate/animate.css" />
    <link rel="stylesheet" href="../assets/animate/set.css" />




    <!-- gallery -->
    <link rel="stylesheet" href="../assets/gallery/blueimp-gallery.min.css">



    <link rel="stylesheet" href="../assets/style.css">


    <link rel="stylesheet" href="style.css">

</head>







<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->

                    <!-- logo must be 228 X 54 px -->
                    <a class="navbar-brand" href="../index.html"><img src="../images/mini_logo.png" alt="logo"></a>
                    <!-- #Logo Ends -->


                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active" style="cursor: pointer"><a id="navhome">Home</a></li>
                        <li ><a href="#checkout">Design Overview</a></li>
                        <li ><a id="navcontact" style="cursor: pointer">Contact</a></li>
                    </ul>



                    <script>
                        document.getElementById("navhome").onclick = function () {
                            location.href = "../index.html";
                        };

                        document.getElementById("navcontact").onclick = function () {
                            location.href = "../index.html#contact";
                        };

                    </script>

                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->










<div id="home">
    <!-- Slider Starts -->
    <div class="banner">


        <video autoplay loop muted poster="" id="background">
            <source src="../images/medusa.mp4" type="video/mp4">
        </video>


        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">
                    <i class="fa fa-5x animated bounceInDown"></i>
                    <img class="animated bounceInUp img-responsive center-block" style="padding-top: 50px;" src="../images/large_logo.png">
                    <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>














    <!--   CHANGE THESE TWO -->






    <div id="menu">
        <img class="center-block img-responsive" src="../previews/images/home_six.jpg" alt="Check out the live preview!">

        <br><h1><a class="btn btn-lg btn-info center-block" href="../live/home_care/template_six/index.html">Live Example</a></h1>

    </div>









    <!-- This is Shopify Button -->

    <div id="checkout">

        <script type="text/javascript" id='pw_580e85b565331' src="https://app.paywhirl.com/pw.js"></script>
        <script>paywhirl('widget',{domain:'bootstrap-roadmap' ,uuid:'ec676394-0dba-48fb-b398-b540f0974fee'},'pw_580e85b565331'); </script>
    </div>







    <!--    CHANGE THESE TWO    -->


















<div id="designs" class="">
    <!--Contact Starts-->
    <div class="">





        <div>
            <?php include('filler.php');?>
        </div>







    </div>


</div>

















<!-- jquery -->
<script src="../assets/jquery.js"></script>

<!-- wow script -->
<script src="../assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="../assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="../assets/mobile/touchSwipe.min.js"></script>
<script src="../assets/respond/respond.js"></script>

<!-- gallery -->
<script src="../assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="../assets/script.js"></script>

</body>


</html>
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
                        <li class="active"><a href="../index.html">Home</a></li>
                        <li ><a href="../index.html#contact">Contact</a></li>
                    </ul>
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


        <!-- image must be 1900 by 900 px -->
        <img src="images/logo_header.jpg" alt="banner" class="img-responsive">


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





<!-- Circle Starts -->
<div id="menu"  class="container spacer about">
    <h1 class="text-center">Logo Design</h1><br><br>

</div>










<section id="main">




    <div id="checkout">

        <div id='product-component-e0b60cd2f33'></div>
        <script type="text/javascript">
            /*<![CDATA[*/

            (function () {
                var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                if (window.ShopifyBuy) {
                    if (window.ShopifyBuy.UI) {
                        ShopifyBuyInit();
                    } else {
                        loadScript();
                    }
                } else {
                    loadScript();
                }

                function loadScript() {
                    var script = document.createElement('script');
                    script.async = true;
                    script.src = scriptURL;
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                    script.onload = ShopifyBuyInit;
                }

                function ShopifyBuyInit() {
                    var client = ShopifyBuy.buildClient({
                        domain: 'bootstrap-roadmap.myshopify.com',
                        apiKey: '206f10a1959906673748af2d2a5c3841',
                        appId: '6',
                    });

                    ShopifyBuy.UI.onReady(client).then(function (ui) {
                        ui.createComponent('product', {
                            id: [9325569603],
                            node: document.getElementById('product-component-e0b60cd2f33'),
                            moneyFormat: '%24%7B%7Bamount%7D%7D',
                            options: {
                                "product": {
                                    "buttonDestination": "checkout",
                                    "variantId": "all",
                                    "contents": {
                                        "variantTitle": false,
                                        "description": false,
                                        "buttonWithQuantity": false,
                                        "quantity": false
                                    },
                                    "text": {
                                        "button": "BUY NOW"
                                    },
                                    "styles": {
                                        "product": {
                                            "@media (min-width: 601px)": {
                                                "max-width": "100%",
                                                "margin-left": "0",
                                                "margin-bottom": "50px"
                                            }
                                        },
                                        "button": {
                                            "font-size": "15px"
                                        },
                                        "title": {
                                            "color": "#ffffff"
                                        },
                                        "price": {
                                            "color": "#ffffff"
                                        },
                                        "compareAt": {
                                            "font-size": "12px",
                                            "color": "#ffffff"
                                        }
                                    }
                                },
                                "cart": {
                                    "contents": {
                                        "button": true
                                    },
                                    "text": {
                                        "total": "Total"
                                    },
                                    "styles": {
                                        "footer": {
                                            "background-color": "#ffffff"
                                        }
                                    }
                                },
                                "modalProduct": {
                                    "contents": {
                                        "variantTitle": false,
                                        "buttonWithQuantity": false,
                                        "quantity": false
                                    },
                                    "styles": {
                                        "product": {
                                            "@media (min-width: 601px)": {
                                                "max-width": "100%",
                                                "margin-left": "20px",
                                                "margin-bottom": "50px"
                                            }
                                        },
                                        "button": {
                                            "font-size": "15px"
                                        },
                                        "price": {
                                            "font-size": "14px"
                                        }
                                    }
                                },
                                "productSet": {
                                    "styles": {
                                        "products": {
                                            "@media (min-width: 601px)": {
                                                "margin-left": "-20px"
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    });
                }
            })();
            /*]]>*/
        </script>

    </div>




    <article>

        <h3>Need a logo? No problem!</h3>

        <p>
            BRM can help your business leave a lasting impression on customers through our logo design service.
            Let us help you by creating a simplistic, clean logo that shares your business’ brand at first glance.
            We use Adobe Illustrator to create unique, high quality, and versatile logos that can be used for all
            your business’ needs. All files for your logo will be emailed to you for use in other media. <strong> We strongly recommend
                before buying this package that you call us at (541) 788-7601 or email us <a
                    href="mailto:medusadesignco@gmail.com">HERE</a> and let us know what design you have
                in mind.</strong>
        </p>




    </article>











</section>







<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Tell Us Your Idea!</h2>
        <div class="row wowload fadeInLeftBig">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">


                <form method="post" name="contact_form" action="../php/mail_handler.php">


                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <input type="text" name="last_name"  class="form-control" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <input type="text" name="email"  class="form-control" placeholder="Email">
                    </div>


                    <div class="form-group">
                        <textarea rows="5" name="message"  class="form-control" placeholder="Message"></textarea>
                    </div>



                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">



                </form>


            </div>
        </div>



    </div>

</div>











































<!-- Footer Starts -->
<div class="footer">
    <div class="overlay spacer text-center">
        <div class="container">
            <h2>We are <b>Medusa Design Co.</b></h2>
            <p>Artistically Professional Websites For Small Independent Businesses</p><br>

            <p>114 W Magnolia St. Suite #505<br>Bellingham, WA 98225</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-phone fa-1x" style="padding-bottom:15px;"></i><a href="tel:541-788-7601">(541) 788 7601</a></li>
                <li><i class="fa fa-envelope-o fa-1x" style="padding-bottom:15px;"></i><a href="mailto:medusadesignco@gmail.com">Email Us</a>
                <li><i class="fa fa-gavel fa-1x" style="padding-bottom:15px;"></i><a href="../legal.php">Legal</a>
                </li>
            </ul>
            <br>


            <div class="wowload fadeInUp social"><a href="https://www.facebook.com/bootstraproadmap/"><i class="fa fa-facebook fa-2x"></i></a> <a href="https://www.instagram.com/bootstrap_roadmap/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://twitter.com/BootstrapRdMap?lang=en"><i class="fa fa-twitter fa-2x"></i></a> </div><br>

            <div class="text-center copyright">Medusa Design Co. Copyright 2016</div>

        </div>
    </div>
</div>








</body>
</html>
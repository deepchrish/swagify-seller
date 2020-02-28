<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8"><!-- html5 version of http-equiv="Content-Type"... -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Swagify - Seller Dashboard</title>
    <!-- Meta tags -->
    <meta name="description" content="{{description}}">
    <meta name="keywords" content="{{keywords}}">
    <meta name="robots" content="index, follow" />
    <!-- <link rel="canonical" href="{{pageUrl}}" /> -->

    <meta property="og:type" content="Product" />
    <meta property="og:title" content="{{pageTitle}}">
    <meta property="og:description" content="{{description}}">
    <meta property="og:url" content="{{pageUrl}}">
    <meta property="og:site_name" content="Brandnex">
    <meta property="og:see_also" content="{{homepageUrl}}">
    <meta property="og:image" content="{{imageUrl}}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{pageTitle}}">
    <meta name="twitter:url" content="{{pageUrl}}">
    <meta name="twitter:description" content="{{description}}">
    <meta name="twitter:image" content="{{imageUrl}}">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#8244e2">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#8244e2">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#8244e2">
    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800|Playfair+Display:400,700,900&display=swap"
        rel="dns-prefetch stylesheet">
    <link rel="dns-prefetch stylesheet" type="text/css"
        href="//cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.8.95/css/materialdesignicons.min.css">
    <!-- <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.12.0/css/all.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <section>
        <div class="container">
            <div class="row sw-formarea">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="pt-5 py-sm-4 sw-logo">
                        <a href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <img src="images/logo/swagify-logo.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                            <div class="my-4 py-md-3">
                                <h1>Hey! Ready to sell your cool ideas again?</h1>
                            </div>
                            <div class="sw-form">
                                <form>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="emailaddress">Email Address
                                            <span class="text-danger"> * </span>
                                        </label>
                                        <input type="email" class="form-control" id="emailaddress"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="passwd">Password (Min 8 characters)
                                            <span class="text-danger"> * </span> </label>
                                        <input type="password" class="form-control" id="passwd" placeholder="********">
                                        <div class="showpwd"><span onclick="myFunction()" id="showbtn"> Show </span>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkme"
                                                 name="chk[]">
                                            <label class="custom-control-label" for="checkme">Remember me</label>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="index.php" class="btn btn-primary btn-block w-100 py-3">Sign me in</a>
                                    </div>
                                    <div class="text-center my-3"><a href="#">Umm.. I forgot my password</a></div>
                                    <div class="mt-5 text-center sw-acct-txt"> New to Swagify?
                                        <a href="signup.php"> Get Started </a> </div>
                                    <hr>
                                    <div class="mb-5 text-center px-4 text-muted">If you want to partner up or sell your
                                        designs as an artist with Swagify,
                                        <a href="#"> Click here </a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 d-none">
                    <div class="sw-signup-bg">
                        <img src="./images/min-signin-bg.png" class="img-responsive" alt="Signin">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Show/Hide Password -->
    <script>
        function myFunction() {
            var x = document.getElementById("passwd");
            if (x.type === "password") {
                x.type = "text";
                showbtn.textContent = 'Hide';
            } else {
                x.type = "password";
                showbtn.textContent = 'Show';
            }
        }
    </script>
    <!-- Show/Hide Password -->
</body>

</html>
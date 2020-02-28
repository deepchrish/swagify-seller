<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
?>
    <section class="sw-signup">
        <div class="container">
            <div class="row sw-formarea">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="pt-5 py-sm-4 sw-logo">
                        <a href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <img src="images/logo/swagify-logo.png" alt="homepage" title="Swagify"
                                    class="light-logo visible-sm visible-md visible-lg" />
                                <img src="images/logo/m-logo-3x.png" alt="homepage" title="Swagify"
                                    class="light-logo hidden-sm hidden-md hidden-lg mt-4" />
                            </b>
                            <!--End Logo icon -->
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                            <div class="my-4 py-md-3 px-4 px-sm-0">
                                <h1>Let’s hook you up with a free 14-day Swagify trial.</h1>
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
                                        <input type="password" class="form-control" id="passwd"
                                            placeholder="********" maxlength="8">
                                            <div class="showpwd"><span onclick="myFunction()" id="showbtn"> Show </span></div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputCompanyName">Company Name
                                            <span class="text-danger"> * </span>
                                        </label>
                                        <input type="text" class="form-control mb-3 mb-sm-2" id="inputCompanyName"
                                            placeholder="E.g. - Garment Barn">
                                        <small class="visible-sm visible-md visible-lg text-muted">We will use your company name to create your first <a
                                                href="#">Storehub</a></small>
                                    </div>
                                    <div class="pt-5 py-md-2">
                                        <a class="btn btn-primary btn-block w-100 sw-xs-btn py-3"
                                            href="signup-step-1.php">Start
                                            Selling</a></div>
                                    <small class="text-center mt-3 visible-sm visible-md visible-lg text-muted">By signing up, your’re agreeing to
                                        Swagify’s <a href="#">Terms of use</a></small>
                                    <div class="my-4 text-center sw-acct-txt"> I already have an account, <a
                                            href="signin.php">Sign me in</a> </div>
                                            <hr class="visible-md visible-lg">
                                    <div class="mb-5 text-center visible-sm visible-md visible-lg text-muted px-4">If you want to partner up or sell your
                                        designs as an artist with Swagify, <a href="#">Click here</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 d-none">
                    <div class="sw-signup-bg">
                        <img src="./images/min-signup-bg.png" class="img-responsive" alt="Signup">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Show/Hide Password  -->
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
<?php
include 'footer.php';
?>

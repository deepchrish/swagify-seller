<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
?>
<section class="mt-5">
    <div class="container-fluid">
        <div class="pr-4 sw-backtopage"><a href="#" id="close-window"><img src="images/icons/ico-chevron.svg"> Add a new store</a>
        </div>
        <div>
            <h2>Etsy</h2>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="sw-bg">
                    <div class="row px-4 py-4">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="d-flex d-block">
                                <img src="./images/logo/etsy-logo.png" class="img-responsive etsy-logo mr-md-3"
                                    alt="etsy logo">
                                <div class="pt-4 pt-sm-0">
                                    <p>
                                        Etsy is the global marketplace for unique and creative goods. It’s home to a
                                        universe of special, extraordinary items, from unique handcrafted pieces to
                                        vintage
                                        treasures. A creative space with over 30 million active buyers worldwide.
                                    </p>
                                    <div> <a class="btn btn-primary mt-3" href="#">Connect Store </a></div>
                                </div>
                            </div>
                            <div></div>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center">
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bs-example-modal-lg">Large modal</button> -->

                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            ...
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-video mt-5 mt-lg-0">
                                    <img src="./images/bg.png" class="m-auto img-responsive">
                                    <span>
                                        <img src="./images/icons/ico-play.svg" class="" height="50" width="50"
                                            data-toggle="modal" data-target=".bs-example-modal-lg">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white box-shadow b-radius-3 px-4 py-4 w-100 mb-5">
                    <div class="row px-4 sw-connect-steps">
                        <div class="col-md-12">
                            <h4>Follow these steps to connect your Etsy store to your Swagify account.</h4>
                            <div class="mt-4">
                                <h5>Step 1: Authorize Swagify on Etsy</h5>
                            </div>
                            <div>1. Click the <i>‘Connect Store’</i> button above.</div>
                            <div>2. Sign in with your Etsy account and <span>‘Allow Access’</span> to use Swagify.</div>
                            <div class="my-3">
                                <img src="./images/connect-store-steps.png" class="img-responsive"
                                    alt="connect store steps">
                            </div>
                            <div class="px-3 py-3 sw-stp-bg">
                                <div><b>Step 2: Go to your storehub and publish your product</b></div>
                                <div>To begin receiving orders you need to design the product in your storehub and
                                    publish them to your Etsy store.</div>
                                <div><b>That’s all you gotta do!</b></div>
                                <div>Congrats! Your new Etsy orders will be automatically imported into Swagify.</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-5">If you still need more help, <a href="#">Contact us</a> and one of our
                        team representatives will be happy to help you. </div>
                </div>
            </div>
        </div>
    </div>


</section>



<?php
include 'footer.php';
?>
<script type="text/javascript">
  document.getElementById("close-window").addEventListener("click", function(){ 
       window.close();
   });
</script>
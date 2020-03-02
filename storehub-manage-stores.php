<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
?>

<div class="text-right">
    <a href="#" id="close-window"> <img src="./images/icons/ico-plus.svg" class="sw-close"></a>
</div>
<section class="my-5">
    <!-- <div class="container-fluid">
        <div class="pr-4 sw-backtopage"><a href="index.php"><img src="images/icons/ico-chevron.svg"> Back</a></div>
    </div> -->
    <div class="text-center m-auto">
        <div>
            <a href="index.php">
                <img src="images/logo/swagify-icon-dashboard.svg" alt="homepage" class="light-logo" height="50">
            </a>
        </div>
        <h3 class="my-4">Add a new store</h3>
    </div>

    <div class="container">
        <div class="row bg-white">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-2">
                <div class="row py-3">
                    <div class="col-md-offset-3 col-md-6 text-center">
                        <h4 class="px-2">Let’s Connect your Store Platform to Jenny & Jill Clothing</h4>
                    </div>
                </div>
                <div class="row border-top py-4 px-0 mx-1 px-sm-4">
                    <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                        <div class="cards">
                            <div class="sw-store-icons"><img class="img-responsive" src="images/logo/shopify.png"
                                    alt="Shopify"></div>
                            <div>
                                <h5>Shopify</h5>
                            </div>
                            <div>
                                <p>Ecommerce platform with everything you need to sell online.</p>
                            </div>
                            <div><a href="#" class="btn btn-default">Connect</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                        <div class="cards">
                            <div class="sw-store-icons"><img class="img-responsive" src="images/logo/etsy.png"
                                    width="35" height="35" alt="etsy"></div>
                            <div>
                                <h5>Etsy</h5>
                            </div>
                            <div>
                                <p>A creative marketplace with over 30 million active buyers worldwide.</p>
                            </div>
                            <div><a href="storehub-add-etsy.php" class="btn btn-default" target="_blank">Connect</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                        <div class="cards">
                            <div class="sw-store-icons"><img class="img-responsive" src="images/logo/wix.png" width="35"
                                    height="35" alt="Wix"></div>
                            <div>
                                <h5>Wix</h5>
                            </div>
                            <div>
                                <p>A platform with an intuitive drag and drop builder and 500+ customizable templates.
                                </p>
                            </div>
                            <div><a href="#" class="btn btn-default">Connect</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                        <div class="cards">
                            <div class="sw-store-icons"><img class="img-responsive" src="images/logo/woo.png" width="35"
                                    height="35" alt="Woo Commerce"></div>
                            <div>
                                <h5>Woo Commerce</h5>
                            </div>
                            <div>
                                <p>The simplest way to monetize blogs and websites built on WordPress.</p>
                            </div>
                            <div><a href="#" class="btn btn-default">Connect</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                        <div class="cards">
                            <div class="sw-store-icons"><img class="img-responsive" src="images/logo/ebay.png"
                                    width="35" height="35" alt="Ebay"></div>
                            <div>
                                <h5>Ebay</h5>
                            </div>
                            <div>
                                <p>A well-known marketplace ideal as an additional selling channel</p>
                            </div>
                            <div><a href="#" class="btn btn-default">Connect</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                        <div class="cards">
                            <div class="sw-store-icons"><img class="img-responsive" src="images/logo/prestashop.png"
                                    width="35" height="35" alt="Prestashop"></div>
                            <div>
                                <h5>Prestashop</h5>
                            </div>
                            <div>
                                <p>An extremely customizable storefront with a thriving community.</p>
                            </div>
                            <div><a href="#" class="btn btn-default">Connect</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.getElementById("close-window").addEventListener("click", function () {
        window.close();
    });
</script>

<?php
include 'footer.php';
?>
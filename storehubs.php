<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
?>

<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row sw-dash-landing mt-3">
      <div class="col-md-12">
      <div class="sw-backtopage"><a href="index.php" class="sw-text-muted"><img src="images/icons/ico-chevron.svg" class="pr-2 sw-img-muted">Storehubs</a></div>
        <!-- <div>
          <a href="#" class="sw-text-muted"> <i class="mdi mdi-chevron-left"></i> </a>
        </div> -->
        <h2 class="mt-2 mb-4">Jenny & Jill Clothing</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bg-white box-shadow b-radius-3 mb-4 w-100">
          <div>
            <form>
              <div class="row sw-search-input px-4 py-4">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="form-inline">
                    <div class="form-group search-icon">
                      <label class=" sr-only" for="search"></label>
                      <input type="Search" class="form-control" id="search" placeholder="Search Products">
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 mt-2 mt-sm-4 mt-md-0">
                  <div class="text-center text-md-right">
                    <ul class="total-product mt-1">
                      <li><img class="img-fluid" src="./images/2-woocommerce.png" title="Woo Commerce logo"
                          alt="Woo Commerce logo"> </li>
                      <li><img class="img-fluid" src="./images/2-magento.png" title="Magento logo" alt="Magento logo">
                      </li>
                      <li><img class="img-fluid" src="./images/2-etsy.png" title="ETSY" alt="ETSY"> </li>
                      <!--<li>+40 </li>-->
                    </ul>
                    <a class="viewall" href="#" data-toggle="tooltip" data-html="true" data-placement="top"
                      title="Amazon <br> Shopify">+2 more</a>

                    <div class="btn-group mr-0 mr-sm-2">
                      <button type="button" class="btn btn-default dropdown-toggle sw-custm-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./images/icons/ico-settings.svg" class="img-responsive mr-2" alt="settings icon">
                        Settings <span class="caret ml-2"></span>
                      </button>
                      <ul class="dropdown-menu">
                      <li><a href="#">Storehub settings</a></li>
                      <li><a href="#">Store settings</a></li>
                      </ul>
                    </div>
                    <a class="btn btn-primary sw-plus-ico pl-4 pr-5 py-2 w-auto" href="storehub-manage-stores.php" target="_blank">
                      <img src="./images/icons/ico-plus.svg" class="img-responsive mr-3" alt="plus icon">
                      Store
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <hr class="mt-0">

          <div class="row sw-welcome-store mb-5">
            <div class="col-md-8">
              <div>
                <div class="text-center">
                  <h3>Say hi to your new storehub, Jenny!</h3>
                  <p class="sw-txt-margin sw-text-muted">Your storehub can do pretty cool stuff. Find all the good that
                    it does down below and start selling your ideas!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row px-4 my-4 text-center text-md-left">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="sw-store-box b-radius-3 px-4 py-4">
                <div>
                  <img src="./images/add-product.svg" class="img-responsive m-auto m-md-0" alt="add product">
                </div>
                <div>
                  <h4>Adding new products</h4>
                  <p class="sw-text-muted">Your Storehub can store all the amazing products you design. Once you finish
                    your design, We let you save your products in Storehubs, So you can publish the products to other
                    platforms.</p>
                </div>
                <div>
                  <a class="btn btn-default mt-3 mb-2" href="#">Try it out now</a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 mt-4 mt-md-0">
              <div class="sw-store-box b-radius-3 px-4 py-4">
                <div>
                  <img src="./images/connect-store.svg" class="img-responsive m-auto m-md-0" alt="connect store">
                </div>
                <div>
                  <h4>Connect Stores</h4>
                  <p class="sw-text-muted">Your Storehub can connect to multiple stores so you can publish the products
                    you design quick and easy in all the stores at once.</p>
                </div>
                <div>
                  <a class="btn btn-default mt-3 mb-2" href="#">Try it out now</a>
                  <a class="btn btn-default mt-3 mb-2" href="#">Connect more</a>
                </div>
              </div>
              <br><small><b>Note for Developers :</b> When one or more store is connected then please hide the <b class="btn btn-default disabled">Try it out now</b> button and Display <b class="btn btn-default disabled">Connect more</b> button.</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include 'footer.php';
?>
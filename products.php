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
        <!-- <div>
          <a href="#" class="sw-text-muted"> <i class="mdi mdi-chevron-left"></i> </a>
        </div> -->
        <h2 class="mt-2 mb-4">Products</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bg-white box-shadow b-radius-3 mb-4 w-100">
          <div>
            <form>
              <div class="row sw-search-input px-4 py-4">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                  <div class="form-inline">
                    <div class="form-group search-icon mr-2">
                      <label class=" sr-only" for="search"></label>
                      <input type="Search" class="form-control" id="search" placeholder="Search Products">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputPassword3">Password</label>
                      <select class="form-control" id="exampleInputPassword3">
                        <option>All Stores</option>
                        <option>Shopify</option>
                        <option>Etsy</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 mt-2 mt-sm-4 mt-md-0">
                  <div class="text-center text-md-right">
                    <div class="sw-order-soon">
                    <a href="#" class="btn btn-default">Order Samples</a>
                    <span>soon</span>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <hr class="mt-0">

          <div class="row sw-welcome-store pb-5">
            <div class="col-md-8">
              <div>
                <div class="text-center">
                  <h3>Here you will see all products you have designed.</h3>
                  <p class="sw-txt-margin sw-text-muted">When ready, start designing products. You can publish them
                    directly to your stores, or save them for later in Storehubs.</p>
                </div>
                <div>
                  <img src="./images/noproducts.svg" class="img-responsive m-auto" alt="no products">
                </div>
                <div class="text-center"><a href="#" class="btn btn-primary">Start Designing</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sw-float-btn pull-right">
      <a class="btn btn-primary"> <img class="mr-1" src="./images/icons/ico-checkbox.svg">
        Learn </a>
    </div>
  </div>
</div>


<?php
include 'footer.php';
?>
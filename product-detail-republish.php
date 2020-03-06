<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
?>

<div class="page-wrapper">
  <div class="sw-custm-alert">
    <div class="alert alert-success mb-3" role="alert">
      <img src="./images/icons/ico-checkbox.svg" alt="checkbox" class="mr-2">
      Your changes have been updated on the stores, you have published this product on aswell.</div>
  </div>
  <div class="container-fluid pt-0">
    <div class="row sw-dash-landing">
      <div class="col-md-9">
        <div><h2 class="mt-2 mb-4">Unisex Ringer Tee</h2></div>
      </div>
      <div class="col-md-3">
      <div class="pull-right"><a class="btn btn-default" href="#">
      Delete</a></div>
      </div>
    </div>
    <div class="row sw-stores">
      <div class="col-md-9">
        <div class="bg-white box-shadow b-radius-3 px-4 py-4 w-100">
          <div class="mb-3">Product Name</div>
          <div class="box-shadow px-3 py-3 sw-prod-name mb-3">Unisex Ringer Tee</div>
          <div>Product description</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white box-shadow b-radius-3 px-4 pt-4 pb-5 w-100">
          <div>
            <div class="row border-bottom">
              <div class="col-md-12"><h4 class="mt-0">Stores</h4></div>
            </div>
            <div class="row py-3 border-bottom sw-store-list">
              <div class="col-md-6">
                <div class="pull-left">
                  <img src="./images/logo/shopify.png" alt="logo" height="40">
                  <span class="ml-3">Shopify</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pull-right">
                  <a class="btn btn-default mr-2 w-auto" href="#">Publish</a>
                </div>
              </div>
            </div>
            <div class="row py-3 border-bottom sw-store-list">
              <div class="col-md-6">
                <div class="pull-left">
                  <img src="./images/logo/etsy.png" alt="logo" height="40">
                  <span class="ml-3">Etsy</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pull-right">
                  <a class="btn btn-default mr-2 w-auto" href="#">
                    <img src="./images/icons/ico-checkbox.svg">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-9">
        <div class="bg-white box-shadow b-radius-3 w-100">
          <div class="sw-product-form">
            <!-- Table START-->
            <div class="table-responsive">
              <table class="table table-hover sw-product-table mb-0">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-uppercase">Variants
                    </th>
                    <th class="text-uppercase">Print File
                    </th>
                    <th class="text-uppercase">Price Range</th>
                    <th class="text-uppercase">Retail price <span class="text-danger">*</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div><span class="dark-circle">1</span></div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <a href="#"><img src="./images/women-white-t-shirt.png" alt="white"></a>
                        <div class="ml-4 mb-4"> <a href="#" class="sw-text-dark">
                            <h5>
                              Unisex Ringer Tee
                            </h5>
                          </a>
                          <span class="sw-text-muted">Generic brand PC54R
                          </span><br>
                          T-Shirt by Canadian Apparel <br>
                          <span class="sw-text-muted"> Color: </span> <small class="small-color-circle"
                            style="background: #100c0c;"></small>Dark
                          Grey <br>
                          <span class="sw-text-muted">Size:</span>
                          Meduim
                        </div>
                      </div>
                    </td>
                    <td class="w-20">
                      <!-- <ul class="list-unstyled sw-pro-list">
                                                            <li>
                                                                <div class="sw-pro-art-img">
                                                                    <img class="img-responsive"
                                                                        src="./images/front-print-mock.png"
                                                                        alt="print mock">
                                                                    <span>Front</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sw-pro-art-img">
                                                                    <img class="img-responsive"
                                                                        src="./images/print-mockup.png"
                                                                        alt="print mock">
                                                                    <span>Mockup</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sw-pro-art-img">
                                                                    <img class="img-responsive"
                                                                        src="./images/front-print-mock.png"
                                                                        alt="print mock">
                                                                    <span>Front</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sw-pro-art-img">
                                                                    <img class="img-responsive"
                                                                        src="./images/print-mockup.png"
                                                                        alt="print mock">
                                                                    <span>Mockup</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sw-pro-art-img">
                                                                    <img class="img-responsive"
                                                                        src="./images/front-print-mock.png"
                                                                        alt="print mock">
                                                                    <span>Front</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sw-pro-art-img">
                                                                    <img class="img-responsive"
                                                                        src="./images/print-mockup.png"
                                                                        alt="print mock">
                                                                    <span>Mockup</span>
                                                                </div>
                                                            </li>
                                                        </ul> -->
                      <div class="sw-pro-list">
                        <figure class="sw-pro-art-img">
                          <img class="img-responsive" src="./images/front-print-mock.png" alt="print mock">
                          <span>Front</span>
                        </figure>
                        <figure class="sw-pro-art-img">
                          <img class="img-responsive" src="./images/print-mockup.png" alt="print mock">
                          <span>Mockup</span>
                        </figure>
                        <!-- <figure class="sw-pro-art-img">
                          <img class="img-responsive" src="./images/front-print-mock.png" alt="print mock">
                          <span>Front</span>
                        </figure>
                        <figure class="sw-pro-art-img">
                          <img class="img-responsive" src="./images/print-mockup.png" alt="print mock">
                          <span>Mockup</span>
                        </figure> -->
                      </div>
                    </td>
                    <td>$6.95 to $13.80</td>
                    <td>
                      <form class="form-inline">
                        <div class="form-group mr-2">
                          <label class="sr-only" for="amount"></label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <img src="./images/icons/ico-dollar.svg">
                            </div>
                            <input type="text" class="form-control" id="amount" placeholder="16.80">
                          </div>
                        </div>
                      </form>
                      <img src="./images/icons/ico-help.svg" alt="help ico" data-toggle="tooltip" data-placement="top"
                        title="Help">
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- Table END -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Container-fluid -->
</div>
<!-- END Page Wrapper -->



<?php
include 'footer.php';
?>
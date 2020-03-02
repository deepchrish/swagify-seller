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
      <div class="sw-backtopage pr-5"><a href="index.php" class="sw-text-muted"><img src="images/icons/ico-chevron.svg" class="pr-2 sw-img-muted">Storehubs</a></div>
        <h2 class="mt-2 mb-4">Jenny & Jill Clothing</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bg-white box-shadow b-radius-3 pb-4 w-100">
          <form>
            <div class="row sw-search-input px-4 py-4">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-inline">
                  <div class="form-group search-icon mr-2">
                    <label class="sr-only" for="search"></label>
                    <input type="Search" class="form-control" id="search" placeholder="Search Products">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="allstores"></label>
                    <select class="form-control" id="allstores">
                      <option>All Stores</option>
                      <option>Shopify</option>
                      <option>Etsy</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-6  mt-sm-4 mt-md-0">
                <div class="text-center text-md-right">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-default dropdown-toggle sw-custm-dropdown"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="./images/icons/ico-settings.svg" class="img-responsive mr-2" alt="settings icon">
                      Settings
                      <span class="caret ml-2"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Storehub settings</a></li>
                      <li><a href="#">Store settings</a></li>
                    </ul>
                  </div>
                  <a class="btn btn-primary sw-plus-ico pl-4 pr-5 py-2 w-auto" href="#">
                    <img src="./images/icons/ico-plus.svg" class="img-responsive mr-3" alt="plus icon">
                    Store
                  </a>
                </div>
              </div>
            </div>
          </form>
          <hr class="mt-0 mb-0">

          <div class="row px-4 py-4">
            <div class="col-xs-12 col-sm-6 col-md-8 text-center text-md-left">
              <div class="pt-3">
                <span>Showing 3 of 25 Products</span>
                <!-- <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="show_products" name="chk[]">
                  <label class="custom-control-label" for="show_products"> </label>
                </div> -->
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mt-3 mt-sm-4 mt-md-0">
              <div class="text-center text-md-right">
                <label class="control-label d-inline" for="showproducts">
                </label>
                <select class="form-control w-100 w-md-auto ml-auto" id="showproducts" name="show products">
                  <option value="Show 50 Products">Show 50 Products</option>
                  <option value="">..</option>
                </select>
              </div>
            </div>
          </div>

          <hr class="mt-0 mb-0">


          <!-- Table START -->
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-hover sw-table mb-0">
                  <thead>
                    <tr>
                      <th>
                        <!-- <input class="ml-2" id="GridCheck" type="checkbox"><label class="mb-0 ml-1" for="GridCheck">All
                    </label> -->
                        <div class="custom-control custom-checkbox ">
                          <input type="checkbox" class="custom-control-input" id="checkboxAll" onchange="checkAll(this)"
                            name="chk[]">
                          <label class="custom-control-label" for="checkboxAll"></label>
                        </div>
                      </th>
                      <th class="text-uppercase">Product <i class="mdi mdi-menu-up"></i> </th>
                      <th class="text-uppercase">Retail Price <i class="mdi mdi-menu-down"></i></th>
                      <th class="text-uppercase">Status</th>
                      <th class="text-uppercase">Product Publish</th>
                      <th class="text-uppercase">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox1" name="chk[]">
                          <label class="custom-control-label" for="checkbox1"></label>
                        </div>
                      </td>

                      <td>
                        <div class="d-flex align-items-center">
                          <img class="" src="./images/black-t-shirt.jpg" alt="black" height="60" width="60">
                          <div class="ml-4"><span><b>Canadian Apparel <br>Comfort Soft T-Shirt</b></span><br>
                            <small class="text-muted">SKU: SW-T-11 </small><br>
                            T-Shirt by Canadian Apparel <br>
                            <small> <span class="small-color-circle" style="background: #100c0c;"></span>Dark Grey 3
                              Sizes</small>
                          </div>
                        </div>

                      </td>
                      <td>$36.50</td>
                      <td>
                        <div class="sw-status"> <span class="small-color-circle"
                            style="background: #50b83c;"></span>Published</div> <br>
                        <div class="mt-2"><span class="mt-4">On Shopify, ETSY,
                            Prestashop <a href="#" data-toggle="tooltip" data-html="true" data-placement="top"
                      title="Amazon <br> Shopify">+ 2 more</a></span></div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a class="btn btn-default mr-2 w-auto" href="#">Publish</a><span class="small-color-circle"
                            style="background: #aaabae;"></span>
                          <!-- <a class="" href="#"><i class="ti-menu"></i></a> -->
                        </div>
                      </td>
                      <td>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-edit-description.svg" class="mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="Edit description" data-toggle="tooltip"
                            data-placement="top" title="Edit Description">
                        </a>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-brush.svg" class="sw-disabled mb-0 mb-md-4 mb-lg-4 mb-xl-0"  alt="brush" data-toggle="tooltip"
                            data-placement="top" title="Brush">
                        </a>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-copy.svg" class="sw-disabled mb-0 mb-md-4 mb-lg-4 mb-xl-0"  alt="duplicate" data-toggle="tooltip"
                            data-placement="top" title="Duplicate">
                        </a>
                        <a href="#" class="">
                          <img src="./images/icons/ico-options.svg" class="mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="options" data-toggle="tooltip"
                            data-placement="top" title="More Options">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox2" name="chk[]">
                          <label class="custom-control-label" for="checkbox2"></label>
                        </div>
                      </td>

                      <td>
                        <div class="d-flex align-items-center">
                          <img src="./images/white-t-shirt.jpg" alt="white" height="60" width="60">
                          <div class="ml-4"><span> <b>Men's Cotton Crew Tee</b> </span><br>
                            <small class="text-muted">SKU: SW-T-12 </small><br>
                            T-Shirt by Canadian Apparel <br>
                            <small> <span class="small-color-circle" style="background: #fff;"></span>White • 2
                              Sizes</small>
                          </div>
                        </div>
                      </td>
                      <td>$16.50</td>
                      <td>
                        <div class="sw-up-status"><span class="small-color-circle"
                            style="background: #f49342;"></span>Unpublished</div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a class="btn btn-default mr-2 w-auto" href="#">Publish</a><span class="small-color-circle"
                            style="background: #aaabae;"></span>
                          <!-- <a class="" href="#"><i class="ti-menu"></i></a> -->
                        </div>
                      </td>
                      <td>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-edit-description.svg" class="mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="description" data-toggle="tooltip"
                            data-placement="top" title="Edit Description">
                        </a>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-brush.svg" class="sw-disabled mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="brush" data-toggle="tooltip"
                            data-placement="top" title="Brush">
                        </a>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-copy.svg" class="sw-disabled mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="copy" data-toggle="tooltip"
                            data-placement="top" title="Copy">
                        </a>
                        <a href="#" class="">
                          <img src="./images/icons/ico-options.svg" class="mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="options" data-toggle="tooltip"
                            data-placement="top" title="More Options">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox ">
                          <input type="checkbox" class="custom-control-input" id="checkbox3" name="chk[]">
                          <label class="custom-control-label" for="checkbox3"></label>
                        </div>
                      </td>

                      <td>
                        <div class="d-flex align-items-center">
                          <img class="" src="./images/grey-t-shirt.jpg" alt="grey" height="60" width="60">
                          <div class="ml-4"><span> <b>Men's Fitted Short Sleeve</b> </span><br>
                            <small class="text-muted">SKU: SW-T-11 </small><br>
                            T-Shirt by Canadian Apparel <br>
                            <small> <span class="small-color-circle" style="background: #aaabae;"></span>Grey • 4
                              Sizes</small>
                          </div>
                        </div>
                      </td>
                      <td>$20.00</td>
                      <td>
                        <div class="sw-up-status"><span class="small-color-circle"
                            style="background: #f49342;"></span>Unpublished</div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a class="btn btn-default mr-2 w-auto" href="#">Publish </a><span class="small-color-circle"
                            style="background: #aaabae;"></span>
                          <!-- <a class="" href="#"><i class="ti-menu"></i></a> -->
                        </div>
                      </td>
                      <td>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-edit-description.svg" class="mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="description" data-toggle="tooltip"
                            data-placement="top" title="Edit Description">
                        </a>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-brush.svg" class="sw-disabled mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="brush" data-toggle="tooltip"
                            data-placement="top" title="Brush">
                        </a>
                        <a href="#" class="mr-4">
                          <img src="./images/icons/ico-copy.svg" class="sw-disabled mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="copy" data-toggle="tooltip"
                            data-placement="top" title="Copy">
                        </a>
                        <a href="#" class="">
                          <img src="./images/icons/ico-options.svg"  class="mb-0 mb-md-4 mb-lg-4 mb-xl-0" alt="options" data-toggle="tooltip"
                            data-placement="top" title="More Options">
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Table END -->
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-6 text-right mt-4">
        <span class="text-right mr-3 sw-text">Displaying pages</span>
        <ul class="pagination sw-pagination pull-right my-0">
          <li><a class="sw-pagination-link mdi mdi-menu-left px-2 py-0" href="#"></a></li>
          <li><input type="number" class="form-control px-2" value="01" /></li>
          <li><span class="sw-pagination-numbs">of 10</span></li>
          <li><a class="sw-pagination-link mdi mdi-menu-right px-2 py-0" href="#"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END Container-fluid -->
</div>
<!-- END Page Wrapper -->

<!-- check multiple checkbox START-->
<script>
  function checkAll(ele) {
    var checkboxes = document.getElementsByTagName('input');
    if (ele.checked) {
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].type == 'checkbox') {
          checkboxes[i].checked = true;
        }
      }
    } else {
      for (var i = 0; i < checkboxes.length; i++) {
        console.log(i)
        if (checkboxes[i].type == 'checkbox') {
          checkboxes[i].checked = false;
        }
      }
    }
  }
</script>
<!-- check multiple checkbox END-->

<?php
include 'footer.php';
?>
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
        <h2 class="mt-2 mb-4">Storehubs</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bg-white box-shadow b-radius-3 pb-4 w-100">
          <form>
            <div class="row sw-search-input px-4 py-4">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-inline">
                  <div class="form-group search-icon">
                    <label class=" sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="Search" class="form-control" id="exampleInputEmail3" placeholder="Search Products">
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

              <div class="col-xs-12 col-sm-6 col-md-6  mt-sm-4 mt-md-0">
                <div class="text-center text-md-right">
                  <a class="btn btn-primary sw-plus-ico pl-4 pr-5 py-2 w-auto" href="#">
                    <img src="./images/icons/ico-plus.svg" class="img-responsive mr-3" alt="plus icon">
                    Storehub
                  </a>
                </div>
              </div>
            </div>
          </form>
          <hr class="mt-0 mb-0">

          <div class="row px-4 py-4">
            <div class="col-xs-12 col-sm-6 col-md-8 text-center text-md-left">
              <div class="pt-3">
                <span>Showing 5 of 25 Storehubs</span>
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
                      <th class="text-uppercase">Storehub Name <i class="mdi mdi-menu-up"></i> </th>
                      <th class="text-uppercase">Products <i class="mdi mdi-menu-down"></i></th>
                      <th class="text-uppercase">Status</th>
                      <th class="text-uppercase">Stores</th>
                      <!-- <th class="text-uppercase">Product Publish</th> -->
                      <th class="text-uppercase">Settings</th>
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
                          <img class="" src="./images/avatar-off-white.png" alt="avatar" height="32" width="32">
                          <div class="ml-4"><span>Off White Co.</span>
                          </div>
                        </div>
                      </td>
                      <td>27 Products</td>
                      <td>
                        <div><i class="mdi mdi-check-circle-outline sw-active mr-2"></i>
                          Active</div>
                      </td>
                      <td>
                        <ul class="total-product mt-1">
                          <li><img src="./images/logo/shopify.png" title="Shopify logo" alt="Shopify logo"> </li>
                          <li><img src="./images//logo/etsy.png" title="ETSY logo" alt="ETSY logo">
                          </li>
                          <li><img src="./images/logo/prestashop.png" title="Prestashop" alt="Prestashop"> </li>
                        </ul>
                        <a class="viewall" href="#" data-toggle="tooltip" data-html="true" data-placement="top"
                          title="Amazon <br> Shopify">+2 more</a>
                      </td>
                      <!-- <td>
                        <div>
                          <a class="btn btn-default" href="#">Publish</a>
                          <a class="" href="#"><i class="ti-menu"></i></a>
                        </div>
                      </td> -->
                      <td>
                        <a class="btn btn-default mr-2" href="#"><img src="./images/icons/ico-settings.svg" class="mr-2"
                            alt="settings icon" height="15" width="15">Store</a>
                        <a class="btn btn-default" href="#">Edit</a>
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
                          <img src="./images/avatar-billionaire.png" alt="avatar" height="32" width="32">
                          <div class="ml-4"><span> Billionare Boys Club </span>
                          </div>
                        </div>
                      </td>
                      <td>No Products yet</td>
                      <td>
                        <div>
                        <i class="mdi mdi-close-circle-outline sw-inactive mr-2"></i>Inactive
                        </div>
                      </td>
                      <td>
                        <div>No Stores Connected</div>
                      </td>
                      <!-- <td>
                        <div>
                          <a class="btn btn-default" href="#">Publish</a>
                          <a class="" href="#"><i class="ti-menu"></i></a>
                        </div>
                      </td> -->
                      <td>
                        <a class="btn btn-default mr-2" href="#"><img src="./images/icons/ico-settings.svg" class="mr-2"
                            alt="settings icon" height="15" width="15">Store</a>
                        <a class="btn btn-default" href="#">Edit</a>
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
                          <img src="./images/avatar-skult.png" alt="avatar" height="32" width="32">
                          <div class="ml-4"><span> Skult Clothing </span>
                          </div>
                        </div>
                      </td>
                      <td>27 Products</td>
                      <td>
                        <div> <i class="mdi mdi-check-circle-outline sw-active mr-2"></i>
                          Active</div>
                      </td>
                      <td>
                        <ul class="total-product mt-1">
                          <li><img src="./images/logo/shopify.png" title="Shopify logo" alt="Shopify logo"> </li>
                        </ul>
                      </td>
                      <!-- <td>
                        <div>
                          <a class="btn btn-default" href="#">Publish </a>
                          <a class="" href="#"><i class="ti-menu"></i></a>
                        </div>
                      </td> -->
                      <td>
                        <a class="btn btn-default mr-2" href="#"><img src="./images/icons/ico-settings.svg" class="mr-2"
                            alt="settings icon" height="15" width="15">Store</a>
                        <a class="btn btn-default" href="#">Edit</a>
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
          <li class="disabled"><a class="sw-pagination-link mdi mdi-menu-left px-2 py-0" href="#"></a></li>
          <li><input type="number" class="form-control px-2" value="01" /></li>
          <li><span class="sw-pagination-numbs">of 10</span></li>
          <li><a class="sw-pagination-link mdi mdi-menu-right px-2 py-0" href="#"></a></li>
        </ul>
      </div>
    </div>
    <div class="row text-center mt-5">
      <div class="col-md-12">
        <div>
          <span class="sw-abt-more">
            <i class="mdi mdi-help-circle-outline"></i>
            Learn more about <a href="#">storehubs.</a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- END Container-fluid -->
  <div class="sw-float-btn pull-right">
    <a class="btn btn-primary"> <img class="mr-1" src="./images/icons/ico-checkbox.svg">
      Learn </a>
  </div>
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
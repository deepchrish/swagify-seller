<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
?>

<div class="page-wrapper" id="sw-catalogue">
  <div class="container-fluid">
    <div class="row sw-dash-landing mt-3">
      <div class="col-md-12">
        <h2 class="mt-2 mb-4">Catalog</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bg-white box-shadow b-radius-3 p-4 mb-4 w-100">
          <div class="row">
            <div class=col-md-9>
              <h4>All products</h4>
            </div>
            <div class=col-md-3>
              <div class="form-inline sw-search-input">
                <div class="form-group search-icon">
                  <label class="sr-only" for="search"></label>
                  <input type="Search" class="form-control" id="search" placeholder="Search Products">
                </div>
              </div>
            </div>
          </div>
          <hr class="hidden-xs">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 hidden-xs border-right">
              <div class="sw-selectors">
                <a class="text-uppercase sw-pro-filter-btn" role="button" data-toggle="collapse" href="#collapseExample"
                  aria-expanded="true" aria-controls="collapseExample">
                  Categories <span class="mdi mdi-plus"></span> <span class="mdi mdi-minus"></span></a>

                <div class="collapse in" id="collapseExample" aria-expanded="true">
                  <div>
                    <ul class="list-unstyled sw-pro-filter-list">
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox0" checked>
                          <label class="custom-control-label" for="checkbox0">All (379)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox1">
                          <label class="custom-control-label" for="checkbox1">Apparel (92)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox2">
                          <label class="custom-control-label" for="checkbox2">Sunglasses (108)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox3">
                          <label class="custom-control-label" for="checkbox3">Bags and Purses (80)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox4">
                          <label class="custom-control-label" for="checkbox4">Jewelery (60)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox5">
                          <label class="custom-control-label" for="checkbox5">Item- Category (60)</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="sw-selectors">
                <a class="text-uppercase sw-pro-filter-btn" role="button" data-toggle="collapse" href="#color"
                  aria-expanded="true" aria-controls="color">
                  Color <span class="mdi mdi-plus"></span> <span class="mdi mdi-minus"></span></a>

                <div class="collapse in" id="color" aria-expanded="true">
                  <div>
                    <ul class="list-unstyled sw-pro-filter-list sw-colors-list">
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="colorbox0">
                          <label class="custom-control-label" for="colorbox0"><span class="box-sd-color"
                              style="background:#27ae60;"></span>Green (365)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="colorbox1">
                          <label class="custom-control-label" for="colorbox1"><span class="box-sd-color"
                              style="background:#fff;"></span>White (92)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="colorbox2">
                          <label class="custom-control-label" for="colorbox2"><span class="box-sd-color"
                              style="background:#000;"></span>Black (108)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="colorbox3">
                          <label class="custom-control-label" for="colorbox3"><span class="box-sd-color"
                              style="background:#9b59b6;"></span>Purple (80)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="colorbox4">
                          <label class="custom-control-label" for="colorbox4"><span class="box-sd-color"
                              style="background:#7b680c;"></span>Olive (60)</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="colorbox5">
                          <label class="custom-control-label" for="colorbox5"><span class="box-sd-color"
                              style="background:#f67f00;"></span>Orange (60)</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="sw-selectors">
                <a class="text-uppercase sw-pro-filter-btn" role="button" data-toggle="collapse" href="#brandsname"
                  aria-expanded="true" aria-controls="brandsname">
                  Brands <span class="mdi mdi-plus"></span> <span class="mdi mdi-minus"></span></a>

                <div class="collapse in" id="brandsname" aria-expanded="true">
                  <div>
                    <ul class="list-unstyled sw-pro-filter-list">
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brandbox0" checked>
                          <label class="custom-control-label" for="brandbox0">Brand Name</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brandbox1">
                          <label class="custom-control-label" for="brandbox1">Brand Name</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brandbox2">
                          <label class="custom-control-label" for="brandbox2">Brand Name</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brandbox3">
                          <label class="custom-control-label" for="brandbox3">Brand Name</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brandbox4">
                          <label class="custom-control-label" for="brandbox4">Brand Name</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brandbox5">
                          <label class="custom-control-label" for="brandbox5">Brand Name</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/grey-t-shirt.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Men's Cotton Crew Tee</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Canadian Apparel</a></span></small>
                      <div class="text-primary">From $12.00 to $16.00</div>
                      <small class="sw-text-muted">8 Sizes • 16 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="#" class="sw-premium-btn"><img class="img-responsive" src="images/icons/ico-premuim.svg"
                          alt="crown" title="crown">Premium</a>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive"
                          src="images/women-white-t-shirt.png"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Unisex Jersey Short Sleeve
                          Tee</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Bella+Canvas 3001</a></span></small>
                      <div class="text-primary">From $6.95 to $13.80</div>
                      <small class="sw-text-muted">8 Sizes • 12 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="#" class="sw-premium-btn"><img class="img-responsive" src="images/icons/ico-premuim.svg"
                          alt="crown" title="crown">Premium</a>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive"
                          src="images/women-pink-tees.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Unisex Zip Up Hoodie</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Stanley Stella
                          STTM528</a></span></small>
                      <div class="text-primary">From $12.04 to $18.40</div>
                      <small class="sw-text-muted">8 Sizes • 14 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/white-t-shirt.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Men's Jersey Polo Shirt</a>
                      </h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Gildan 8800 </a></span></small>
                      <div class="text-primary">From $12.00 to $16.00</div>
                      <small class="sw-text-muted">8 Sizes • 13 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/black-t-shirt.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Men's Cotton Crew Tee</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Canadian Apparel</a></span></small>
                      <div class="text-primary">From $12.00 to $16.00</div>
                      <small class="sw-text-muted">8 Sizes • 16 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="#" class="sw-premium-btn"><img class="img-responsive" src="images/icons/ico-premuim.svg"
                          alt="crown" title="crown">Premium</a>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/grey.png"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Unisex Jersey Short Sleeve
                          Tee</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Bella+Canvas 3001</a></span></small>
                      <div class="text-primary">From $6.95 to $13.80</div>
                      <small class="sw-text-muted">8 Sizes • 12 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="#" class="sw-premium-btn"><img class="img-responsive" src="images/icons/ico-premuim.svg"
                          alt="crown" title="crown">Premium</a>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive"
                          src="images/women-pink-tees.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Unisex Zip Up Hoodie</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Stanley Stella
                          STTM528</a></span></small>
                      <div class="text-primary">From $12.04 to $18.40</div>
                      <small class="sw-text-muted">8 Sizes • 14 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/white-t-shirt.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Men's Jersey Polo Shirt</a>
                      </h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Gildan 8800 </a></span></small>
                      <div class="text-primary">From $12.00 to $16.00</div>
                      <small class="sw-text-muted">8 Sizes • 13 Colors</small>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/grey-t-shirt.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Men's Cotton Crew Tee</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Canadian Apparel</a></span></small>
                      <div class="text-primary">From $12.00 to $16.00</div>
                      <small class="sw-text-muted">8 Sizes • 16 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="#" class="sw-premium-btn"><img class="img-responsive" src="images/icons/ico-premuim.svg"
                          alt="crown" title="crown">Premium</a>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive"
                          src="images/women-white-t-shirt.png"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Unisex Jersey Short Sleeve
                          Tee</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Bella+Canvas 3001</a></span></small>
                      <div class="text-primary">From $6.95 to $13.80</div>
                      <small class="sw-text-muted">8 Sizes • 12 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="#" class="sw-premium-btn"><img class="img-responsive" src="images/icons/ico-premuim.svg"
                          alt="crown" title="crown">Premium</a>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive"
                          src="images/women-pink-tees.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Unisex Zip Up Hoodie</a></h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Stanley Stella
                          STTM528</a></span></small>
                      <div class="text-primary">From $12.04 to $18.40</div>
                      <small class="sw-text-muted">8 Sizes • 14 Colors</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 px-2 mt-2 mb-3">
                  <div class="card">
                    <div class="se-pro-img">
                      <button class="heart">
                        <div class="heart-flip"></div>
                      </button>
                      <a href="mens-cotton-crew-tee.php"><img class="img-responsive" src="images/white-t-shirt.jpg"></a>
                      <a class="sw-design-pro" href="#">Design Yours</a>
                    </div>

                    <div class="sw-pro-short-details">
                      <h5 class="mb-1"><a href="mens-cotton-crew-tee.php" target="_blank">Men's Jersey Polo Shirt</a>
                      </h5>
                      <small><span class="sw-text-muted mr-2">By</span><a href="#">Gildan 8800 </a></span></small>
                      <div class="text-primary">From $12.00 to $16.00</div>
                      <small class="sw-text-muted">8 Sizes • 13 Colors</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.querySelectorAll('.heart').forEach(button => button.addEventListener('click', e => button.classList.toggle(
    'active')));
</script>
<?php
include 'footer.php';
?>
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
        <div>
          <a href="storehub-listings.php" class="sw-text-muted"> <i class="mdi mdi-chevron-left"></i> Storehubs</a>
        </div>
        <h2 class="mt-2 mb-4">T-Shirts</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bg-navy box-shadow b-radius-3 w-100 p-4">
          <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
              <p class="sw-text-white mb-0"><img src="images/icons/ico-premuim-gold.svg" alt="crown" title="crown"> Hey!
                You’ve found a
                premuim product. These products may require you to pay an additional payment to be unlocked for use.</p>
              <small class="sw-text-white ml-4 pl-1"><i class="sw-text-white sw-text-yellow">What are Premuim
                  Products?</i></small>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 py-2">
              <a href="#" class="btn btn-default sw-premium-btn">Unlock for $10</a>
            </div>
          </div>
        </div>

        <div class="bg-white box-shadow b-radius-3 p-4 mb-4 w-100">
          <div class="row">
            <div class="col-md-6">
              <div class="row product-gallery">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 px-3">
                  <ul class="image-list" id="imgselect">
                    <li c4lass="image-item"><img class="img-responsive" src="images/grey-t-shirt.jpg"></li>
                    <li class="image-item"><img class="img-responsive" src="images/black-t-shirt.jpg"></li>
                    <li class="image-item"><img class="img-responsive" src="images/grey.png"></li>
                    <li class="image-item"><img class="img-responsive" src="images/white-t-shirt.jpg"></li>
                  </ul>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 px-4 px-lg-0">
                  <div class="product-image">
                    <img class="active" class="img-responsive" src="images/grey-t-shirt.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 sw-pro-info mt-4 mt-lg-0">
              <h3 class="mt-0">Unisex Ringer Tee</h3>
              <p class="sw-text-muted">Generic brand PC54R</p>
              <h4 class="text-primary">From $6.95 to $13.80</h4>
              <div>
                <strong>Available Colors</strong>
                <ul class="list-unstyled list-inline sw-colors-list mb-0">
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="custom-control-input" id="checkbox1" name="colorsradio">
                      <label class="custom-control-label" for="checkbox1"><span class="box-sd-color"
                          style="background:#ffffff;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="custom-control-input" id="checkbox2" name="colorsradio">
                      <label class="custom-control-label" for="checkbox2"><span class="box-sd-color"
                          style="background:#111111;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="custom-control-input" id="checkbox3" name="colorsradio">
                      <label class="custom-control-label" for="checkbox3"><span class="box-sd-color"
                          style="background:#9b59b6;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="custom-control-input" id="checkbox4" name="colorsradio">
                      <label class="custom-control-label" for="checkbox4"><span class="box-sd-color"
                          style="background:#34495e;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="custom-control-input" id="checkbox5" name="colorsradio" checked>
                      <label class="custom-control-label" for="checkbox5"><span class="box-sd-color"
                          style="background:#3e3d42;"></span></label>
                    </div>
                  </li>
                </ul>
              </div>
              <div>
                <strong>Available Sizes</strong>
                <ul class="list-unstyled list-inline sw-pro-radio mb-0">
                  <li>
                    <div class="custom-control custom-radio">
                      <input type="checkbox" id="customRadio1" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1"><span class="m-auto">XS</span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-radio">
                      <input type="checkbox" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                      <label class="custom-control-label" for="customRadio2"><span class="m-auto">S</span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-radio">
                      <input type="checkbox" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3"><span class="m-auto">M</span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-radio">
                      <input type="checkbox" id="customRadio4" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4"><span class="m-auto">L</span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-radio">
                      <input type="checkbox" id="customRadio5" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio5"><span class="m-auto">XL</span></label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="mt-4">
                <strong>Key Features</strong>
                <ul class="pl-4">
                  <li>This is a key feature one</li>
                  <li>This is a key feature two</li>
                  <li>This is a key feature three</li>
                  <li>This is a key feature four</li>
                  <li>There should only be 5 Key features.</li>
                </ul>
              </div>
              <div class="sw-pro-btn-group">
                <a class="btn btn-primary mr-sm-3 mt-4" href="#">Design Yours</a>
                <a class="btn btn-default mt-4" href="#">Order Samples</a>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-2">
              <h4><img class="mr-2" src="images/icons/ico-smile.svg" alt="smile"> About</h4>
            </div>
            <div class="col-md-10">
              <p>This is where we will describe the product in Detail. We need to be very concise and simple with our
                words and it should always at-least cover 3-lines for the content. We need this description to be useful
                for a user in order for them to use it for the design. We should try and be as detailed as possible.</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-2">
              <h4><img class="mr-2" src="images/icons/ico-care.svg" alt="care"> Care</h4>
            </div>
            <div class="col-md-10">
              <p>This is where we will describe the product in Detail. We need to be very concise and simple with our
                words and it should always at-least cover 3-lines for the content. We need this description to be useful
                for a user in order for them to use it for the design. We should try and be as detailed as possible.</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-2">
              <h4><img class="mr-2" src="images/icons/ico-ruler.svg" alt="ruler"> Size Guide</h4>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th>XS</th>
                      <th>S</th>
                      <th>M</th>
                      <th>L</th>
                      <th>XL</th>
                      <th>2XL</th>
                      <th>3XL</th>
                      <th>4XL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Width</th>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                    </tr>
                     <tr>
                      <th>Length, in</th>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                    </tr>
                     <tr>
                      <th>Sleeve length, in</th>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                      <td>17.49</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  const activeImage = document.querySelector(".product-image .active");
  const productImages = document.querySelectorAll(".image-list img");
  const navItem = document.querySelector('a.toggle-nav');

  function changeImage(e) {
    activeImage.src = e.target.src;
  }

  function toggleNavigation() {
    this.nextElementSibling.classList.toggle('active');
  }
  productImages.forEach(image => image.addEventListener("click", changeImage));
  // navItem.addEventListener('click', toggleNavigation);

  var header = document.getElementById("imgselect");
  var btns = header.getElementsByClassName("img-responsive");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>
<?php
include 'footer.php';
?>
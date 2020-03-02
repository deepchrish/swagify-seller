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
            <div class="col-md-10">
              <p class="sw-text-white mb-0"><img src="images/icons/ico-chevron.svg" alt="crown" title="crown"> Hey!
                You’ve found a
                premuim product. These products may require you to pay an additional payment to be unlocked for use.</p>
              <small class="sw-text-white ml-4 pl-1"><i class="sw-text-white sw-text-yellow">What are Premuim
                  Products?</i></small>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-default sw-premium-btn">Unlock for $10</a>
            </div>
          </div>
        </div>
        <div class="bg-white box-shadow b-radius-3 p-4 mb-4 w-100">
          <div class="row">
            <div class="col-md-6">
              <div class="row product-gallery">
                <div class="col-md-3">
                  <ul class="image-list" id="imgselect">
                    <li c4lass="image-item"><img class="img-responsive" src="images/grey-t-shirt.jpg"></li>
                    <li class="image-item"><img class="img-responsive" src="images/black-t-shirt.jpg"></li>
                    <li class="image-item"><img class="img-responsive" src="images/grey.png"></li>
                    <li class="image-item"><img class="img-responsive" src="images/white-t-shirt.jpg"></li>
                  </ul>
                </div>
                <div class="col-md-9 pl-0">
                  <div class="product-image">
                    <img class="active" class="img-responsive" src="images/grey-t-shirt.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="mt-0">Unisex Ringer Tee</h3>
              <p class="sw-text-muted">Generic brand PC54R</p>
              <h4 class="text-primary">From $6.95 to $13.80</h4>
              <div>
                <strong>Available Colors</strong>
                <ul class="list-unstyled list-inline sw-colors-list">
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox1">
                      <label class="custom-control-label" for="checkbox1"><span class="box-sd-color"
                          style="background:#ffffff;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox2">
                      <label class="custom-control-label" for="checkbox2"><span class="box-sd-color"
                          style="background:#111111;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox3">
                      <label class="custom-control-label" for="checkbox3"><span class="box-sd-color"
                          style="background:#9b59b6;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox4">
                      <label class="custom-control-label" for="checkbox4"><span class="box-sd-color"
                          style="background:#34495e;"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox4" checked>
                      <label class="custom-control-label" for="checkbox4"><span class="box-sd-color"
                          style="background:#3e3d42;"></span></label>
                    </div>
                  </li>
                </ul>
                <strong>Available Sizes</strong>
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
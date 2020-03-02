<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
include 'vertical-nav.php';
?>

    <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row sw-dash-landing">
          <div class="col-md-12 sw-xs-welcome">
            <h2 class="">Welcome, Jenny Doe</h2>
            <span class="sw-head-txt text-muted">
              How’s it going?
            </span>
          </div>
          <div class="col-md-12 text-center">
            <h3 class="mt-3 mt-lg-0">You’ve done pretty good so far</h3>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-2 col-lg-3 visible-lg">
            <div class="sw-left-img"><img class="img-responsive" src="images/left-side.png"></div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-6 sw-tabination">
            <div class="sw-head-txt border-bottom p-4">Make yourself feel at home</div>
            <ul class="nav nav-pills nav-stacked col-sm-2 col-md-4">
              <li class="active"><a href="#tab_a" data-toggle="pill">Create Storehub</a></li>
              <li class=""><a href="#tab_b" data-toggle="pill">Connect Stores</a></li>
              <li class=""><a href="#tab_c" data-toggle="pill">Link item here</a></li>
            </ul>
            <div class="tab-content col-sm-10 col-md-8">
              <div class="tab-pane active" id="tab_a">
                <h4>Title appears here. This should always cover two lines of a sentence.</h4>
                <p class="sw-text-muted">This is where we explain the user what is it, that we want to them to do. We
                  need to be very concise and simple with our words and it should always cover 3-lines for the content.
                </p>
                <div class="py-4">
                  <a class="btn btn-primary" href="create-storehub.php">Create Storehub </a>
                  <a class="px-2" href="#">View my storehubs</a>
                </div>
              </div>
              <div class="tab-pane" id="tab_b">
                <h4>Pane B</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                  ac turpis egestas.</p>
              </div>
              <div class="tab-pane" id="tab_c">
                <h4>Pane C</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                  ac turpis egestas.</p>
              </div>
            </div>

          </div>

          <div class="col-md-2 col-lg-3 visible-lg">
            <div class="sw-right-bg">
              <img class="img-responsive" src="images/right-side.png">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-center mt-5">
            <h3>Tips and Tricks</h3>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 my-4">
            <div class="sw-cards">
              <div class="sw-card-img"><img class="img-responsive"
                  src="https://www.oberlo.com/wp-content/uploads/2017/08/podvsali.jpg"></div>
              <div class="p-4">
                <p>Title of the blog here. This should always cover two lines of a sentence.</p>
                <a class="text-uppercase" href="#">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 my-4">
            <div class="sw-cards">
              <div class="sw-card-img"><img class="img-responsive"
                  src="https://www.oberlo.com/wp-content/uploads/2017/08/podvsali.jpg"></div>
              <div class="p-4">
                <p>Title of the blog here. This should always cover two lines of a sentence.</p>
                <a class="text-uppercase" href="#">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 my-4">
            <div class="sw-cards">
              <div class="sw-card-img"><img class="img-responsive"
                  src="https://www.oberlo.com/wp-content/uploads/2017/08/podvsali.jpg"></div>
              <div class="p-4">
                <p>Title of the blog here. This should always cover two lines of a sentence.</p>
                <a class="text-uppercase" href="#">Read more</a>
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

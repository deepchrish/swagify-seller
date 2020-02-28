<!-- Horizontal - TOP navbar START-->
<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar">
    <div class="navbar-header">
      <!-- This is for the sidebar toggle which is visible on mobile only -->
      <div class="row">
        <div class="col-xs-5"><a class="nav-toggler visible-sm visible-xs toggle-left" href="#"
            onclick="toggleClass('.mobile-nav', 'visible')"><i class="mdi mdi-menu"></i></a></div>
        <div class="col-xs-2 col-md-12 p-0 px-lg-4">
          <a class="navbar-brand" href="index.php">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!-- Dark Logo icon -->
              <img src="images/logo/swagify-icon-dashboard.svg" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <img src="images/logo/myswagify.svg" alt="homepage" class="light-logo" />
            </span>
            <!-- Logo icon -->
          </a>
        </div>
        <div class="col-xs-5 pull-right navs-right visible-sm visible-xs sw-xs-icons">
          <ul class="list-inline list-unstyled">
            <!-- <li><a class="btn btn-primary" href="#"><img src="images/icons/ico-cart.svg"></a></li> -->
            <li><a href="#"><img src="images/icons/ico-cart.svg"></a></li>
            <li><a href="#"><img src="images/icons/ico-alarm.svg"></a></li>
            <li><a href="#"><img src="images/icons/ico-settings.svg"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="navbar-collapse">
      <ul class="navbar-nav list-unstyled">
        <li class="nav-item"><a class="nav-link menu-icon" href="#"
            onclick="toggleClass('.left-sidebar, .top-navbar, .page-wrapper', 'mini-sidebar')"><i
              class="mdi mdi-menu"></i></a></li>
      </ul>
      <div class="pull-right navs-right">
        <ul class="list-inline list-unstyled ">
          <li><a class="btn btn-primary" href="#">New Product</a></li>
          <li><a href="#"><img src="images/icons/ico-cart.svg"></a></li>
          <li><a href="#"><img src="images/icons/ico-alarm.svg"></a></li>
          <li><a href="#"><img src="images/icons/ico-settings.svg"></a></li>
          <li>
            <div class="dropdown">
              <button class="top-profile-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true">
                <img src="images/logo/profile-pic.jpg"> Jenny Doe
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Horizontal - TOP navbar END-->
<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
?>

<div class="page-wrapper">
    <div class="container-fluid">
        <section class="mt-2">
            <div class="container-fluid pl-0">
                <div class="sw-backtopage"><a href="index.php"><img src="images/icons/ico-chevron.svg" class="pr-2">
                        Design a product</a></div>
            </div>
            <div>
                <h3>Product Details</h3>
            </div>
            <div class="sw-steps mt-5 mb-4">
                <ul class="list-inline">
                    <li class="step"><img class="mr-2 mb-2" src="images/icons/ico-checkbox.svg">Pricing and Overview
                    </li>
                    <li class="step"><img class="mr-2 mb-2" src="images/icons/ico-checkbox.svg">Product Description
                    </li>
                    <li class="step"><img class="mr-2 mb-2" src="images/icons/ico-checkbox.svg">Storehub and Publish
                    </li>
                    <!-- <li class="step"><img class="p-2" src="images/icons/ico-checkbox.svg">Connect Stores</li> -->
                </ul>
            </div>
            <div class="sw-pro-element">
                <div class="progress sw-form-progress">
                    <div id="progressbar" class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0"
                        aria-valuemax="100" style="width:2%">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-2">
                        <form class="row sw-product-form"  action="index.php">

                            <!-- One "tab" for each step in the form: -->
                            <div class="tab col-sm-12 col-xs-12 p-0">
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
                                                <th class="text-uppercase">Avg. Price</th>
                                                <th class="text-uppercase">Retail price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div><span class="dark-circle">1</span></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#"><img src="./images/women-white-t-shirt.png"
                                                                alt="white"></a>
                                                        <div class="ml-4 mb-4"> <a href="#" class="sw-text-dark"><span>
                                                                    <b>Unisex Ringer Tee</b>
                                                                </span></a><br>
                                                            <span class="sw-text-muted">Generic brand PC54R </span><br>
                                                            T-Shirt by Canadian Apparel <br>
                                                            <span class="sw-text-muted"> Color: <small
                                                                    class="small-color-circle"
                                                                    style="background: #100c0c;"></small>Dark
                                                                Grey</span> <br>
                                                            <span class="sw-text-muted">Size: <small>
                                                                    Meduim</small></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="sw-pro-art-img">
                                                            <img src="./images/front-print-mock.png" alt="print mock">
                                                            <span>Front</span>
                                                        </div>
                                                        <div class="sw-pro-art-img">
                                                            <img src="./images/print-mockup.png" alt="print mock">
                                                            <span>Mockup</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><b>$6.95 to $13.80</b></td>
                                                <td>
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <label class="sr-only" for="amount"></label>
                                                            <div class="input-group w-25">
                                                                <div class="input-group-addon">
                                                                    <img src="./images/icons/ico-dollar.svg">
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    id="amount" placeholder="16.80">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table END -->

                                <div class="row py-4">
                                    <div class="sw-action col-md-12">
                                        <div class="sw-btn-group">
                                            <button type="button" class="btn btn-default" id="prevBtn"
                                                onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" class="btn btn-primary" id="nextBtn"
                                                onclick="nextPrev(1)" class="float-right">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                asads

                                <div class="row py-4">
                                    <div class="sw-action col-md-12">
                                        <div class="sw-btn-group mx-1">
                                            <button type="button" class="btn btn-default" id="prevBtn"
                                                onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" class="btn btn-primary" id="nextBtn"
                                                onclick="nextPrev(1)" class="float-right">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12 p-0">
                                hghg

                                <div class="row border-top py-5 px-0 px-sm-4 mx-1">
                                    <div class="sw-action col-md-12">
                                        <div class="sw-btn-group py-0 px-0">
                                            <button type="button" class="btn btn-default" id="prevBtn"
                                                onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" class="btn btn-primary" id="nextBtn"
                                                onclick="nextPrev(1)" class="float-right">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)

    }
    var step = 1;

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {

            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);

        var elem = document.getElementById("progressbar");
        var width = 33;

        if (-1 == n) {
            step = step - 1;
        }

        curWidth = width * step;

        if (step == 1 && n == -1) {
            curWidth = 2;
        } else if (step == 2 && n == -1) {
            curWidth = 33;
        } else if (step == 3 && n == -1) {
            curWidth = 66;
        }

        elem.style.width = curWidth + '%';

        if (1 == n) {
            step = step + 1;
        }

    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:

        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

<script>
    function passFileUrl() {
        document.getElementById('asgnmnt_file').click();
    }

    function fileSelected(inputData) {
        document.getElementById('asgnmnt_file_img').src = window.URL.createObjectURL(inputData.files[0])
    }
</script>
<?php
include 'footer.php';
?>
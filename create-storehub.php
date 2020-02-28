<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
?>
<section class="mt-5">
    <div class="container-fluid">
        <div class="pr-4 sw-backtopage"><a href="index.php"><img src="images/icons/ico-chevron.svg"> Back</a></div>
    </div>
    <div class="text-center m-auto">
        <h3>New Storehub</h3>
    </div>
    <div class="sw-steps mt-5 mb-4">
        <ul class="list-inline">
            <li class="step"><img class="p-2" src="images/icons/ico-checkbox.svg">Basic Details</li>
            <li class="step"><img class="p-2" src="images/icons/ico-checkbox.svg">Optional Details</li>
            <li class="step"><img class="p-2" src="images/icons/ico-checkbox.svg">Review</li>
            <li class="step"><img class="p-2" src="images/icons/ico-checkbox.svg">Connect Stores</li>
        </ul>
    </div>
    <div class="sw-pro-element">
        <div class="progress sw-form-progress">
            <div id="progressbar" class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0"
                aria-valuemax="100" style="width:2%">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 px-2">
                <form class="row" id="regForm" action="index.php">

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="text-center pt-1 pb-5"><span class="sw-text-muted">Storehub is a space where you can
                                connect your multiple store platforms and add your products to publish or for later
                                use.</span></div>
                        <hr class="mt-0 text-center">
                        <p class="text-center">Upload an avatar or a logo for this storehub.</p>
                        <div class="m-auto text-center sw-upload-img">
                            <input type="file" name="asgnmnt_file" id="asgnmnt_file" class="span8" style="display:none;"
                                onchange="fileSelected(this)" oninput="this.className = ''">
                            <img class="sw-upload" id="asgnmnt_file_img" src="images/logo/dummy.png"
                                onclick="passFileUrl()" style="cursor:pointer;" oninput="this.className = ''">
                            <label for="asgnmnt_file"><img class="mr-2" src="images/icons/ico-plus.svg"
                                    oninput="this.className = ''"> Upload</label>
                        </div>
                        <div class="my-3 ">
                            <input type="text" placeholder="Storehub Name" oninput="this.className = ''">
                            <small class="sw-text-muted">Give your storehub a suitable name e.g. <i
                                    class="text-dark">John Doe’s Sweatshirts</i></small>
                        </div>
                        <div class="my-3 select-wizard">
                            <label for="selectoption">Do you want to keep this storehub active?</label>
                            <select id="selectoption">
                                <option>Yes, Keep it active</option>
                                <option>No, I'll do it later</option>
                            </select>
                        </div>
                        <div class="row py-4">
                            <div class="sw-action col-md-12">
                                <div class="sw-btn-group">
                                    <button type="button" class="btn btn-default" id="prevBtn"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"
                                        class="float-right">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="m-auto text-center"><img src="images/optional-details.png" alt="Storehub" width="120px"
                                height="auto"></div>
                        <div class="text-center pt-1 py-4"><span class="sw-text-muted">These are some <span
                                    class="text-info">optional</span> details you might want to add.</span></div>
                        <hr class="mt-0 text-center">
                        <p class="text-center">Upload an avatar or a logo for this storehub.</p>

                        <div class="my-3">
                            <input type="url" placeholder="https://www.yourstorehubname.com"
                                oninput="this.className = ''">
                            <small class="sw-text-muted">Enter the url of the website if you have any with the same <a
                                    href="#"><i>storehub</i></a> name.</small>
                        </div>
                        <div class="my-3">
                            <input type="text" placeholder="Full address" oninput="this.className = ''">
                            <small class="sw-text-muted">If this <a href="#"><i>storehub</i></a> is also has real-life
                                store or a pop-up shop, Add an address.</small>
                        </div>

                        <div class="row py-4">
                            <div class="sw-action col-md-12">
                                <div class="sw-btn-group mx-1">
                                    <button type="button" class="btn btn-default" id="prevBtn"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"
                                        class="float-right">Next</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 col-xs-12 p-0">
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="m-auto text-center"><img src="images/review.png" alt="Storehub"
                                        width="120px" height="auto"></div>
                                <div class="visible sw-text-muted my-4 text-center">All good here?</div>
                            </div>
                        </div>
                        <div class="row border-top py-4 px-0 px-sm-4 mx-1 sw-review-details">
                            <div class="col-md-6 col-sm-6 col-xs-6 sw-text-muted text-uppercase px-2 px-sm-4">Storehub Name</div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right px-2 px-sm-4">Jenny & Jill Clothing</div>
                        </div>
                        <div class="row border-top py-4 px-0 px-sm-4 mx-1 sw-review-details">
                            <div class="col-md-6 col-sm-6 col-xs-6 sw-text-muted text-uppercase px-2 px-sm-4">Avatar</div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right px-2 px-sm-4"><span class="sw-img-uploaded"><img class="img-responsive"
                                        src="images/logo/dummy.png" alt="userimage"></span></div>
                        </div>
                        <div class="row border-top py-4 px-0 px-sm-4 mx-1 sw-review-details">
                            <div class="col-md-6 col-sm-6 col-xs-6 sw-text-muted text-uppercase px-2 px-sm-4">Status</div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right px-2 px-sm-4">Active</div>
                        </div>
                        <div class="row border-top py-4 px-0 px-sm-4 mx-1 sw-review-details">
                            <div class="col-md-6 col-sm-6 sw-text-muted text-uppercase px-2 px-sm-4">Website</div>
                            <div class="col-md-6 col-sm-6 text-right px-2 px-sm-4">-</div>
                        </div>
                        <div class="row border-top py-4 px-0 px-sm-4 mx-1 sw-review-details">
                            <div class="col-md-6 col-sm-6 sw-text-muted text-uppercase px-2 px-sm-4">Address</div>
                            <div class="col-md-6 col-sm-6 text-right px-2 px-sm-4">32-B Baker’s Street, Houston, Texas</div>
                        </div>
                        <div class="row border-top py-5 px-0 px-sm-4 mx-1">
                            <div class="sw-action col-md-12">
                                <div class="sw-btn-group py-0 px-0">
                                    <button type="button" class="btn btn-default" id="prevBtn"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"
                                        class="float-right">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row py-3">
                            <div class="col-md-offset-3 col-md-6 text-center">
                                <p class="sw-text-muted"> Wanna connect to your store platforms right now? You can
                                    always do this later by going into store settings. No Rush!</p>
                            </div>
                        </div>
                        <div class="row border-top py-4 px-0 mx-1 px-sm-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                                <div class="cards">
                                    <div class="sw-store-icons"><img class="img-responsive" src="images/logo/shopify.png"
                                            alt="Shopify"></div>
                                    <div>
                                        <h5>Shopify</h5>
                                    </div>
                                    <div>
                                        <p>Ecommerce platform with everything you need to sell online.</p>
                                    </div>
                                    <div><a href="#" class="btn btn-default">Connect</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                                <div class="cards">
                                    <div class="sw-store-icons"><img class="img-responsive" src="images/logo/etsy.png" width="35" height="35"
                                            alt="etsy"></div>
                                    <div>
                                        <h5>Etsy</h5>
                                    </div>
                                    <div>
                                        <p>A creative marketplace with over 30 million active buyers worldwide.</p>
                                    </div>
                                    <div><a href="storehub-add-etsy.php" class="btn btn-default" target="_blank">Connect</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                                <div class="cards">
                                    <div class="sw-store-icons"><img class="img-responsive" src="images/logo/wix.png" width="35" height="35"
                                            alt="Wix"></div>
                                    <div>
                                        <h5>Wix</h5>
                                    </div>
                                    <div>
                                        <p>A platform with an intuitive drag and drop builder and 500+ customizable templates.</p>
                                    </div>
                                    <div><a href="#" class="btn btn-default">Connect</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                                <div class="cards">
                                    <div class="sw-store-icons"><img class="img-responsive" src="images/logo/woo.png" width="35" height="35"
                                            alt="Woo Commerce"></div>
                                    <div>
                                        <h5>Woo Commerce</h5>
                                    </div>
                                    <div>
                                        <p>The simplest way to monetize blogs and websites built on WordPress.</p>
                                    </div>
                                    <div><a href="#" class="btn btn-default">Connect</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                                <div class="cards">
                                    <div class="sw-store-icons"><img class="img-responsive" src="images/logo/ebay.png" width="35" height="35"
                                            alt="Ebay"></div>
                                    <div>
                                        <h5>Ebay</h5>
                                    </div>
                                    <div>
                                        <p>A well-known marketplace ideal as an additional selling channel</p>
                                    </div>
                                    <div><a href="#" class="btn btn-default">Connect</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-3">
                                <div class="cards">
                                    <div class="sw-store-icons"><img class="img-responsive" src="images/logo/prestashop.png" width="35" height="35"
                                            alt="Prestashop"></div>
                                    <div>
                                        <h5>Prestashop</h5>
                                    </div>
                                    <div>
                                        <p>An extremely customizable storefront with a thriving community.</p>
                                    </div>
                                    <div><a href="#" class="btn btn-default">Connect</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2 px-sm-5">
                            <div class="sw-action col-md-12">
                                <div class="sw-btn-group">
                                    <button type="button" class="btn btn-default" id="prevBtn"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"
                                        class="float-right">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="sw-action col-md-offset-3 col-md-6">
                        <div class="sw-btn-group">
                            <button type="button" class="btn btn-default" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"
                                class="float-right">Next</button>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</section>


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

        if(-1 == n){
            step = step - 1;
        }

        curWidth = width * step;

        if(step == 1 && n == -1){
            curWidth = 2;
        }
        else  if(step == 2 && n == -1){
            curWidth = 33;
        }
        else if(step == 3 && n == -1){
            curWidth = 66;
        }

        elem.style.width = curWidth + '%';

        if(1 == n){
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
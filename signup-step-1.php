<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
?>
<div class="progress sw-progressbar">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
        style="width: 50%;">
    </div>
</div>
<section>
    <div class="container">
        <div class="row sw-formarea">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                <div class="my-5 py-sm-3 text-center">
                    <h1>We won’t take long. Do you want to tell us a bit about yourself?</h1>
                </div>
                <div class="sw-form">
                    <form>
                        <div class="form-group">
                            <label class="control-label" for="fullname">What’s your full name?
                                <span class="text-danger"> * </span>
                            </label>
                            <input type="text" class="form-control" id="fullname" placeholder="April Orenski"
                                name="fullname">
                        </div>
                        <div class="form-group">
                            <div class="select-wrapper">
                                <label class="control-label" for="account_setup_is_already_selling">Are you already
                                    selling?
                                    <span class="text-danger"> * </span>
                                </label>
                                <select class="form-control" id="account_setup_is_already_selling"
                                    name="account_setup[is_already_selling]" onchange="adSelectCheck(this);">
                                    <option data-index="1" value="nothing">Make your choice..</option>
                                    <option data-index="4" id="adSellingOnline" value="sellingbutonline">I’m selling,
                                        But
                                        not online</option>
                                    <option data-index="0" id="adDiffOption" value="selldifferentplateform">Yes, But
                                        with a
                                        different platform</option>
                                    <option data-index="5" id="adProductYet" value="sellingnotatall">I’m not selling
                                        at all</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="adSomethingSell" style="display:none;">
                            <div class="select-wrapper">
                                <label class="control-label" for="account_setup_have_designed_own_product">Have You ever
                                    designed your own
                                    products?
                                </label>
                                <select class="form-control" id="account_setup_have_designed_own_product"
                                    name="account_setup[have_designed_own_product]">
                                    <option data-index="7" value="nothing">Make your choice..</option>
                                    <option data-index="8" value="firsttime">No, This is my first time
                                    </option>
                                    <option data-index="9" value="designedproducts"> Yes, I have designed products
                                        before</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="launchStore1" style="display:none;">
                            <div class="select-wrapper">
                                <label class="control-label" for="account_setup_is_print_own_product">Do you print your
                                    own products?
                                </label>
                                <select class="form-control" id="account_setup_is_print_own_product"
                                    name="account_setup[is_print_own_product]">
                                    <option data-index="10" value="nothing">Make your choice..</option>
                                    <option data-index="11" value="notanswer">I’d rather not answer
                                    </option>
                                    <option data-index="12" value="shipmyownorders">Yes, I print and ship my own orders
                                    </option>
                                    <option data-index="13" value="ordersforme">Someone else print my orders for me
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" id="adOptnCheck1" style="display:none;">
                            <div class="select-wrapper">
                                <label class="control-label" for="account_setup_most_selling_plateform">Which Plateform
                                    do you sell the most on?
                                </label>
                                <select class="form-control" id="account_setup_most_selling_plateform"
                                    name="account_setup[most_selling_plateform]">
                                    <option data-index="11" value="nothing">Make your choice..</option>
                                    <option data-index="9" value="Printify">Printify</option>
                                    <option data-index="1" value="Gooten">Gooten</option>
                                    <option data-index="0" value="Printful">Printful</option>
                                    <option data-index="12" value="Custom Ink">Custom Ink</option>
                                    <option data-index="8" value="Shopify">Shopify</option>
                                    <option data-index="6" value="Magento">Magento</option>
                                    <option data-index="20" value="WooCommerce">WooCommerce </option>
                                    <option data-index="3" value="BigCommerce">BigCommerce</option>
                                    <option data-index="4" value="CustomCat">CustomCat</option>
                                    <option data-index="6" value="Moteefe">Moteefe</option>
                                    <option data-index="2" value="Teespring">Teespring</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="select-wrapper">
                                <label class="control-label" for="account_setup_earning_range">How much are you earning?
                                    <span class="text-danger"> * </span>
                                </label>
                                <select class="form-control" id="account_setup_earning_range"
                                    name="account_setup[earning_range]">
                                    <option value="nothing">Make your choice..</option>
                                    <option value="$0 (I'm just getting started)">$0 (I'm just getting started)
                                    </option>
                                    <option value="Up to $5,000">Up to $5,000</option>
                                    <option value="$50,000 to $250,000">$50,000 to $250,000</option>
                                    <option value="$250,000 to $1,000,000">$250,000 to $1,000,000</option>
                                    <option value="$1,000,000+">$1,000,000+</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="select-wrapper">
                                <label class="control-label" for="account_setup_timezone">What’s your timezone
                                    <span class="text-danger"> * </span>
                                </label>
                                <select class="form-control" id="account_setup_timezone" name="account_setup[timezone]">
                                    <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">
                                        (GMT-12:00) International Date Line West</option>
                                    <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">
                                        (GMT-11:00) Midway Island, Samoa</option>
                                    <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">
                                        (GMT-10:00) Hawaii</option>
                                    <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">
                                        (GMT-09:00) Alaska</option>
                                    <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">
                                        (GMT-08:00) Pacific Time (US & Canada)</option>
                                    <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">
                                        (GMT-08:00) Tijuana, Baja California</option>
                                    <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">
                                        (GMT-07:00) Arizona</option>
                                    <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">
                                        (GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                    <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">
                                        (GMT-07:00) Mountain Time (US & Canada)</option>
                                    <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">
                                        (GMT-06:00) Central America</option>
                                    <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">
                                        (GMT-06:00) Central Time (US & Canada)</option>
                                    <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">
                                        (GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                    <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">
                                        (GMT-06:00) Saskatchewan</option>
                                    <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">
                                        (GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                    <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">
                                        (GMT-05:00) Eastern Time (US & Canada)</option>
                                    <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">
                                        (GMT-05:00) Indiana (East)</option>
                                    <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">
                                        (GMT-04:00) Atlantic Time (Canada)</option>
                                    <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">
                                        (GMT-04:00) Caracas, La Paz</option>
                                    <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">
                                        (GMT-04:00) Manaus</option>
                                    <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">
                                        (GMT-04:00) Santiago</option>
                                    <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">
                                        (GMT-03:30) Newfoundland</option>
                                    <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                        (GMT-03:00) Brasilia</option>
                                    <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">
                                        (GMT-03:00) Buenos Aires, Georgetown</option>
                                    <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                        (GMT-03:00) Greenland</option>
                                    <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                        (GMT-03:00) Montevideo</option>
                                    <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">
                                        (GMT-02:00) Mid-Atlantic</option>
                                    <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">
                                        (GMT-01:00) Cape Verde Is.</option>
                                    <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">
                                        (GMT-01:00) Azores</option>
                                    <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">
                                        (GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                    <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">
                                        (GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                    <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                    <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                    <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                    <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                    <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) West Central Africa</option>
                                    <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Amman</option>
                                    <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Athens, Bucharest, Istanbul</option>
                                    <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Beirut</option>
                                    <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Cairo</option>
                                    <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">
                                        (GMT+02:00) Harare, Pretoria</option>
                                    <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                    <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Jerusalem</option>
                                    <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Minsk</option>
                                    <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Windhoek</option>
                                    <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                        (GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                    <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">
                                        (GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                    <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                        (GMT+03:00) Nairobi</option>
                                    <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                        (GMT+03:00) Tbilisi</option>
                                    <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">
                                        (GMT+03:30) Tehran</option>
                                    <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">
                                        (GMT+04:00) Abu Dhabi, Muscat</option>
                                    <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">
                                        (GMT+04:00) Baku</option>
                                    <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">
                                        (GMT+04:00) Yerevan</option>
                                    <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">
                                        (GMT+04:30) Kabul</option>
                                    <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">
                                        (GMT+05:00) Yekaterinburg</option>
                                    <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">
                                        (GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                    <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">
                                        (GMT+05:30) Sri Jayawardenapura</option>
                                    <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">
                                        (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                    <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">
                                        (GMT+05:45) Kathmandu</option>
                                    <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">
                                        (GMT+06:00) Almaty, Novosibirsk</option>
                                    <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">
                                        (GMT+06:00) Astana, Dhaka</option>
                                    <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">
                                        (GMT+06:30) Yangon (Rangoon)</option>
                                    <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">
                                        (GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                    <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">
                                        (GMT+07:00) Krasnoyarsk</option>
                                    <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                    <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Kuala Lumpur, Singapore</option>
                                    <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                    <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Perth</option>
                                    <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Taipei</option>
                                    <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">
                                        (GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                    <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">
                                        (GMT+09:00) Seoul</option>
                                    <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">
                                        (GMT+09:00) Yakutsk</option>
                                    <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">
                                        (GMT+09:30) Adelaide</option>
                                    <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">
                                        (GMT+09:30) Darwin</option>
                                    <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">
                                        (GMT+10:00) Brisbane</option>
                                    <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                        (GMT+10:00) Canberra, Melbourne, Sydney</option>
                                    <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                        (GMT+10:00) Hobart</option>
                                    <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">
                                        (GMT+10:00) Guam, Port Moresby</option>
                                    <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                        (GMT+10:00) Vladivostok</option>
                                    <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">
                                        (GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                    <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">
                                        (GMT+12:00) Auckland, Wellington</option>
                                    <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">
                                        (GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                    <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">
                                        (GMT+13:00) Nuku'alofa</option>
                                </select>
                            </div>
                        </div>
                        <div> Are you an employee of the company, you’re setting up an account for? </div>
                        <div class="my-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="do_work" name="chk[]">
                                <label class="custom-control-label" for="do_work">Yes, I work for the company as a
                                    freelancer / employee</label>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="signup-step-2.php" class="btn btn-primary px-5">Proceed</a>
                        </div>
                        <div class="text-center my-4">
                            <a href="signup-step-2.php">Skip for now, I will do this later</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Show Hide In Entry Form Field -->
<script>
    function adSelectCheck(nameSelect) {
        if (nameSelect) {
            SellingOnlineValue = document.getElementById("adSellingOnline").value;
            if (SellingOnlineValue == nameSelect.value) {
                document.getElementById("launchStore1").style.display = "block";
            } else {
                document.getElementById("launchStore1").style.display = "none";
            }
        } else {
            document.getElementById("launchStore1").style.display = "none";
        }

        if (nameSelect) {
            DiffOptionValue = document.getElementById("adDiffOption").value;
            if (DiffOptionValue == nameSelect.value) {
                document.getElementById("adOptnCheck1").style.display = "block";
            } else {
                document.getElementById("adOptnCheck1").style.display = "none";
            }
        } else {
            document.getElementById("adOptnCheck1").style.display = "none";
        }
        if (nameSelect) {
            ProductYetValue = document.getElementById("adProductYet").value;
            if (ProductYetValue == nameSelect.value) {
                document.getElementById("adSomethingSell").style.display = "block";
            } else {
                document.getElementById("adSomethingSell").style.display = "none";
            }
        } else {
            document.getElementById("adSomethingSell").style.display = "none";
        }
    }
</script>
<!-- Show Hide In Entry Form Field -->
<?php
include 'footer.php';
?>
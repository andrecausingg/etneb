<?php
    require_once("./app/php/helper/error-pageHF.php");
    $classErrorPage = new classErrorPage();
    $classErrorPage->dashboarUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Etneb Dashboard</title>

    <!-- Css -->
    <link rel="stylesheet" href="./app/scss/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5bc400d418.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body style="overflow: hidden; height: 100%;">
    <!-- Start of Header -->
    <header class="yot-header yot-container">
        <!-- Start of Link Nav -->
        <nav class="yot-ptb-24 yot-flex yot-flex-ai-c-jc-sb">
            <!-- Start of Logo Text -->
            <a href="#"><h1 class="yot-tc-purple">ET<span class="yot-tc-yellow">NEB</span></h1></a>

            <!-- Start of Logout -->
            <a href="logout" class="yot-tc-black yot-text-font-l">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Log Out</span>
            </a>
        </nav> <!-- End of Link Nav -->
    </header> <!-- End of Header -->

    <!-- Start of Overlay New User Personal Information-->
    <div id="newUserpersonalInformationContainer" class="yot-overlay-mid">
        <div id="style-1" class="yot-overlay-mid-dashboard-form yot-pa-48 dashboard-new-user-form" style="height: 630px; overflow-y: scroll;">
            <!-- Title -->
            <h2 class="yot-tc-yellow yot-mb-24">Personal Information</h2>

            <!-- Form -->
            <form id="dashboardNewUserForm">
                <!-- Start of Name -->
                <div class="yot-row yot-mb-16">
                    <!-- First Name -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">First Name</label> <br>
                        <input class="yot-form-input" type="text" id="firstName" placeholder="" required>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The First Name field is required.</span> -->
                    </div>
                    <!-- Middle Name -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Middle Name</label>
                        <input class="yot-form-input" type="text" id="middleName">
                    </div>
                    <!-- Last Name -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Last Name</label>
                        <input class="yot-form-input" type="text" id="lastName" required>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Last Name field is required.</span> -->
                    </div>
                </div> <!-- End of Name -->

                <!-- Start of Birth Date and Gender -->
                <div class="yot-row yot-mb-16">
                    <!-- Birth Date -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Birth Date</label>
                        <input class="yot-form-input" type="date" id="birthDate" required> <br>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Birth Date field is required.</span> -->
                    </div>
                    <!-- Gender -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Gender</label> 
                        <select class="yot-form-input" id="gender" required>
                            <option value="">- Select Gender -</option>
                            <option value="Male">Male</option>
                            <option value="Fe-Male">Fe-Male</option>
                        </select>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Gender field is required.</span> -->
                    </div>
                </div> <!-- End of Birth Date and Gender -->

                <!-- Title -->
                <h2 class="yot-tc-yellow">Address</h2>
                <h6 class="yot-tc-yellow yot-mb-24">Note: Put N/A if NOT APPLICABLE</h6>

                <!-- Start of Address 1-->
                <div class="yot-row yot-mb-16">
                    <!-- Address 1 -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Address 1</label>
                        <input class="yot-form-input" type="text" id="address1" placeholder="" required>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Address 1 field is required.</span> <br> -->
                        <span class="yot-text-fs-t">House/Unit Number, Building Name, Street Name</span>
                    </div>
                    <!-- Address 2 -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Address 2</label>
                        <input class="yot-form-input" type="text" id="address2" required>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Address 2 field is required.</span> <br> -->
                        <span class="yot-text-fs-t">Subdivision/Village</span>
                    </div>
                    <!-- Address 2 -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Baranggay</label>
                        <input class="yot-form-input" type="text" id="baranggay" required>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Address 2 field is required.</span> <br> -->
                    </div>
                </div> <!-- End of Address 1-->

                <!-- Start of Address 2-->
                <div class="yot-row yot-mb-16">
                    <!-- Region -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Region</label>
                        <select class="yot-form-input" id="region" required>
                            <option value="">- Select Region -</option>
                            <?php
                                require_once("./app/php/helper/location-phHF.php");
                                $classPHLocation = new classPHLocation();
                                $classPHLocation->getRegions();
                            ?>
                        </select>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Region field is required.</span> -->
                    </div>
                    <!-- Province -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Province</label>
                        <select class="yot-form-input" id="province" required>
                            <option value="">- Select Province -</option>
                            <?php
                                require_once("./app/php/helper/location-phHF.php");
                                $classPHLocation = new classPHLocation();
                                $classPHLocation->getProvince();
                            ?>
                        </select>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Province field is required.</span> -->
                    </div>
                    <!-- Municipality -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">City/Municipality</label>
                        <select class="yot-form-input" id="municipality" required>
                            <option value="">- Select Municipality -</option>
                            <?php
                                require_once("./app/php/helper/location-phHF.php");
                                $classPHLocation = new classPHLocation();
                                $classPHLocation->getMunicipalities();
                            ?>
                        </select>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Municipality field is required.</span> -->
                    </div>
                </div> <!-- End of Address 2-->

                <!-- Start of Address 2-->
                <div class="yot-row yot-mb-16">
                    <!-- Postal -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Postal</label>
                        <input class="yot-form-input" type="text" id="postal" placeholder="" required>
                        <!-- <span class="yot-text-fs-t yot-tc-red">The Postal field is required.</span> -->
                    </div>
                    <!-- Country -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Country</label>
                        <input class="yot-form-input" type="text" id="country" value="Philippines" disabled>
                    </div>
                </div> <!-- End of Address 2-->

                <!-- Title -->
                <h2 class="yot-tc-yellow">Etneb I.D</h2>
                <h6 class="yot-tc-yellow yot-mb-16">Note: Create a good I.D <br> Example: andrecausing231 </h6>

                <!-- Start of Etneb I.D -->
                <div class="yot-row yot-mb-16">
                    <!-- Address 1 -->
                    <div class="yot-col-33-33 yot-pa-4">
                        <label for="">Etneb I.D</label>
                        <input class="yot-form-input" type="text" id="etnebID" placeholder="" required>
                        <span id="errorEtnebID" class="yot-tc-red"></span>
                    </div>
                </div> <!-- End of Etneb I.D -->

                <div class="yot-text-center yot-mt-16">
                    <button type="submit" class="yot-btn-secondary"> Submit </button>
                </div>
            </form>
        </div>
    </div>  <!-- End of Overlay New User Personal Information-->

    <!-- Start of Overlay 500 Pesos New User -->
    <div id="welcomeGift" class="yot-overlay-mid" style="display: none;">
        <div class="yot-overlay-mid-dashboard-form yot-pa-24">
            <h2 class="yot-tc-yellow yot-mb-16 yot-text-center">Welcome Gift you will receive</h2>

            <div class="yot-flex yot-flex-ai-c-jc-c">
                <i class="fa-solid fa-peso-sign yot-mr-8" style="font-size: 46px;"></i>
                <h2 class="yot-ml-8">500.00</h2>
            </div>

            <div class="yot-text-center yot-mt-16">
                <button id="claimBtn" class="yot-btn-secondary"> Claim </button>
            </div>
        </div>
    </div>  <!-- End of Overlay 500 Pesos New User -->

    <!-- Start of Main -->
    <div class="dashboard-parent yot-flex-jc-c yot-container yot-w-100">
        <!-- Start of Left -->
        <section class="yot-tc-white yot-mb-16 dashboard-left" style="align-self: flex-start; ">
            <!-- Balance and Navigation Container -->
            <div class="yot-row yot-flex-ai-c-jc-sa yot-bg-purple yot-pa-24" style="border-radius: 20px;">
                <!-- Balance -->
                <div class="yot-text-fs-jm yot-mb-24">
                    <h2>Balance</h2>
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>0.00</span>
                </div>

                <!-- Navigations -->
                <div class="">
                    <!-- Start of First Navigation -->
                    <div class="yot-flex yot-flex-ai-c-jc-sa yot-mb-24">
                        <!-- Send -->
                        <div class="yot-flex yot-flex-fd-c-ai-c">
                            <i class="fa-solid fa-paper-plane fa-xl yot-mt-16"></i>
                            <span class="yot-mt-16">Send</span>
                        </div>

                        <!-- Request -->
                        <div class="yot-flex yot-flex-fd-c-ai-c yot-mlr-24">
                            <i class="fa-solid fa-money-bill-transfer fa-xl yot-mt-16"></i>
                            <span class="yot-mt-16">Request</span>
                        </div>

                        <!-- Profile -->
                        <div class="yot-flex yot-flex-fd-c-ai-c">
                            <i class="fa-solid fa-user fa-xl yot-mt-16"></i>
                            <span class="yot-mt-16">Profile</span>
                        </div>
                    </div> <!-- End of First Navigation -->

                    <!-- Start of Second Navigation -->
                    <div class="yot-flex yot-flex-ai-c-jc-se">
                        <!-- Transaction -->
                        <div class="yot-flex yot-flex-fd-c-ai-c yot-mr-8">
                            <i class="fa-solid fa-timeline fa-xl"></i>
                            <span class="yot-mt-16">Transaction</span>
                        </div>

                        <!-- Profile -->
                        <div class="yot-flex yot-flex-fd-c-ai-c yot-ml-8">
                            <i class="fa-solid fa-plus fa-xl"></i>
                            <span class="yot-mt-16">Add Money</span>
                        </div>
                    </div>  <!-- End of Second Navigation -->
                </div>
            </div>

            <!-- Thank you Using Etneb Container -->
            <div class="yot-mt-48 yot-hide-for-mobile">
                <h1 class="yot-text-center yot-tc-purple">Thank you for using <br> ET<span class="yot-tc-yellow">NEB</span></h1>
                <img src="./app/images/undraw_chasing_love_re_9r1c.svg" alt="">
            </div>
        </section> <!-- End of Utilities Left -->

        <!-- Start of Right Send Money Container-->
        <section class="yot-mlr-16 dashboard-right" style="align-self: flex-start;">
            <!-- Start of Send Money Container -->
            <div class="yot-bg-yellow yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Titlw -->
                <h3 class="yot-mb-16">Send Money</h3>

                <!-- Search User -->
                <div>
                    <label for="">EntnebID#</label>
                    <input class="yot-form-input-tertiary-bg-yellow" type="text" id="">
                </div>

                <!-- Example and Display User to receive -->
                <div class="yot-text-center">
                    <h4>Example: #shawngomo</h4>
                    <img src="./app/images/undraw_no_data_re_kwbl.svg" alt="" width="74.79" height="73">
                    <hr style="border: 1px solid black;">
                </div>

                <!-- Title  -->
                <h4 class="yot-text-center">Amount to Send</h4>

                <!-- Amount To Send -->
                <div>
                    <label for="">Ex:100.00</label>
                    <input class="yot-form-input-primary" type="text" id="">
                </div>

                <!-- Submit Btn -->
                <div class="yot-text-center">
                    <button class="yot-btn-primary">Submit</button>
                </div>
            </div> <!-- End of Send Money Container -->

            <!-- Start of Request Money container -->
            <div class="yot-bg-yellow yot-pa-24" style="border-radius: 20px; ">
                <!-- Title -->
                <h3 class="yot-mb-16">Requesting Money</h3>
            </div>
        </section> <!-- End of Right Send Money Container-->
    </div> <!-- End of Main -->

    <!-- Ajax -->
    <script src="./app/js/ajax/dashboard-new-user.js"></script>
    <script src="./app/js/ajax/form-select-province.js"></script>
    <script src="./app/js/ajax/form-select-municipalities.js"></script>
    <script src="./app/js/ajax/dashboard-new-user-claim.js"></script>
</body> 
</html>
<?php
    require_once("./app/php/helper/error-pageHF.php");
    $classErrorPage = new classErrorPage();
    $classErrorPage->welcomeGift();
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
            <a href="#" class="yot-tc-black yot-text-font-l">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Log Out</span>
            </a>
        </nav> <!-- End of Link Nav -->
    </header> <!-- End of Header -->

    <!-- Start of Overlay 500 Pesos New User -->
    <div class="yot-overlay-mid">
        <div class="yot-overlay-mid-dashboard-form yot-pa-24">
            <h2 class="yot-tc-yellow yot-mb-16 yot-text-center">Welcome Gift you will receive</h2>

            <div class="yot-flex yot-flex-ai-c-jc-c">
                <i class="fa-solid fa-peso-sign yot-mr-8" style="font-size: 46px;"></i>
                <h2 class="yot-ml-8">500.00</h2>
            </div>

            <div class="yot-text-center yot-mt-16">
                <button class="yot-btn-secondary"> Claim </button>
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
</body> 
</html>

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
    <link rel="stylesheet" href="./app//scss/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5bc400d418.js" crossorigin="anonymous"></script>
</head>
<body>
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

    <!-- Start of Main -->
    <div class="dashboard-parent yot-flex-jc-c yot-container yot-w-100">
        <!-- Start of Left -->
        <section class="yot-tc-white yot-mb-16 dashboard-left" style="align-self: flex-start; ">
            <!-- Balance and Navigation Container -->
            <div class="yot-flex-ai-c-jc-sa yot-bg-purple yot-pa-24" style="border-radius: 20px;">
                <!-- Balance -->
                <div class="yot-text-fs-jm yot-mb-8">
                    <h2>Balance</h2>
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>
                        <?php
                            require_once("./app/php/balanceMF.php");
                            $classBalance = new classBalance();
                            echo $classBalance->getbalance();
                        ?>
                    </span>
                </div>

                <!-- Navigations -->
                <div class="yot-flex yot-flex-ai-c-jc-se">
                    <!-- Send -->
                    <a href="dashboard-send" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white">
                        <i class="fa-solid fa-paper-plane fa-xl yot-mt-16"></i>
                        <span class="yot-mt-16">Send</span>
                    </a>

                    <!-- Request -->
                    <a href="dashboard-request" class="yot-flex yot-flex-fd-c-ai-c yot-tc-yellow yot-mlr-16">
                        <i class="fa-solid fa-money-bill-transfer fa-xl yot-mt-16"></i>
                        <span class="yot-mt-16">Req</span>
                    </a>

                    <!-- Profile -->
                    <a href="dashboard-profile" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white">
                        <i class="fa-solid fa-user fa-xl yot-mt-16"></i>
                        <span class="yot-mt-16">Profile</span>
                    </a>

                    <!-- History -->
                    <a href="dashboard-history" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white">
                        <i class="fa-solid fa-timeline fa-xl yot-mt-16"></i>
                        <span class="yot-mt-16">history</span>
                    </a>
                </div> 
            </div>

            <!-- Thank you Using Etneb Container -->
            <div class="yot-mt-48 yot-hide-for-mobile">
                <h1 class="yot-text-center yot-tc-purple">Thank you for using <br> ET<span class="yot-tc-yellow">NEB</span></h1>
                <img src="./app/images/undraw_chasing_love_re_9r1c.svg" alt="">
            </div>
        </section> <!-- End of Utilities Left -->

        <!-- Start of Right Receive Money Container-->
        <section class="yot-mlr-16 dashboard-right" style="align-self: flex-start;">
            <!-- Start of Receive Money Container -->
            <div class="yot-bg-effervescent-blue yot-tc-white yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Title and Search User -->
                <div>
                    <!-- Title -->
                    <h3 class="yot-mb-16">Request Money</h3>

                    <!-- Search User -->
                    <div>
                        <div class="yot-form-icon-parent">
                            <h4 style="position:absolute; left:20px; top:23px; border-right:3px solid white">EntnebID#</h4>
                            <input id="dashboardSendSearchUser" class="yot-form-input-tertiary-bg-effervescent-blue yot-text-fs-xl" style="padding-left: 125px;" type="text" name="" id="">
                        </div>
                    </div>
                </div>

                <!-- Example and Display User to receive -->
                <div class="yot-text-center" style="display: none;">
                    <h4>Example: #shawngomo</h4>
                    <img src="./app/images/undraw_no_data_re_kwbl.svg" alt="" width="74.79" height="73">
                    <hr style="border: 1px solid black;">
                </div>

                <!-- Example and Display User to receive -->
                <div id="exampleDisplayUser" class="yot-text-center">
                    <div class="yot-mtb-16">
                        <h3>Search Users</h3>
                    </div>
                    <img src="./app/images/undraw_search_re_x5gq.svg" alt="" width="150" height="150">
                </div>

                <!-- List of User -->
                <div id="resultSearch" style="max-height: 300px; overflow-y: scroll;"></div>

                <!-- Amount to Request -->
                <div style="display: none;">
                    <hr style="border: 1px solid white;">
                    <!-- Title  -->
                    <h3>Desire to Receive</h3>

                    <!-- Desire To Recieve -->
                    <div>
                        <div class="yot-form-icon-parent">
                            <div class="yot-flex yot-flex-ai-c" style="position:absolute; left:20px;  top:22px;">
                                <h5 class="yot-text-fs-xxl"><i class="fa-solid fa-peso-sign 2xl"></i></h5>
                            </div>
                            <input class="yot-form-input-primary-bg-effervescent-blue yot-text-fs-xl" type="text" id="inputMoney" style="padding-left: 40px !important;">
                        </div>
                    </div>

                    <!-- Submit Btn -->
                    <div class="yot-text-center">
                        <button class="yot-btn-secondary">Submit</button>
                    </div>
                </div>
            </div> <!-- End of Send Receive Container -->

            <!-- Start of Request Money container -->
            <div class="yot-bg-effervescent-blue yot-tc-white yot-pa-24" style="border-radius: 20px; ">
                <!-- Title -->
                <h3 class="yot-mb-16">Requesting Money</h3>
            </div>
        </section> <!-- End of Right Receive Money Container-->
    </div> <!-- End of Main -->

    <script src="./app/js/ajax/dashboard-send-search-user.js"></script> 

</body> 
</html>
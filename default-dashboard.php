
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
            <a href="#" class="yot-tc-black yot-text-font-l">
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
            <div class="yot-row yot-flex-ai-c-jc-sa yot-bg-purple yot-pa-24" style="border-radius: 20px;">
                <!-- Balance -->
                <div class="yot-text-fs-jm yot-mb-24">
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
                <div class="">
                    <!-- Start of First Navigation -->
                    <div class="yot-flex yot-flex-ai-c-jc-sa yot-mb-24">
                        <!-- Send -->
                        <a href="dashboard-send" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white">
                            <i class="fa-solid fa-paper-plane fa-xl yot-mt-16"></i>
                            <span class="yot-mt-16">Send</span>
                        </a>

                        <!-- Request -->
                        <a href="dashboard-request" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white yot-mlr-16">
                            <i class="fa-solid fa-money-bill-transfer fa-xl yot-mt-16"></i>
                            <span class="yot-mt-16">Request</span>
                        </a>

                        <!-- Profile -->
                        <a href="dashboard-profile" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white">
                            <i class="fa-solid fa-user fa-xl yot-mt-16"></i>
                            <span class="yot-mt-16">Profile</span>
                        </a>
                    </div> <!-- End of First Navigation -->

                    <!-- Start of Second Navigation -->
                    <div class="yot-flex yot-flex-ai-c-jc-se">
                        <!-- Transaction -->
                        <a href="dashboard-transaction" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white yot-mr-8">
                            <i class="fa-solid fa-timeline fa-xl"></i>
                            <span class="yot-mt-16">Transaction</span>
                        </a>

                        <!-- Add Money -->
                        <a href="dashboard-add-money" class="yot-flex yot-flex-fd-c-ai-c yot-tc-yellow yot-ml-8">
                            <i class="fa-solid fa-plus fa-xl"></i>
                            <span class="yot-mt-16">Add Money</span>
                        </a>
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
        <section class="yot-mlr-8 dashboard-right" style="align-self: flex-start;">
            <!-- Start of Send Money Container -->
            <div class="yot-bg-yellow yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Titlw -->
                <h3 class="yot-mb-16">Send Money</h3>

                <!-- Search User -->
                <div>
                    <label for="">EntnebID#</label>
                    <input class="yot-form-input-tertiary-bg-yellow" type="text" name="" id="">
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
                    <input class="yot-form-input-primary" type="text" name="" id="">
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

        <!-- Start of Right Receive Money Container-->
        <section class="yot-mlr-16 dashboard-right" style="align-self: flex-start; display: none;">
            <!-- Start of Receive Money Container -->
            <div class="yot-bg-effervescent-blue yot-tc-white yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Title -->
                <h3 class="yot-mb-16">Request Money</h3>

                <!-- Search User -->
                <div>
                    <label for="">EntnebID#</label>
                    <input class="yot-form-input-tertiary-bg-effervescent-blue" type="text" name="" id="">
                </div>

                <!-- Example and Display User to receive -->
                <div class="yot-text-center">
                    <h4>Example: #shawngomo</h4>
                    <img src="./app/images/undraw_no_data_re_kwbl.svg" alt="" width="74.79" height="73">
                    <hr style="border: 1px solid black;">
                </div>

                <!-- Title  -->
                <h4 class="yot-text-center">Desire to Receive</h4>

                <!-- Desire To Recieve -->
                <div>
                    <label for="">Ex:100.00</label>
                    <input class="yot-form-input-primary-bg-effervescent-blue" type="text" name="" id="">
                </div>

                <!-- Submit Btn -->
                <div class="yot-text-center">
                    <button class="yot-btn-secondary">Submit</button>
                </div>
            </div> <!-- End of Send Receive Container -->

            <!-- Start of Request Money container -->
            <div class="yot-bg-effervescent-blue yot-tc-white yot-pa-24" style="border-radius: 20px; ">
                <!-- Title -->
                <h3 class="yot-mb-16">Requesting Money</h3>
            </div>
        </section> <!-- End of Right Receive Money Container-->

        <!-- Start of Right Profile Container-->
        <section class="yot-mlr-16 dashboard-right" style="align-self: flex-start; display: none;">
            <!-- Start of Transaction Money Container -->
            <div class="yot-bg-white yot-tc-black yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Title -->
                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <h3>Profile</h3>
                    <div>
                        <i class="fa-solid fa-id-card-clip"></i>
                        <span>#shawngomo</span>
                    </div>
                </div>
                
                <div class="yot-text-center yot-mb-16">
                    <!-- Image -->
                    <img src="./app/images/undraw_male_avatar_323b.svg" alt="" width="126" height="126">
                    <h3>Shawn Gomo</h3>
                </div>

                <div>
                    <!-- Personal Data -->
                    <div class="yot-bg-white yot-pa-16 yot-flex yot-flex-ai-c-jc-sb">
                        <span>Personal Data</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <!-- Security -->
                    <div class="yot-bg-white yot-pa-16 yot-flex yot-flex-ai-c-jc-sb">
                        <span>Security</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <!-- Verify PRofile -->
                    <div class="yot-bg-white yot-pa-16 yot-flex yot-flex-ai-c-jc-sb">
                        <span>Verify Profile</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div> <!-- End of Send Receive Container -->
        </section> <!-- End of Right Profile Container-->

        <!-- Start of Right Transaction Money Container-->
        <section class="yot-mlr-16 dashboard-right" style="align-self: flex-start; display: none;">
            <!-- Start of Transaction Money Container -->
            <div class="yot-bg-moor-monster yot-tc-white yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Title -->
                <h3 class="yot-mb-16">Transactions</h3>

                <!-- Description -->
                <h4 class="yot-text-center yot-mtb-48">Sorry you don't have any transaction yet.</h4>
                
                <!-- Image -->
                <img src="./app/images/undraw_donut_love_kau1.svg" alt="" width="236.16" height="152.11">
            </div> <!-- End of Send Receive Container -->

            <!-- Start of Request Money container -->
            <div class="yot-bg-moor-monster yot-tc-white yot-pa-24" style="border-radius: 20px; ">
                <!-- Title -->
                <h3 class="yot-mb-16">Requesting Money</h3>
            </div>
        </section> <!-- End of Right Transaction Money Container-->
    </div> <!-- End of Main -->
</body> 
</html>
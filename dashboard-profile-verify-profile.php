
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
                    <a href="dashboard-request" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white yot-mlr-16">
                        <i class="fa-solid fa-money-bill-transfer fa-xl yot-mt-16"></i>
                        <span class="yot-mt-16">Req</span>
                    </a>

                    <!-- Profile -->
                    <a href="dashboard-profile" class="yot-flex yot-flex-fd-c-ai-c yot-tc-yellow">
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

        <!-- Start of Right Profile Personal Data Container-->
        <section class="yot-mlr-16 dashboard-right" style="align-self: flex-start;">
            <!-- Start of history Money Container -->
            <div class="yot-bg-white yot-tc-black yot-pa-24 yot-mb-16" style="border-radius: 20px; ">
                <!-- Title -->
                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <a  href="dashboard-profile" class="yot-flex yot-flex-ai-c yot-cursor-pointer yot-tc-black">
                        <i class="fa-solid fa-arrow-left fa-2xl"></i>
                        <h4 class="yot-ml-8">back</h4>
                    </a>
                    <div>
                        <span>Identification</span>
                    </div>
                </div>
                
                <div class="yot-text-center yot-mb-16">
                    <!-- Image -->
                    <img src="./app/images/undraw_inspection_re_tbt7.svg" alt="" width="126" height="126">
                </div>

                <!-- Form -->
                <div>
                    <div class="yot-bg-white yot-flex yot-flex-fd-c yot-pa-16">
                        <label for="">Front I.D</label>
                        <input class="yot-form-input-primary-bg-white yot-w-100" type="file" name="" id="">
                    </div>
                    <div class="yot-bg-white yot-flex yot-flex-fd-c yot-pa-16">
                        <label for="">Back I.D</label>
                        <input class="yot-form-input-primary-bg-white yot-w-100" type="file" name="" id="">
                    </div>
                    <div class="yot-text-center yot-mt-16">
                        <button class="yot-btn-primary"> Submit </button>
                    </div>
                </div>
            </div> <!-- End of Send Receive Container -->
        </section> <!-- End of Right Profile Personal Data Container-->

    </div> <!-- End of Main -->
</body> 
</html>

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

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Pusher -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher-with-encryption.min.js"></script>

    <!-- Pusher -->
    <script src="./app/js/pusher/pusher-balance.js"></script>
    <script src="./app/js/pusher/pusher-receipt.js"></script>
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
                    <!-- My Balance -->
                    <span id="balanceHere"></span>
                    <?php
                        // require_once("./app/php/balanceMF.php");
                        // $classBalance = new classBalance();
                        // echo $classBalance->getbalance();
                    ?>
                </div>

                <!-- Navigations -->
                <div class="yot-flex yot-flex-ai-c-jc-se">
                    <!-- Send -->
                    <a href="dashboard-send" class="yot-flex yot-flex-fd-c-ai-c yot-tc-yellow">
                        <i class="fa-solid fa-paper-plane fa-xl yot-mt-16"></i>
                        <span class="yot-mt-16">Send</span>
                    </a>

                    <!-- Request -->
                    <a href="dashboard-request" class="yot-flex yot-flex-fd-c-ai-c yot-tc-white yot-mlr-16">
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

        <!-- Start of Right Send Money Container-->
        <section class="yot-mlr-8 dashboard-right" style="align-self: flex-start;">
            <!-- Start of Send Money Container -->
            <div class="yot-bg-yellow yot-pa-24 yot-mb-8" style="border-radius: 20px;">
                <!-- Title and Search User -->
                <div>
                    <!-- Title -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <h2 >Send Money</h2>
                        <a id="dashboardSendCancel" href="dashboard-send" class="yot-btn-primary" style="display:none">Cancel</a>
                    </div>

                    <!-- Search User -->
                    <div>
                        <div class="yot-form-icon-parent">
                            <h4 style="position:absolute; left:20px; top:23px; border-right:3px solid black">EntnebID#</h4>
                            <input id="dashboardSendSearchUser" class="yot-form-input-tertiary-bg-yellow yot-text-fs-xl" style="padding-left: 125px;" type="text" name="" id="">
                        </div>
                    </div>
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

                <!-- Amount to Send -->
                <div id="amountToSend" style="display: none;">
                    <hr style="border: 1px solid black;">

                    <!-- Title  -->
                    <h3>Amount to Send</h3>
                    <span id="dashboardNoBalance" class="yot-tc-red"><b></b></span>

                    <!-- Amount To Send -->
                    <div>
                        <div class="yot-form-icon-parent">
                            <div class="yot-flex yot-flex-ai-c" style="position:absolute; left:20px;  top:22px;">
                                <h5 class="yot-text-fs-xxl"><i class="fa-solid fa-peso-sign 2xl"></i></h5>
                            </div>
                            <input class="yot-form-input-primary yot-text-fs-xl" type="text" id="inputMoney" style="padding-left: 40px !important;">
                        </div>
                    </div>

                    <!-- Submit Btn -->
                    <div class="yot-text-center">
                        <button style="display: none;" id="dashboardSendsubmit" class="yot-btn-primary">Submit</button>
                    </div>
                </div>
            </div> <!-- End of Send Money Container -->


            <!-- Start of Request Money container -->
            <div class="yot-bg-yellow yot-pa-24" style="border-radius: 20px;">
                <!-- Title -->
                <h3 class="requestMONEy yot-mb-16">Requesting Money</h3>
            </div>
        </section> <!-- End of Right Send Money Container-->
    </div> <!-- End of Main -->

    <!-- Start of Overlay Confirmation to send Money -->
    <div id="dashboardSendConfirmation" class="yot-overlay-mid" style="display: none;">
        <div class="yot-overlay-mid-dashboard-form yot-pa-24">
            <div class="yot-text-end yot-mb-16">
                <button id="dashboardSendChange" class="yot-btn-secondary">Change</button>
            </div>

            <!-- Container -->
            <div class="yot-row yot-flex-ai-c">
                <div class="yot-col-50" >
                    <div class="yot-mb-16">
                        <h1 class="yot-tc-yellow">From:</h1>
                        <div class="yot-text-fs-l">
                            <span class="yot-tc-yellow">EtnebID#</span>
                            <span>
                                <?php
                                    require_once("./app/php/dashboard-send-error-senderMF.php");
                                    $classSendMoneyErrorAndSender = new classSendMoneyErrorAndSender();
                                    $classSendMoneyErrorAndSender->getSender();
                                ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="yot-mb-16">
                        <h1 class="yot-tc-yellow yot-mb-8">To:</h1>
                        <div class="yot-text-fs-l">
                            <span class="yot-tc-yellow">EtnebID#</span>
                            <span id="dashboardSendReceiverID"></span>
                        </div>
                    </div>
                </div>
                <div class="yot-col-50 yot-bg-yellow yot-pa-16 yot-tc-black yot-text-center">
                    <h2>Amount</h2>
                    <div class="yot-flex yot-flex-ai-c-jc-c">
                        <i class="fa-solid fa-peso-sign yot-mr-4" style="font-size: 36px;"></i>
                        <h2 id="moneyToSend" class="moneyToSend yot-ml-4"></h2>
                    </div>
                </div>
            </div>
            <div class="yot-text-center yot-mt-16">
                <button id="dashboardSendConfirm" class="yot-btn-secondary"> Confirm </button>
            </div>
        </div>
    </div> <!-- Start of Overlay Confirmation to send Money -->

    <!-- Start of Overlay Receipt -->
    <div id="receipt" class="yot-overlay-mid" style="display: none;">
        <div class="yot-overlay-mid-dashboard-form yot-pa-24 yot-flex yot-flex-fd-c-ai-c">
            <div class="yot-text-center yot-mb-16">
                <h2 class="yot-tc-yellow">Successfully Sent</h2>
                <!-- Receiver ID -->
                <h3 id="receiverID"></h3>
            </div>


            <div class="yot-flex yot-flex-ai-c yot-text-center yot-mb-16">
                <!-- <h3 class="yot-tc-yellow">Amount</h3> -->
                <div class="yot-flex yot-flex-ai-c-jc-c">
                    <i class="fa-solid fa-peso-sign yot-mr-4" style="font-size: 30px;"></i>
                    <!-- Amount To Send -->
                    <h2 id="amountToSendHere" class="yot-ml-4"></h2>
                </div>
            </div>

            <div class="yot-flex yot-flex-ai-c yot-text-center yot-mb-18">
                <h5 class="yot-tc-yellow">Refence No.</h5>
                <div class="yot-flex yot-flex-ai-c-jc-c">
                    <h5 id="referenceID" class="yot-ml-4"></h5>
                </div>
            </div>

            <div class="yot-flex yot-flex-ai-c yot-text-center">
                <h5 class="yot-tc-yellow">Date | Time</h5>
                <div class="yot-flex yot-flex-ai-c-jc-c">
                    <!-- Time -->
                    <h5 id="timeToSend" class="yot-ml-4"></h5>
                    <!-- Date -->
                    <h5 id="dateToSend" class="yot-ml-4"></h5>
                </div>
            </div>

            <div class="yot-text-center yot-mt-16">
                <a href="dashboard-send" class="yot-btn-secondary">Close</a>
            </div>
        </div>
    </div>  <!-- End of Overlay Receipt -->

    <div id="div1"></div>
    <div id="div2"></div>

    <input id="uatID" type="hidden" value="<?php
            require_once("./app/php/helper/user-sessionHF.php");
            $classSessionUserID = new classSessionUserID();
            echo $classSessionUserID->getUatID();
        ?>">

    <!-- Ajax -->
    <script src="./app/js/ajax/dashboard-send-search-user.js"></script> 
    <script src="./app/js/ajax/dashboard-send-displayselectuser-erroramount.js"></script> 
    <script src="./app/js/ajax/dashboard-send-money-send-now.js"></script>
</body> 
</html>
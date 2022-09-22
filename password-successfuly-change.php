<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etneb</title>

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

<body>
    <!-- Start of Header -->
    <header class="yot-header yot-container">
        <!-- Start of Link Nav -->
        <nav class="yot-ptb-24 yot-flex yot-flex-ai-c-jc-sb">
            <!-- Start of Logo Text -->
            <a href="#"><h1 class="yot-tc-purple">ET<span class="yot-tc-yellow">NEB</span></h1></a>
            <!-- Start of Log In -->
            <button id="logInBtn" class="yot-btn-primary yot-btn-round">Log In</button>
        </nav> <!-- End of Link Nav -->
    </header> <!-- End of Header -->

    <!-- Start of Main -->
    <main class="yot-content-space-margin-t-48 yot-container yot-row yot-flex-ai-c">
        <section class="yot-col-50">
            <h1 class="yot-resize-font-64 yot-tc-purple">Et<span class="yot-tc-yellow">neb</span>  giving a fast money transaction.</h1>
            <p class="yot-mtb-16 yot-resize-font-18">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga laboriosam aliquid commodi ad voluptatibus accusantium id</p>
            <button id="signUpBtn" class="yot-btn-primary yot-btn-round">Sign Up</button>
        </section>
        <section class="yot-col-50">
            <img src="./app/images/Wallet-rafiki.svg" alt="Wallet-rafiki">
        </section>
    </main> <!-- End of Main -->

    <!-- Start of Overlay Parent Success Change Password -->
    <section id="successChangePassContainer" class="yot-overlay-mid">
        <!-- Start of  -->
        <div class="yot-overlay-mid-child yot-pa-24">
            <!-- Start of title  -->
            <h3 class="yot-text-center yot-mt-24">Password Successfully Changed.</h3>

            <!-- Sign Up Btn -->
            <div class="yot-text-center yot-mtb-16">
                <a href="http://localhost/etneb" class="yot-btn-secondary">Close</a>
            </div>
        </div>
    </section>  <!-- End of Overlay Parent Success Change Password -->
</body>
</html>
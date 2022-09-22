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

    <!-- Start of Overlay Parent Login-->
    <section id="logInContainer" class="yot-overlay-mid loginContainerJs" style="display: none;">
        <!-- Start of  -->
        <div class="yot-overlay-mid-child yot-pa-24">
            <!-- Close Form Btn Icon -->
            <div id="closeLogIn" class="yot-cursor-pointer" style="position: absolute; right: 16px; top: 24px;">
                <i class="fa-solid fa-circle-xmark fa-lg"></i>
            </div>

            <!-- Start of title  -->
            <h3 class="yot-text-center yot-mt-24">Log In</h3>

            <!-- Errors -->
            <div id="logInError" class="yot-text-center yot-mtb-16 yot-tc-red"></div>

            <!--  Start of Form -->
            <form id="logInForm">
                <!-- Email -->
                <div class="yot-flex yot-flex-ai-c">
                    <i class="fa-solid fa-envelope fa-2xl"></i>
                    <input class="yot-form-input yot-ml-8" type="email" id="loginEmail" placeholder="Email">
                </div>

                <!-- Password -->
                <div class="yot-flex yot-flex-ai-c yot-w-100">
                    <i class="fa-solid fa-key fa-2xl"></i>

                    <div class="yot-form-icon-parent yot-w-100" style="overflow: hidden;">
                        <i id="loginPasswordIcon" class="fa-solid fa-eye-slash yot-form-icon-child yot-cursor-pointer"></i>
                        <input class="yot-form-input yot-ml-8" type="password" id="loginPassword" placeholder="Password">
                    </div>
                </div>

                <!-- Login Up Btn -->
                <div class="yot-text-center yot-mtb-16">
                    <button type="submit" class="yot-btn-secondary">Log In</button>
                </div>
            </form> <!--  End of Form -->

            <!-- Forgot Password -->
            <div class="yot-text-center">
                <span id="forgotPassword" class="yot-tc-white yot-cursor-pointer">Forgot Password?</span>
            </div>
        </div>
    </section>  <!-- End of Overlay Parent Login-->

    <!-- Start of Overlay Parent Forgot Password-->
    <section id="forgotPasswordContainer" class="yot-overlay-mid" style="display: none;">
        <!-- Start of  -->
        <div class="yot-overlay-mid-child yot-pa-24">
            <!-- Close Form Btn Icon -->
            <div id="closeForgotPassword" class="yot-cursor-pointer" style="position: absolute; right: 16px; top: 24px;">
                <i class="fa-solid fa-circle-xmark fa-lg"></i>
            </div>

            <!-- Start of title  -->
            <h3 class="yot-text-center yot-mt-24">Forgot Password</h3>

            <!-- Errors -->
            <div id="forgotPasswordError" class="yot-text-center yot-mtb-16 yot-tc-red"></div>

            <!-- Errors -->
            <div id="forgotPasswordSuccessSend" class="yot-text-center yot-mtb-16 yot-tc-green"></div>

            <form id="forgotPasswordForm">
                <!-- Email -->
                <div class="yot-flex yot-flex-ai-c">
                    <i class="fa-solid fa-envelope fa-2xl"></i>
                    <input class="yot-form-input yot-ml-8" type="email" id="forgotPasswordEmail" placeholder="Email" required>
                </div>

                <!-- Loader -->
                <div id="forgotPasswordLoader" class="yot-flex yot-flex-ai-c-jc-c yot-mtb-16" style="display: none;">
                    <div class="yot-loader yot-mr-4"></div>
                    <span class="yot-ml-4">Loading...</span>
                </div>

                <!-- Sign Up Btn -->
                <div class="yot-text-center yot-mt-16">
                    <button id="forgotPasswordBtn" type="submit" class="yot-btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </section>  <!-- End of Overlay Parent Forgot Password -->

    <!-- Start of Overlay Parent Reset Password-->
    <section id="resetPasswordContainer" class="yot-overlay-mid" style="display: none;">
        <!-- Start of  -->
        <div class="yot-overlay-mid-child yot-pa-24">
            <!-- Close Form Btn Icon -->
            <div id="closeResetPassword" class="yot-cursor-pointer" style="position: absolute; right: 16px; top: 24px;">
                <i id="resetPasswordIcon" class="fa-solid fa-circle-xmark fa-lg"></i>
            </div>

            <!-- Start of title  -->
            <h3 class="yot-text-center yot-mt-24">Reset Password</h3>

            <!-- Password -->
            <div class="yot-flex yot-flex-ai-c">
                <i class="fa-solid fa-key fa-2xl"></i>
                <input class="yot-form-input yot-ml-8" type="text" name="" id="resetPasswordNewPassword" placeholder="New Password">
            </div>

            <!-- Password -->
            <div class="yot-flex yot-flex-ai-c">
                <i class="fa-solid fa-key fa-2xl"></i>
                <input class="yot-form-input yot-ml-8" type="text" name="" id="resetPasswordConfirmNewPassword" placeholder="Confirm New Password">
            </div>

            <!-- Submit Btn -->
            <div class="yot-text-center yot-mtb-16">
                <button class="yot-btn-secondary">Submit</button>
            </div>
        </div>
    </section>  <!-- End of Overlay Parent Reset Password -->

    <!-- Start of Overlay Parent Sign Up Creating Email Password-->
    <section id="signUpContainerCreate" class="yot-overlay-mid" style="display: none;">
        <!-- Start of  -->
        <div class="yot-overlay-mid-child yot-pa-24">
            <!-- Close Form Btn Icon -->
            <div id="closeSignUpFormCreate" class="yot-cursor-pointer" style="position: absolute; right: 16px; top: 24px;">
                <i class="fa-solid fa-circle-xmark fa-lg"></i>
            </div>

            <!-- Start of Progress Circle -->
            <div class="yot-flex yot-flex-ai-c yot-mtb-24">
                <div class="yot-flex yot-flex-fd-c-ai-c">
                    <div class="yot-progress-circle-active">
                        <i class="fa-solid fa-check fa-sm"></i>
                    </div>
                    <span class="yot-tc-yellow">Create</span>
                </div>

                <div class="yot-progress-line-active"></div>

                <div class="yot-flex yot-flex-fd-c-ai-c">
                    <div class="yot-progress-circle">
                        <!-- <i class="fa-solid fa-xmark fa-sm" style="color:black"></i> -->
                    </div>
                    <span>Verify</span>
                </div>

                <div class="yot-progress-line"></div>

                <div class="yot-flex yot-flex-fd-c-ai-c">
                    <div class="yot-progress-circle">
                        <!-- <i class="fa-solid fa-xmark fa-sm" style="color:black"></i> -->
                    </div>
                    <span>Success</span>
                </div>
            </div>

            <!-- Start of title  -->
            <h3 class="yot-text-center">Create Account</h3>

            <!-- Errors -->
            <div id="signUpError" class="yot-text-center yot-mtb-16 yot-tc-red"></div>

            <!-- Start of Form Container-->
            <form id="signUpregisterForm">
                <!-- Email -->
                <div class="yot-flex yot-flex-ai-c">
                    <i class="fa-solid fa-envelope fa-2xl"></i>
                    <input class="yot-form-input yot-ml-8" type="email"  id="signUpemail" placeholder="Email" required>
                </div>

                <!-- Password -->
                <div class="yot-flex yot-flex-ai-c yot-w-100">
                    <i class="fa-solid fa-key fa-2xl"></i>

                    <div class="yot-form-icon-parent yot-w-100" style="overflow: hidden;">
                        <i id="sigupPasswordIcon" class="fa-solid fa-eye-slash yot-form-icon-child yot-cursor-pointer"></i>
                        <input class="yot-form-input yot-ml-8" type="password"  id="signUpPassword" placeholder="Password" required>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="yot-flex yot-flex-ai-c yot-w-100">
                    <i class="fa-solid fa-key fa-2xl"></i>

                    <div class="yot-form-icon-parent yot-w-100" style="overflow: hidden;">
                        <i id="sigupConfirmPasswordIcon"  class="fa-solid fa-eye-slash yot-form-icon-child yot-cursor-pointer"></i>
                        <input class="yot-form-input yot-ml-8" type="password" id="signupConfirmPassword" placeholder="Confirm Password" required>
                    </div>
                </div>
                
                <!-- Loader -->
                <div id="signUploader" class="yot-flex yot-flex-ai-c-jc-c yot-mtb-16" style="display: none;">
                    <div class="yot-loader yot-mr-4"></div>
                    <span class="yot-ml-4">Loading...</span>
                </div>

                <!-- Sign Up Btn -->
                <div class="yot-text-center yot-mtb-16">
                    <button id="signUpSubmit" class="yot-btn-secondary" type="submit">Sign Up</button>
                </div>
            </form> <!-- End of Form Container-->
        </div>
    </section> <!-- End of Overlay Parent Sign Up Creating Email Password-->

    <script src="./app/js/function-html/signup.js"></script>
    <script src="./app/js/function-html/login.js"></script>
    <script src="./app/js/function-html/forgot-password.js"></script>
    <script src="./app/js/function-html/reset-password.js"></script>
    <script src="./app/js/function-html/password-hide-show.js"></script>

    <!-- Ajax -->
    <script src="./app/js/ajax/signup-email-password.js"></script>
    <script src="./app/js/ajax/login-email-password.js"></script>
    <script src="./app/js/ajax/forgot-password-email.js"></script>

</body>
</html>
# signupF.php
    















# signupF.php
    COMBO FILE
    1. signup.php
    2. signupF.php

    // Function inside of signupF.php
    1.1 signupF.php
        * errorsSignUpF
            - This function display all of the error
        * saveSignUpF 
            - This function save the input of user on database

    # Other PAGE Insert on signupF.php 
    2.1 connectionOF.php 
        - Connection From Database
    2.2 six-digit-codeOF.php 
        - Six digit random number for verification code
    2.3 date-timeOF.php
        - Philippines Date and Time
    2.4 signup-send-email-verification-codeOF.php
        - Using PHP Mailer to send verification code to user email

# verification-emailF.php
    COMBO FILE
    1. verification-email.php
    2. verification-emailF.php

    // Function inside of signup-verification-emailF.php
    1.1 verification-emailF.php
        * errorCodeAndValidationCodeF
            - This function will generate an error and validate the code input of the user
        * resendCodeF
            - This function will going to send a new verification code to the user
    
    # Other PAGE Insert on signup-verification-emailF.php
    2.1 connectionOF.php
        - Connection From Database
    2.2 date-timeOF.php
        - Philippines Date and Time
    2.3 six-digit-codeOF.php
        - Six digit random number for verification code
    2.4 verification-resend-codeOF.php
        - Using PHP Mailer to send new verification code to user email

# indexF.php
    COMBO FILE
    1. index.php
    2. indexF.php

    // Function inside of indexF.php
    1.1 indexF.php
        * verifyPasswordOn
            - This function will generate an error if the user put an incorrect email and password
            - This function also will going to profile-my-details.php if new user and also the user did not fill up the form

    #  Other PAGE insert on indexF.php
    2.1 connectionOF.php
        - Connection From Database

# forgot-passwordF.php
    COMBO FILE
    1. forgot-password.php
    2. forgot-passwordF.php

    // Function inside of forgot-passwordF.php
    1.1 forgot-passwordF.php
        * sendVerificationLinktoUpdatepassword
            - This function is to check if the email exist if doesnt exist then generate an error
            - This function will going to update the verification key link on user_update_password

    #  Other PAGE insert on forgot-passwordF.php
    2.1 connectionOF.php
        - Connection From Database
    2.2 forgot-password-verification-linkOF.php
        - Generate verification Link
    2.3 forgot-password-send-verificationOF.php
        - Using PHP Mailer to send new verification link to user email

# update-passwordF.php
    COMBO FILE
    1. update-password.php
    2. update-passwordF.php

    // Function inside of update-passwordF.php
    1.1 update-passwordF.php
        * errorMessageAndUpdatePassword 
        - This function is to check the query on the website. If not match on the database it will generate an error
        - This function will going to generate an error
    
    #  Other PAGE insert on forgot-passwordF.php
    2.1 connectionOF.php
    - Connection From Database
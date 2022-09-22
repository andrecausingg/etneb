$(document).ready(function(){
    // Log In
    // Show Login Container Overlay
    $("#logInBtn").click(function(){
        $("#logInContainer").show();
    })

    // Hide Login  Overlay
    $("#closeLogIn").click(function(){
        $("#logInContainer").hide();
    })
});
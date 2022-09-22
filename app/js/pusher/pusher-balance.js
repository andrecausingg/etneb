$(document).ready(function(){
    // // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    // / INSERTED CODE
    var pusher = new Pusher('65d4d2555511a29e952f', {
        cluster: 'ap1',
    });

    // ID OF USER
    var uatID = document.getElementById("uatID").value;

    var channel = pusher.subscribe('etneb');
    channel.bind('balance-event' + uatID, function(dataBalance){
        var balance = dataBalance['message1']['balance'];
        // Display the Value
        $("#balanceHere").html(balance);
        $("#div1").load("http://localhost/etneb/app/php/balanceMF.php");
    });


    // var pusher = new Pusher('65d4d2555511a29e952f', {
    //     cluster: 'ap1',
    //     userAuthentication:{ 
    //       endpoint: "./app/php/pusher_auth.php"
    //     }
    // });

    // // ID OF USER
    // var uatID = document.getElementById("uatID").value;

    // var channel = pusher.subscribe('etneb');
    // channel.bind('balance-event' + uatID, function(dataBalance){
    //   var balance = dataBalance['message1']['balance'];
    //   // Display the Value
    //   $("#balanceHere").html(balance);
    // });
});
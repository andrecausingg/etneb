$(document).ready(function(){
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('65d4d2555511a29e952f',{
      cluster: 'ap1'
    });

    // ID OF USER
    var uatID = $("#uatID").val();

    var channel = pusher.subscribe('etneb');
        channel.bind("receipt-event" + uatID, function(data){
        var receiverID = data['message']['receiverIDD'];
        var referenceID = data['message']['referenceID'];
        var amountToSend = data['message']['amountToSend'];
        var timeToSend = data['message']['timeToSend'];
        var dateToSend = data['message']['dateToSend'];

        // Display the Value
        $("#receiverID").text(receiverID);
        $("#amountToSendHere").text(amountToSend);
        $("#referenceID").text(referenceID);
        $("#timeToSend").text(timeToSend);
        $("#dateToSend").text(dateToSend);
    });
});

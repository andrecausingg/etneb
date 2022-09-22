$(document).ready(function(){
    // Display Balance 
    $("#div1").load("http://localhost/etneb/app/php/balanceMF.php");

    $("#dashboardSendConfirm").click(function(){
        var amountToSendConvert = $("#inputMoney").val(); 
        var amountToSend = Number(amountToSendConvert).toFixed(2);
        var dashboardSendReceiverID = $('.userID').attr('data-id');

        $.ajax({
            url: 'http://localhost/etneb/app/php/dashboard-send-money-send-nowMF.php', 
            method:"POST",
            data:{
                amountToSend:amountToSend,
                dashboardSendReceiverID:dashboardSendReceiverID,
            },

            success:function(data){
                if(data == "Success"){
                    $("#receipt").show();
                    $("#dashboardSendConfirmation").hide();
                    $("#div2").load("http://localhost/etneb/app/php/dashboard-send-receiptMF.php");
                    $("#div1").load("http://localhost/etneb/app/php/balanceMF.php");
                }
            }
        });
    });
});
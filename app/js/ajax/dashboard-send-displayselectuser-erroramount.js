$(document).ready(function(){
    /*
        Display Error
        Display the button if the input have value 
        Display also the Overlay Confirmation
        Display in overlay the amount input of user
    */
    $("#inputMoney").bind("change paste keyup", function() {
        var amountToSendConvert = $(this).val(); 
        var amountToSend = Number(amountToSendConvert).toFixed(2);

        $("#moneyToSend").text(amountToSend);

        if(amountToSend != ""){
            $("#dashboardSendsubmit").show();
            $("#dashboardSendsubmit").click(function(){
                $("#dashboardSendConfirmation").show();
            });
        }else{
            $("#dashboardSendsubmit").hide();
        }

        $.ajax({
            url: 'http://localhost/etneb/app/php/dashboard-send-error-senderMF.php', 
            method:"POST",
            data:{amountToSend:amountToSend},

            success:function(data){
                $('#dashboardNoBalance').html(data);
                if(data == "You don't have enough balance" || data == "Input some Amount"){
                    $("#dashboardSendsubmit").hide();
                }
            }
        });
    });

    // Change amount to send or user to send
    $("#dashboardSendChange").click(function(){
        $("#dashboardSendConfirmation").hide();
    });

    // Not allowing characters only dicimal 
    $("#inputMoney").keypress(function(event) {
        var charCode = (event.which) ? event.which : event.keyCode;

        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
        }
            return true;
    });

    var newID;
    var tempID;

    /*
        Select a specific user and put css
        Show the input amountToSend if sender select a receiver. Hide if not
    */
    $(document).on('click',"#resultSearch .userID",function(){
        var receiverID = $(this).attr('data-id');

        $("#dashboardSendReceiverID").text(receiverID);
        
        newID = receiverID;
        if(tempID == receiverID){
            $('.userID').filter("[data-id=" + newID +"]").addClass('yot-btn-active').text("Selected").attr("disable",true);
        }else if(newID == receiverID){
            $('.userID').filter("[data-id=" + newID +"]").addClass('yot-btn-active').text("Selected");
            $('.userID').filter("[data-id=" + tempID +"]").removeClass('yot-btn-active').text("Select");
            tempID = newID;
        }
        
        if(receiverID != ""){
            $("#amountToSend").show();
        }else{
            $("#amountToSend").hide();
        }
    });
});

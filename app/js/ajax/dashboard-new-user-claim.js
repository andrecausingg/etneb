$(document).ready(function () {
    $('#claimBtn').click(function(){
        var claim = 1;

        $.ajax({
            url: 'http://localhost/etneb/app/php/dashboard-new-user-claimMF.php', 
            type: 'POST', 
            data: { 
                claim: claim,
            },
            success: function (data){
                if(data == 'success'){
                    location.href= "http://localhost/etneb/dashboard-send";
                }
            }
        })
    });
});

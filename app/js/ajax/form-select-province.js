$(document).ready(function (){
    $('#region').change(function(){
        var region = $(this).val();

        $.ajax({
            url:"http://localhost/etneb/app/php/helper/location-phHF.php",
            method:"POST",
            data:{
                region:region
            },
            
            success:function(data){
                $("#province").html(data);
            }
        });
    });
});

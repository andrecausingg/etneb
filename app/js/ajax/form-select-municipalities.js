$(document).ready(function (){
    $('#province').change(function(){
        var province = $(this).val();

        $.ajax({
            url:"http://localhost/etneb/app/php/helper/location-municipalities-phHF.php",
            method:"POST",
            data:{
                province:province
            },
            
            success:function(data){
                $("#municipality").html(data);
            }
        });
    });
});

$(document).ready(function () {
    $('#dashboardNewUserForm').submit(function(e){
        e.preventDefault();

        // Get the value and put in Variable
        var firstName = $("#firstName").val();
        var middleName = $("#middleName").val();
        var lastName = $("#lastName").val();
        var birthDate = $("#birthDate").val();
        var gender = $("#gender option:selected").val();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
        var baranggay = $("#baranggay").val();
        var region = $("#region option:selected").val();
        var province = $("#province option:selected").val();
        var municipality = $("#municipality option:selected").val();
        var postal = $("#postal").val();
        var country = $("#country").val();
        var etnebID = $("#etnebID").val();
        // var frontID = $("#frontID").val().replace(/.*(\/|\\)/, '');
        // var backID = $("#backID").val().replace(/.*(\/|\\)/, '');

        $.ajax({
            url: 'http://localhost/etneb/app/php/dashboard-new-userMF.php', // Backend Script on dashboard-new-userMF.php
            type: 'POST', // Type POST 
            data: { 
                    firstName: firstName, // use $_POST["firstName"] on Backend to get the data of firstName
                    middleName: middleName, // use $_POST["middleName"] on Backend to get the data of middleName
                    lastName: lastName, // use $_POST["lastName"] on Backend to get the data of lastName
                    birthDate: birthDate, // use $_POST["birthDate"] on Backend to get the data of birthDate
                    gender: gender, // use $_POST["gender"] on Backend to get the data of gender
                    address1: address1, // use $_POST["address1"] on Backend to get the data of address1
                    address2: address2, // use $_POST["address2"] on Backend to get the data of address2
                    baranggay: baranggay, // use $_POST["baranggay"] on Backend to get the data of password
                    region: region, // use $_POST["region"] on Backend to get the data of confirmPassword
                    province: province, // use $_POST["province"] on Backend to get the data of address1
                    municipality: municipality, // use $_POST["municipality"] on Backend to get the data of municipality
                    postal: postal, // use $_POST["postal"] on Backend to get the data of postal
                    country: country, // use $_POST["country"] on Backend to get the data of country
                    etnebID:etnebID,
                    // frontID: frontID, // use $_POST["frontID"] on Backend to get the data of frontID
                    // backID: backID, // use $_POST["frontID"] on Backend to get the data of frontID
            },
            
            // Displaying the return message on Backend Script on dashboard-new-userMF.php
            success: function (data){
                if(data == 'success'){
                    $("#welcomeGift").show();
                    $("#newUserpersonalInformationContainer").hide();
                }else{
                    $("#errorEtnebID").html(data);
                }
            }
        })
    });
    return false;
});

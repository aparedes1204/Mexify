/*
Erabiltzailea erregistratzeko Ajax eskaera egiten duen script-a
*/
$(document).on("click", "#submit",function() {        

    var data = {}
    data['email'] = $("#email").val()
    data['password'] = $("#password").val()
    data['name'] = $("#name").val()

    $.ajax({
        url: '../php/SignUpValidation.php',
        type: 'POST',
        data: data,
        dataType: 'text',
        success: function(data) {
            if(data.search("Zuzen erregistratuta") < 0){
                $("#signupalert").html(data)
            } else {
                alert("Zuzen erregistratuta")
                window.location.href = "../php/" 
            }
            
        }, 
        error: function(data){
            alert("Ezin izan da zerbitzariarekin konektatu")
        },
        cache: false
    });
})
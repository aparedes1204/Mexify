/*
Kautotzeko Ajax erabiltzen duen script-a. Zuzen kautotuz gero alert-a erakutsi ostean hasierako orrira bidaltzen zaitu.
*/
$(document).on("click", "#submit",function() {        

    var data = {}
    data['email'] = $("#email").val()
    data['password'] = $("#password").val()

    $.ajax({
        url: '../php/LogInValidation.php',
        type: 'POST',
        data: data,
        dataType: 'text',
        success: function(data) {
            if(data.search("Zuzen kautotuta") < 0){
                $("#loginalert").html(data)
            } else {
                alert("Zuzen kautotuta")
                window.location.href = "../php/" 
            }
            
        }, 
        error: function(data){
            alert("Ezin izan da zerbitzariarekin konektatu")
        },
        cache: false
    });
})
/*
Ajax teknika erabilita iruzkina gehitu eta momentuan, orria birkargatu gabe erakusten duen funtzioa
*/
function sendReview(id){
    if ($("#review").val().trim() == ""){
        alert("Sartu iruzkin bat.")
        return
    }
    var data = {}
    data['review'] = $("#review").val()
    data['id'] = id
    $.ajax({
        url: '../php/SongComments.php',
        type: 'POST',
        data: data,
        dataType: 'html',
        success: function(data) {
        $("#content").html(data)
        }, 
        error: function(data){
            alert("Ezin izan da zerbitzariarekin konektatu")
        },
        cache: false
    })
}
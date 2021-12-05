$(document).on("click", "#showComments",function() {        
    
    var form = new FormData(document.forms["galderenF"])
    var data = {}
    data['id'] = $(this).attr('name')

    $.ajax({
        url: '../php/SongComments.php',
        data: data,
        type: 'POST',
        success: function(data) {
            $("#content").html(data)
        }, 
        error: function(data){
            alert("Ezin izan da zerbitzariarekin konektatu")
        },
        cache: false
    });
    //window.history.pushState({"pageTitle":"patata"},"", `${window.location.href}?id=${data['id']}`);
})
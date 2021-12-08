$(document).on("click", "#showComments",function() {        
    
    var postdata = {}
    postdata['id'] = $(this).attr('name')

    $.ajax({
        url: '../php/SongComments.php',
        data: postdata,
        type: 'POST',
        success: function(data) {
            var id = postdata['id']
            history.pushState({}, "", window.location.href);
            $("#content").html(data)
        }, 
        error: function(data){
            alert("Ezin izan da zerbitzariarekin konektatu")
        },
        cache: false
    });
})
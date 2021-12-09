function playSong(id){
    var songobj = {}
    $.ajax({
        url: '../xml/songs.xml', 
        type: 'GET',
        success: function(data) {
            var songs = $(data).find('song');
            for (var i = 0; i < songs.length; i++) {
                if (id == songs[i].getAttribute('id')) {
                    songobj["name"] = songs[i].childNodes[5].childNodes[0].nodeValue
                    songobj["artist"] = songs[i].childNodes[9].childNodes[0].nodeValue
                    songobj["url"] = songs[i].childNodes[3].childNodes[0].nodeValue
                    songobj["cover_art_url"] = songs[i].childNodes[1].childNodes[0].nodeValue
                    break
                }
            }
            //$("#player").css("height", "154px")
            $('#player').addClass("show");
            Amplitude.playNow(songobj);
        }, 
        error: function(data){
            alert("Ezin izan da abestia erreproduzitu, saiatu berriro")
            return false
        },
        cache: false
    });
}
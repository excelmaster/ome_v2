$("#content").mouseover(function () { 
    var played = localStorage.getItem("podcastPlayed") == "0"
    var activity = window.location.href.indexOf("content") > 0    

    if(played && activity){                
        localStorage.setItem("podcastPlayed",1)
        $("#AudioToolTip").get(0).play()    
    }    
});
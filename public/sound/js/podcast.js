$("#content").mouseover(function () { 
    var played = localStorage.getItem("podcastPlayed") == "0"
    var activity = window.location.href.indexOf("content") > 0    

    if(played && activity){                
        localStorage.setItem("podcastPlayed",1)
        $("#AudioToolTip").get(0).play()  
        if ($("#modalIframe").attr('src')==''){
            $("#modalIframe").attr('src', 'https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' + localStorage.getItem('objectId'));
        }          
        $("#modalContent").modal("show")
    }    
});

$(".iframeWrapper").click(function (e) { 
    e.preventDefault();
    if ($("#modalIframe").attr('src')==''){
        $("#modalIframe").attr('src', 'https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' + localStorage.getItem('objectId'))
     }          
    $("#modalContent").modal("show")
});

$('[class*="closeActivity"]').click(function (e) { 
    e.preventDefault(); 
    if(localStorage.getItem('tipo')=='hvp'){
        $("#modalIframe").attr('src', '')
    }      
});
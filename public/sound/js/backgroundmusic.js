function openNav() {
    document.getElementById("mySidepanel").style.width = "330px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0px";
}

var myAudio = document.getElementById("myAudio");
var icono = document.getElementById("soundImg");

$("#soundImg").on('click', function(){    
    let ck = document.cookie;    

    if (localStorage.getItem("muted")=='off') {
        localStorage.setItem("muted", "on");        
        icono.setAttribute("src",localStorage.getItem('bgMusicLogoOn'));
        myAudio.volume = .1;
        myAudio.loop = false;        
    } else {
         myAudio.play();
        localStorage.setItem("muted", "off");         
        icono.setAttribute("src", localStorage.getItem('bgMusicLogoOff'));        
        myAudio.pause();
    }
})

//
        //var element = document.querySelector("body");
        //element.requestFullscreen();
        //document.getElementById("soundDivision").clic
        /*var btnFullScreen = document.getElementById("btnFullScreen");
        btnFullScreen.addEventListener("click", () => {
            if(document.fullscreenElement) {
                document.exitFullscreen();                
            } else {
                document.documentElement.requestFullscreen();                
            }
        });

        var links = document.querySelectorAll("a");
        for(const link of links) {
            links.addEventListener(click,() => {
                if (document.exitFullscreen) {
                    document.documentElement.requestFullscreen();
                }
            });
        }*/
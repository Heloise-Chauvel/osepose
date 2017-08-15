
//play video

/*var $btn = $(".play");
var $video = $(".gauche");

$btn.on('click', function () {

    $video.get(0).play();

    
});*/
var startTime = 0
var start = new Date("23:59:59")
var end = 0
var diff = 0
var timerID = 0

window.onload = chronoStart;
function chrono(){
    end = new Date()
    diff = start - end
    diff = new Date(diff)
    var sec = diff.getSeconds()
    var min = diff.getMinutes()
    var hr = diff.getHours()
    console.log(hr)
    if (hr < 10){
        hr = "0" + hr
    }
    if (min < 10){
        min = "0" + min
    }
    if (sec < 10){
        sec = "0" + sec
    }

    document.getElementById("chronotime").value = hr + ":" + min + ":" + sec
    timerID = setTimeout("chrono()", 10)
}
function chronoStart(){
    start = new Date()
    chrono()
}




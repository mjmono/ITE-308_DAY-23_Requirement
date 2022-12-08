


function changesong(n, stitle) {
    var nowplay = document.getElementById("now-playing");
    var audio = document.getElementById("audioS");
    document.getElementById('mustit').innerHTML = stitle;
    nowplay.src = n;
    audio.load();
    audio.play();
}
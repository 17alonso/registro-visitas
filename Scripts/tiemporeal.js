function tiemporeal() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>am</span>" : "<span>pm</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("hora_visitante").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
}
setInterval(tiemporeal, 1000);

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

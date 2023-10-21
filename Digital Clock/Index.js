var hrs;
var min;
var sec;
var session;
var date;

function Display_Time() {
    date = new Date();
    hrs = date.getHours();
    min = date.getMinutes();
    sec = date.getSeconds();
    session = document.getElementById('zone');

    if (hrs >= 12) {
        session.innerHTML = "PM";
    }
    else {
        session.innerHTML = "AM";
    }
    if (hrs >= 12) {
        hrs = hrs - 12;
    }
    document.getElementById('hours').innerHTML = hrs;
    document.getElementById('miniutes').innerHTML = min;
    document.getElementById('seconds').innerHTML = sec;
}
setInterval(Display_Time, 10)
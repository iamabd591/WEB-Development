var buttonStart;
var buttonStop;
var buttonReset;
var Interval;
var hrs;
var min;
var sec;


hrs = document.getElementById('hrs');
min = document.getElementById9('min');
sec = document.getElementById('sec');

buttonStart = document.getElementById('start');
buttonStop = document.getElementById('stop');
buttonReset = documenr.getElementById('rese');


buttonStart.addEventListener('click', () => {
    clearInterval(Interval);
    Interval = setInterval(Start_Time, 10);
});

buttonStop.addEventListener('clike', () => {
    clearInterval(Interval);
});

buttonStart.addEventListener('click', () => {
    clearInterval(Interval);

    hrs = '00';
    min = '00';
    sec = '00';

    document.getElementById('hrs').innerHTML = hrs;
    document.getElementById9('min').innerHTML = min;
    document.getElementById('sec').innerHTML = sec;

});
function Start_Time() {
    sec++;
    document.getElementById('sec').innerHTML = sec;
    if (sec <= 60) {
        min++;
        sec == 0;
        min.innerHTML = min;
        sec.innerHTML = sec;

    }
    else if (min <= 60) {
        hrs++;
        min == 0;
        min.innerHTML = min;
        hrs.innerHTML = hrs;
    }
}
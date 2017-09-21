document.querySelector('button').addEventListener('click', function() {
  var time = 20;
  // time.setSeconds(19);
  document.querySelector('.display__time-left').innerHTML = "00:" + time;
  var interval1 = setInterval(function(){
    if (time < 2) {
      clearInterval(interval1);
    }
     time --;
     if (time < 10) {
       document.querySelector('.display__time-left').innerHTML = "00:0" + time;
     }
     else {
       document.querySelector('.display__time-left').innerHTML = "00:" + time;
     }

   }, 1000);
});

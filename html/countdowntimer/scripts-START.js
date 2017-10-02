function addEventListenerList(list, event, fn) {
  for (var i = 0, len = list.length; i < len; i++) {
    list[i].addEventListener(event, fn);
  }
}
var buttons = document.querySelectorAll('button');
addEventListenerList(buttons, 'click', timer);
var interval1 = '';

function timer() {
  clearInterval(interval1);
  var time = parseInt(this.getAttribute('data-time'));
  var seconds = Math.floor(time%60);
  var minutes = Math.floor((time/60)%60);
  var hours  = Math.floor(time/3600);
  var display = document.querySelector('.display__time-left').innerHTML;
  console.log(seconds+":seconds");
  console.log(minutes+":minutes");
  console.log(hours+":hours");

  interval1 = setInterval(function() {
      if (time < 2) {
        clearInterval(interval1);
      }
      time--;
  }, 1000);
};

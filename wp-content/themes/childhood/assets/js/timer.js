function getTimeRemaining(endtime) {
    let t = Date.parse(endtime) - Date.parse(new Date());
    let seconds = Math.floor((t / 1000) % 60);
    let minutes = Math.floor((t / 1000 / 60) % 60);
    let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }
   
  function initializeClock(id, endtime) {
    let clock = document.getElementById(id);
    let daysSpan = clock.querySelector('.days');
    let hoursSpan = clock.querySelector('.hours');
    let minutesSpan = clock.querySelector('.minutes');
    let secondsSpan = clock.querySelector('.seconds');
   
    function updateClock() {
      let t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);
        let deadline = new Date(Date.parse(endtime) + 2 * 24 * 60 * 60 * 1000);
        initializeClock('countdown', deadline);
      }
   
      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
   
      
    }
   
    updateClock();
    let timeinterval = setInterval(updateClock, 1000);
    
  }

  // function () {
  //   if ($('#deadline').length){
  //     function initialize() {
  //       let ine = eval($("#deadline").attr('data-place'));
  //     }
  //   }
    
  // }
  //  Формат вывода даты ISO 8601:
  // let ine = deadline;
  let deadline = eval($("#deadline").attr('data-place'));
// Сокращенный формат:

// let deadline = '31/12/2015';
// Длинный формат:

// let deadline = 'December 31 2015';
// Вывод даты с точным временем и часовым поясом:

  // let deadline="July 05 2020 00:00:00 GMT+0300";

  // let deadline = new Date(Date.parse(new Date()) + 05 * 14 * 45 * 46 * 1000); // for endless timer
  initializeClock('countdown', deadline);

  



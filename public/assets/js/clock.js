function myTimer() {
  // creates a new date object with the current date and time
  let today = new Date();
  
  // returns the weekday of a date as a number (0-6)
  let day = today.getDay();
  
  // arrays with the list of weekdays
  let daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
  
  // returns the hours of a date as a number (0-23):
  let hour = today.getHours();
  
  // returns the minutes of a date as a number (0-59):
  let minute = today.getMinutes();
  
  // returns the seconds of a date as a number (0-59):
  let second = today.getSeconds();
  
  // declare an empty variable
  let meridiem;
  
  // define, when it should be "PM" and when "AM"
  if (hour >= 12) {
    meridiem = "PM";
  } else {
    meridiem = "AM";
  };
  
  // Correction of formatting
  if (hour >= 13) {
    hour = hour - 12
  };
  if (minute < 10) {
    minute = "0" + minute;
  };
  if (second < 10) {
    second = "0" + second;
  };
  
  let timer = hour + ":" + minute + ":" + second
  document.getElementById('demo').innerHTML = timer;
}

setInterval(myTimer, 1000);

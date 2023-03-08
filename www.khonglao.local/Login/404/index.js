function updateDate() {
    var currentDate = new Date();
    var dateString = currentDate.toDateString();
    var timeString = currentDate.toLocaleTimeString();
    document.getElementById("current-date").innerHTML = dateString + " " + timeString;
  }
  
  setInterval(updateDate, 1000);
  
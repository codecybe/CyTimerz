
function startcountup() {

// Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    var countDownDate = timestampendate * 1000;
    var now = timestampnow * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = now - countDownDate;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       var element = document.getElementById("twos");
       element.className = element.className.replace(/\bmycountupstyle\b/g, "");
        // Output the result in an element with id="demo"
        document.getElementById("twos").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("twos").innerHTML = "EXPIRED";
        }




var rc = setTimeout(function() {
   var element, name, arr;
  element = document.getElementById("twos");
  name = "mycountupstyle";
  arr = element.className.split(" ");
  if (arr.indexOf(name) == -1) {
      element.className += " " + name;
  }
      element.classList.toggle('fadeIn');  
    }, 99);

    }, 1000);


}



function startcountdown() {

// Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    var countDownDate = timestampendate * 1000;
    var now = timestampnow * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       var element = document.getElementById("two");
       element.className = element.className.replace(/\bmycountdnstyle\b/g, "");
        // Output the result in an element with id="demo"
        document.getElementById("two").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("two").innerHTML = "EXPIRED";
        }




var rd = setTimeout(function() {
   var element, name, arr;
  element = document.getElementById("two");
  name = "mycountdnstyle";
  arr = element.className.split(" ");
  if (arr.indexOf(name) == -1) {
      element.className += " " + name;
  }
      element.classList.toggle('fadeIn');  
    }, 99);

    }, 1000);


}


function startcybercount(){
   // Set the date we're counting up from
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    var countupDate = timestampendateforup * 1000;
    var nowup = timestampnow * 1000;

    // Update the count down every 1 second
    var xc = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        nowup = nowup + 1000;

        // Find the distance between now an the count down date
        var distance = nowup - countupDate;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       var element = document.getElementById("twos");
       element.className = element.className.replace(/\bmycountupstyle\b/g, "");
        // Output the result in an element with id="demo"
        document.getElementById("twos").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (timestampnow <= timestampendateforup) {
            clearInterval(xc);
            document.getElementById("twos").innerHTML = "EXPIRED";
        }




var rc = setTimeout(function() {
   var element, name, arr;
  element = document.getElementById("twos");
  name = "mycountupstyle";
  arr = element.className.split(" ");
  if (arr.indexOf(name) == -1) {
      element.className += " " + name;
  }
      element.classList.toggle('fadeIn');  
    }, 99);

    }, 1000);


// Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    var countDownDate = timestampendatefordown * 1000;
    var now = timestampnow * 1000;

    // Update the count down every 1 second
    var xd = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       var element = document.getElementById("two");
       element.className = element.className.replace(/\bmycountdnstyle\b/g, "");
        // Output the result in an element with id="demo"
        document.getElementById("two").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(xd);
            document.getElementById("two").innerHTML = "EXPIRED";
        }




var rd = setTimeout(function() {
   var element, name, arr;
  element = document.getElementById("two");
  name = "mycountdnstyle";
  arr = element.className.split(" ");
  if (arr.indexOf(name) == -1) {
      element.className += " " + name;
  }
      element.classList.toggle('fadeIn');  
    }, 99);

    }, 1000);


}
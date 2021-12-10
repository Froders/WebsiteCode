/*
The code below is based off the w3schools code to make a countdown.
This countdown will then be pasted into a element with the id of "timer"
*/

//Set the date we're counting down to 
var countDownDate = new Date("2021-12-15 19:15").getTime();

//Update the countdown every 1 second 
var x = setInterval(function() {

    //Get today's date and time
    var now = new Date().getTime();

    //Find the distance between now and the countdown date
    var distance = countDownDate - now;

    //Time Calculations for days, hours, minutes and seconds
    var days = Math.floor(distance/(1000*60*60*24));
    var hours = Math.floor((distance % (1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((distance % (1000*60*60))/(1000*60));
    var seconds = Math.floor((distance % (1000*60))/1000);

    //Display the results in the element with id="timer"
    document.getElementById("x").innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds ";

    //If the countdown is finished, write some text
    if (distance < 0){
        clearInterval(x);
        document.getElementById("x").innerHTML = "EXPIRED";

    }

}, 1000);

//Set the date we're counting down to 
var xmas = new Date("2021-12-24 17:00").getTime();

//Update the countdown every 1 second 
var x = setInterval(function() {

    //Get today's date and time
    var now2 = new Date().getTime();

    //Find the distance between now and the countdown date
    var distance = xmas - now2;

    //Time Calculations for days, hours, minutes and seconds
    var days = Math.floor(distance/(1000*60*60*24));
    var hours = Math.floor((distance % (1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((distance % (1000*60*60))/(1000*60));
    var seconds = Math.floor((distance % (1000*60))/1000);

    //Display the results in the element with id="timer"
    document.getElementById("xmas").innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds ";

    //If the countdown is finished, write some text
    if (distance < 0){
        clearInterval(x);
        document.getElementById("xmas").innerHTML = "EXPIRED";

    }

}, 1000);

//Set the date we're counting down to 
var newyear = new Date("2022-01-01 00:00").getTime();

//Update the countdown every 1 second 
var x = setInterval(function() {

    //Get today's date and time
    var now2 = new Date().getTime();

    //Find the distance between now and the countdown date
    var distance = newyear - now2;

    //Time Calculations for days, hours, minutes and seconds
    var days = Math.floor(distance/(1000*60*60*24));
    var hours = Math.floor((distance % (1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((distance % (1000*60*60))/(1000*60));
    var seconds = Math.floor((distance % (1000*60))/1000);

    //Display the results in the element with id="timer"
    document.getElementById("New").innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds ";

    //If the countdown is finished, write some text
    if (distance < 0){
        clearInterval(x);
        document.getElementById("New").innerHTML = "EXPIRED";

    }

}, 1000);





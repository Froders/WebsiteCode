var i=0;
var txt1 = 'the text'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter(){
    if(i<txt1.length){
        document.getElementById("demo").innerHTML += txt1.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}
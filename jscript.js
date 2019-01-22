/*alert(" hello i am alert");
var x=2;
console.log(x);
var  my_Fristvar;
my_Fristvar=100;
console.log(my_Fristvar);
//document.write(my_Fristvar);
var numberOfKitten=9;
var numberOfDogs=2;
document.write(numberOfKitten % numberOfDogs);
var alphabet = "abkkjdhkasjfalkkld";
var firstName;
var fullName= firstName + " " + " Abbasi";
console.log(fullName);
var name =prompt("Whats your name");
console.log("hello"+ name);
var y= 2 + 'cats';
console.log(typeof y);

var numberOfChildren=3;
var fatherName="Jamal";
var motherName="kulsoom";
var cityName="Calgary";
var jobTitle="programmer";

console.log("Your will be a" + jobTitle + "in " + cityName +  "and married to"+ motherName +  " ");

function parrotFacts() 
{
console.log('Some parrot species can live for over 80 years.');
console.log('Kakapos are a critically endangered flightless parrot.');
}

parrotFacts();

function inputFullName(fName,lname)
{
var myFullName= fName + " " + lname;
console.log(myFullName);
}

 inputFullName("Adnan","Abbasi");

 function returnFullName(fName,lname)
{
return  fName + " " + lname;

}
var fullName=returnFullName("Kaleem","Abbasi")
console.log(fullName);
// inputFullName("Adnan","Abbasi");
var trueOrFalase = confirm("is your name adnan");// is a built in function 
console.log(trueOrFalase);
console.log(4==4.0);
var temp= prompt("Enter temerature");


if ( temp <= 10 && temp >=1)
{
console.log("Put on a coat plase");
}
else if (temp <= 0)
{
    console.log(" put on a coat and Hat plase");
    }
    else if (temp == 40)
{
    console.log(" Very hight temperature");
    }
    
    else 
{
    console.log("No  need to put on a coat plase");
    }
    var button=document.getElementById("clickMe");
//console.log(clickMe);
button.addEventListener("click", function(event){
//console.log(event);
alert("Hi jjjkjdkjdjd ");
});
    
var sayHi=function(event){
    console.log("i am here hi");
}
button.addEventListener("click",sayHi);




var link=document.getElementById("resetButton");
var fromResetButton=function(event){
    
}
link.addEventListener("click",fromResetButton);

var link=document.getElementById("resetButton");
link.addEventListener("click",function(event){
event.preventDefault();
}
if (true==confirm("Are You sure you  want to reset?"))
{
    
    alert(" Reset done");
}
else
alert(" Reset Not  done");
*/

var link=document.getElementById("resetButton");


var handleReset=function(event)
{
    event.preventDefault();
    alert("Reset cannot be done at this moment");
    
}

link.addEventListener("click",handleReset);




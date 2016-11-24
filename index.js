 //Nedräknare
var internship = "2018-01-15";
var frontEndDegree = "2018-05-31";

function timeLeft(deadline){
  var t = Date.parse(deadline) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
    "total": t,
    "days": days,
    "hours": hours,
  };
}

function initializeClock(id, deadline){
  var clock = document.getElementById(id);
  var timeinterval = setInterval(function(){
    var t = timeLeft(deadline);
    clock.innerHTML = "Dagar: " + t.days + "<br>" +
                      "Timmar: "+ t.hours;

    if(t.total<=0){
      clearInterval(timeinterval);
    }
  });
}

initializeClock("internshipBegins", internship);
initializeClock("degreeBegins", frontEndDegree);

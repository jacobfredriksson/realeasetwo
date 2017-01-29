//Nedräknare jquery countdown
$(document).ready(function() {
  $("#internshipBegins").countdown({
    until: $.countdown.UTCDate(
    +1, 2018, 0, 15, 0, 0, 0, 0)
  });
});
$(document).ready(function() {
  $("#degreeBegins").countdown({
    until: $.countdown.UTCDate(
    +1, 2018, 4, 31, 0, 0, 0, 0)
  });
});


//trigger message-box
$(document).ready(function() {
  $('#message').click(function() {
  $('#message-box').css('visibility', 'visible')
  });
  //close message box
  $('#close-message-box').click(function() {
  $('#message-box').css('visibility', 'hidden')
  });
});

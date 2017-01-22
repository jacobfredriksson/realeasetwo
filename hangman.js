// Creating an array with possible hangman game words
var wordList = [
  "pitepalt",
  "Gammalget",
  "Mjod",
  "Hundvalp"
];

var theWord;
var life = 7;

function start() {
  // puts Math.random into a variable
  var retur = Math.random();
  //uses math random variable to use it to wordList
  retur = retur * wordList.length;
  //Uses Math.floor to even out the numbers
  retur = Math.floor(retur);
  // Creates a variable with a random word of our wordList
  theWord = wordList[retur].toUpperCase();

  // Loops throw all the letters in our randomized word and creates a new div per letter and a new div for "?"
  for (var i = 0; i < theWord.length; i++) {
    $('.the-word').append(
                          '<div class="letter-holder">' +
                          '<div class="letter letter-' +
                          theWord[i] + '">' +
                          theWord[i] +
                          '</div>' +
                          '</div>'
                          );
  }
}

//Listen to keypresses
$(document).keyup(function(e) {
  var keyCode = e.which;
  var character = String.fromCharCode(keyCode);
  guess(character);
});

function guess(character) {
  //Check if the characters exists
  var exists = theWord.indexOf(character) >= 0;
  //console.log(character,theWord,exists);

  if(!exists) {
    //händelse när en boktav är false
  } else {
    //mata in bokstäverna
    $('.letter-' + character).css('visibility', 'visible');
  }
}

start();


var life = 7;
$('#addLetter').keyup(function() {
  var length = $(this).val().length;
  var length = life-length;
  $('#lifeLeft').text(length);

  if (life === 0) {
    console.log("you Lost!");
  }
});

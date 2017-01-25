// Creating an array with possible hangman game words
var wordList = [
  "Dungeon",
  "Grampah",
  "carrots"
];

var theWord;
var tries = 10;

function start() {
  // puts Math.random into a variable
  var randomize = Math.random();
  //uses math random variable to use it to wordList
  randomize = randomize * wordList.length;
  //Uses Math.floor to even out the numbers
  randomize = Math.floor(randomize);
  // Creates a variable with a random word of our wordList
  theWord = wordList[randomize].toUpperCase();

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
    //makes the lives to be one less if the character doesn't exist
    tries--;
    console.log(tries)
    //check what to do if u win or lose
    if(tries < 1) {
      alert("you lost!");
      return window.location.href = ('http://jacobfredriksson.se');
    }
  } else {
    $('.letter-' + character).css('visibility', 'visible')


  if ( $('.letter-:visible').not($('.letter-:visible')).hide()); {
    alert("hej");
  }
     }


}
$(document).keyup(function() {
  var length = $(this).val().length;
  var length = tries-length;
  $('#lifeLeft').text(length);
});

start();

// jag ska göra alla characters som är true till att bli ordet i theword för att sedan se om dem överänsstämmer, om dem gör det så alerta ut en box som säger grattis

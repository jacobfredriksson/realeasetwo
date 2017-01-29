// Creating an array with possible hangman game words
var wordList = [
  "Prison",
  "Basket",
  "Laptop",
  "Candle",
  "pillow"
];

var theWord;
var tries = 10;

function start() {

  // Creates a variable with a random word of our wordList
  var randomize = Math.random();
  randomize = randomize * wordList.length;
  randomize = Math.floor(randomize);
  theWord = wordList[randomize].toUpperCase();

  // Loops throw all the letters in our randomized word and creates new divs
  for (var i = 0; i < theWord.length; i++) {
    $('.the-word').append(
                          '<div class="letterHolder">' +
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

  //Check if the characters exists and compare them
function guess(character) {
  var exists = theWord.indexOf(character) >= 0;
  if(!exists) {
    //makes the lives to be one less if the character doesn't exist
    tries--;
    //check what to do if you lose
    if(tries < 1) {
      tries="";
      $('.letter').css('visibility', 'visible').addClass('lost');
      $('.lost-text').css('display', 'block');
      $('.update-game').css('visibility', 'visible')
    }
    //updates if its a correct letter
  } else {
    $('.letter-' + character).css('visibility', 'visible').addClass('displayed-letter')
  }
    //updates if all correct letters are displayed
    if ($('.displayed-letter').length == theWord.length)  {
          $('.displayed-letter').css('color', 'green');
          $('.win-text').css('display', 'block');
          $('.update-game').css('visibility', 'visible')
          tries=10;
    }

}

start();


  //Makes the life lose visible
  $(document).keyup(function() {
    var length = $(this).val().length;
    var length = tries-length;
  $('#life-left').text(length);
  });
  //restarts the page if u want to play a new game
  $('#new-game').click(function(){
    window.location.href = ('?page=hangman');
  });
  //sends you to index if click on exit.
  $('#close-game').click(function(){
    window.location.href = ('?page=index');
  });

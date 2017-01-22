  var down = {};
  $(document).keydown(function(e) {
      down[e.keyCode] = true;
  }).keyup(function(e) {
      if (down[72] && down[77]) {  // 72 = h 77 = m
        return window.location.href=('hangman.php')
      }
      down[e.keyCode] = false;
    });

var hangmanKeys = {};
  $(document).keydown(function(e) {
    hangmanKeys[e.keyCode] = true;
  })
  .keyup(function(e) {
    if (hangmanKeys[72] && hangmanKeys[77]) {
      return window.location.href=('hangman.php')
  }
  down[e.keyCode] = false;
});

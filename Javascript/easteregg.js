var down = {}; // easteregg for Admin login and hangman game
$(document).keydown(function(e) {
    down[e.keyCode] = true;
  }).keyup(function(e) {
    if (down[72] && down[77]) {  // 72 = h 77 = m
      return window.location.href=('?page=hangman')
    }
    if (down[65] && down[68] && down[78]) {  //65 = a 68 =d 78 = n
      return window.location.href=('?page=admin')
    }
    else {
      down[e.keyCode] = false;
    }
});

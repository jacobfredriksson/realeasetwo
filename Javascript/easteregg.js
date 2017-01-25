  var down = {}; //down "hangman"
  $(document).keydown(function(e) {
      down[e.keyCode] = true;
  }).keyup(function(e) {
      if (down[72] && down[77]) {  // 72 = h 77 = m
        return window.location.href=('?page=hangman')
      }
      else {
        down[e.keyCode] = false;
      }
});


var downa = {}; //down "admin"
$(document).keydown(function(e) {
    downa[e.keyCode] = true;
}).keyup(function(e) {
    if (downa[65] && downa[68] && downa[78]) {  //65 = a 68 =d 78 = m
      return window.location.href=('?page=admin')
    }
    else {
      downa[e.keyCode] = false;
    }
});

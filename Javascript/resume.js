//Toggle next element when the button with class toggleButton is clicked
$('.toggleButton').click(function() {
    $(this).next().slideToggle(300);
});

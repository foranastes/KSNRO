// When + or - buttons are clicked the font size of the h1 is increased/decreased by 2
// The max is set to 50px for this demo, the min is set by min font in the user's style sheet

function getSize() {
  size = $( "#k2Container" ).css( "font-size" );
  size = parseInt(size, 10);
  $( "#font-size" ).text(  size  );
}

//get inital font size
getSize();

$( "#fontIncrease" ).on( "click", function() {

  // parse font size, if less than 50 increase font size
  if ((size + 2) <= 50) {
    $( "#k2Container" ).css( "font-size", "+=2" );
    $( "#font-size" ).text(  size += 2 );
  }
});

$( "#fontDecrease" ).on( "click", function() {
  if ((size - 2) >= 12) {
    $( "#k2Container" ).css( "font-size", "-=2" );
    $( "#font-size" ).text(  size -= 2  );
  }
});
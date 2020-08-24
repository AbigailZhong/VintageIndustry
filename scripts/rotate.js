$(document).ready(function() {

  var degrees = 0;

  function rotate() {
    if (degrees > 359) {
      degrees = 0;
    } else {
      degrees = degrees + 10;
    }
    $(".gear").css("transform","rotate("+degrees+"deg)");
  }

  setInterval(rotate, 50);
});

// No longer needed, but will keep because I put work into this.

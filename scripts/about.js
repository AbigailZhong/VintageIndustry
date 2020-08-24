// when the document has loaded
$(document).ready(function() {
  // when the origins of the store button is clicked
  $("#showstore").click(function() {
    // show store origins information
    $("#storeorigins").removeClass("abouthidden");
    // hide button
    $("#showstore").addClass("abouthidden");
  });
  // when the her mission button is clicked
  $("#showmarie").click(function() {
    // show marie mission Information
    $("#mariemission").removeClass("abouthidden");
    // hide button
    $("#showmarie").addClass("abouthidden");
  });
});

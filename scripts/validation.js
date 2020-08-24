$(document).ready(function() {
  $("#userName").on("input", function (){
    var nameValid = $("#userName").prop("validity").valid;
    // if name is valid
    if (nameValid) {
      // hide error
      $("#userName").removeClass("inputwarning");
      $("#userName").addClass("inputsuccess");
    } else {
      // show error
      $("#userName").addClass("inputwarning");
      $("#userName").removeClass("inputsuccess");
    }
  });

  $("#userEmail").on("input", function (){
    var emailValid = $("#userEmail").prop("validity").valid;
    // if email is valid
    if (emailValid) {
      // hide error
      $("#userEmail").removeClass("inputwarning");
      $("#userEmail").addClass("inputsuccess");
    } else {
      // show error
      $("#userEmail").addClass("inputwarning");
      $("#userEmail").removeClass("inputsuccess");
    }
  });

  $("#userPhone").on("input", function (){
    var phoneValid = $("#userPhone").prop("validity").valid
    &&
    ($("#userPhone").val().length >= 10 ||
    $("#userPhone").val().length ==0);
    // if phone is valid
    if (phoneValid) {
      // hide error
      $("#userPhone").removeClass("inputwarning");
      $("#userPhone").addClass("inputsuccess");
    } else {
      // show error
      $("#userPhone").addClass("inputwarning");
      $("#userPhone").removeClass("inputsuccess");
    }
  });


  $("#contactForm").on("submit", function(){
    //this variable is true when the form is valid
    var formValid = true;

    var nameValid = $("#userName").prop("validity").valid;
    var emailValid = $("#userEmail").prop("validity").valid;
    var phoneValid = $("#userPhone").prop("validity").valid
    &&
    ($("#userPhone").val().length >= 10 ||
    $("#userPhone").val().length ==0);
    var questionValid = $("#question").prop("validity").valid;

    // if the name is valid
    if (nameValid) {
      // hide error
      $("#userNameError").addClass("hidden");
    } else {
      // if the name is invalid
      formValid = false;
      // show error
      $("#userNameError").removeClass ("hidden");
    }

    // if the email is valid
    if (emailValid) {
      // hide error
      $("#emailError").addClass("hidden")
    } else {
      // if the email is invalid
      formValid = false;
      // show error
      $("#emailError").removeClass("hidden");
    }

    // if phone number is valid
    if (phoneValid) {
      // hide error
      $("#phoneError").addClass ("hidden");
    } else {
      // if the phone number is invalid
      formValid = false;
      // show error
      $("#phoneError").removeClass("hidden");
    }

    // if the question is valid
    if (questionValid) {
      // hide error
      $("#questionError").addClass("hidden");
    } else {
      // if question is invalid
      formValid = false;
      // show error
      $("#questionError").removeClass("hidden");
    }

    // if the form is valid, we allow the user to submit the form (return true)
    // if the form is invalid, we prevent submission (return false)
    return formValid;
  });
});

function validateForm() {
  "use strict";
  //thank you SO!!!
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  const getSelectedValue = document.querySelector('input[name="radio"]:checked');
  const getSelectedValueTwo = document.querySelector('input[name="radioTwo"]:checked');
  const getSelectedValueThree = document.querySelector('input[name="radioThree"]:checked');
  const getSelectedValueFour = document.querySelector('input[name="radioFour"]:checked');
  const name = document.getElementById("name").value;
  const number = document.getElementById("number").value;
  const email = document.getElementById("email").value;

  if (name.length < 2) {
    document.getElementById("name").style.borderColor = "red";
    document.getElementById("name").placeholder = "Please enter a valid name";
    return false;
  } else if (isNaN(number) || number.length != 10) {
    document.getElementById("name").style.borderColor = "black";
    document.getElementById("number").style.borderColor = "red";
    document.getElementById("number").placeholder = "Please enter 10 digits, with no spaces";
    return false;
  } else if (email.indexOf("@") == -1 || email.length < 6) {
    document.getElementById("number").style.borderColor = "black";
    document.getElementById("email").style.borderColor = "red";
    document.getElementById("email").placeholder = "Please enter a valid email address";
    return false;
  }

  if (getSelectedValue && getSelectedValueTwo && getSelectedValueThree && getSelectedValueFour != null) {
    return true;
  } else {
    alert("Please complete the entire form before submitting");
    return false;
  }
}



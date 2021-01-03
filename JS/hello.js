var click = true;

function hiddenMessage() {
  var message = "";
  let div = document.getElementById("message");
  if (click) {
    message = "Welcome To JavaScript";
    click = false;
  } else {
    message = " Here is hidden message";
    click = true;
  }

  div.innerHTML = message;
}

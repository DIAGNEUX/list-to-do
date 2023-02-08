const bang = document.getElementById('bang');

function bar() {
  if (bang.style.text-decoration === "line-through") {
    bang.style.text-decoration = "";
  } else {
    bang.style.text-decoration = "line-through";
  }
}

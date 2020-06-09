var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("menu").style.top = "40";
  } else {
    document.getElementById("menu").style.top = "-130px";
  }
  prevScrollpos = currentScrollPos;
}
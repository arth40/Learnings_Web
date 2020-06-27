var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  //if(currentScrollPos > 40){
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbarid").style.top = "0";
	document.getElementById("navbarid").style.transition = "all 0.5s";
  } else {
    document.getElementById("navbarid").style.top = "-5vw";
	document.getElementById("navbarid").style.transition = "all 0.5s";
  }
  //}
  prevScrollpos = currentScrollPos;
} 
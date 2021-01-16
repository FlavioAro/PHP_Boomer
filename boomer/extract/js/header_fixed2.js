window.onscroll = function() {myFunctionHeader2()};

var header_fixed2 = document.getElementById("header_fixed2");
var header_fixed_css2 = header_fixed2.offsetTop;

function myFunctionHeader2() {
  if (window.pageYOffset >= header_fixed_css2) {
    header_fixed2.classList.add("header_fixed_css2")
  } else {
    header_fixed2.classList.remove("header_fixed_css2");
  }
}
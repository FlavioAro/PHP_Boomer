window.onscroll = function() {myFunctionHeader()};

var header_fixed = document.getElementById("header_fixed");
var header_fixed_css = header_fixed.offsetTop;

function myFunctionHeader() {
  if (window.pageYOffset >= header_fixed_css) {
    header_fixed.classList.add("header_fixed_css")
  } else {
    header_fixed.classList.remove("header_fixed_css");
  }
}
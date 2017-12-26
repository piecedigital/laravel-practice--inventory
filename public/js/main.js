// control nav highlighter
var nav = document.querySelector("nav");
var highlighter = document.querySelector(".highlighter");
var startA = nav.querySelector("a.set");

nav.addEventListener("mouseleave", setPosition.bind(this, startA));
Array.from(nav.querySelectorAll("a")).map(a => {
  a.addEventListener("mouseenter", setPosition.bind(this, a));
});

setPosition(startA);

function setPosition(a) {
  var x = a.offsetLeft;
  var y = a.offsetTop;
  var width = a.offsetWidth;
  var height = a.offsetHeight;

  highlighter.style.left = x + "px";
  highlighter.style.top = y + "px";
  highlighter.style.width = width + "px";
  highlighter.style.height = height + "px";
}

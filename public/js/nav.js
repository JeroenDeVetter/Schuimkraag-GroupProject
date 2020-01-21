const link = window.location.pathname;

let linkpart = window.location.pathname.split("/")

console.log(linkpart[linkpart.length-1]);

let navlinksrow = document.querySelectorAll('a');
/* document.getElementById("myAnchor").href = "http://www.cnn.com/";  */
console.log(navlinksrow);
navlinksrow.forEach(data => {
  linklastpart = (data.getAttribute('href').split('/'));
  linklastpart = linklastpart.length-1;

})
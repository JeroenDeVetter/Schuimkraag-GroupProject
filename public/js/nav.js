const link = window.location.pathname;

let linkpart = window.location.pathname.split("/")
let incoming =(linkpart[linkpart.length-1]);
let navlinksrow = document.querySelectorAll('.link-nav');


/* document.getElementById("myAnchor").href = "http://www.cnn.com/";  */
let teller = 0;

navlinksrow.forEach(data => {
  navlinksrow[teller].classList.remove("activ");
  let linklastpart = (data.getAttribute('href').split('/'));
  
  let choose = (linklastpart[linklastpart.length-1]);
  if (choose === "checkloginstatus.php"){
    choose = "shop.php";
  };
   if (choose === incoming){
    navlinksrow[teller].classList.add("activ");
    
  }
  teller += 1;
})



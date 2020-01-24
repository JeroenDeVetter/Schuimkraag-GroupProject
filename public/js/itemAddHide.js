let addbutton = document.querySelectorAll('.add_to_cart');

function hideAddButton(){
  this.classList.add('verberg');
}

addbutton.forEach(btn => {
  btn.addEventListener('click',hideAddButton);
});





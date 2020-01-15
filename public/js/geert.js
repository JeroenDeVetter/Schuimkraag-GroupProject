async function getBeerDetails(bierID) {
    let response =  await fetch(`getbeerdetails.php?q=${bierID}`);

    if (response.ok){
        const jsonResponse = await response.json();
        console.log(jsonResponse);
    }
};


document.addEventListener('click', async function (event) {

if (event.target.matches(".view_gallery")){
    let productBack= event.target.parentElement.nextElementSibling;
    let backstats = productBack.querySelector(".stats-container");
    let alcoholgehalteBox = document.createElement("span");
    alcoholgehalteBox.classList.add("tesbygeert");
    setTimeout(alcoholgehalteBox.innerHTML= jsonResponse.alcoholgehalte,500);
    backstats.appendChild(alcoholgehalteBox);
}
    //let target=  event.target;





});

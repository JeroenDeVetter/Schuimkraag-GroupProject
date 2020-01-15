/*
async function getBeerDetails(bierID) {
    let response =  await fetch(`getbeerdetails.php?q=${bierID}`);

    if (response.ok){
        const jsonResponse = await response.json();
        console.log(jsonResponse);
    }
};
*/


document.addEventListener('click', async function (event) {

if (event.target.matches(".view_gallery")){
    let productBack= event.target.parentElement.nextElementSibling;
    let backstats = productBack.querySelector(".stats-container");
    let alcohol = backstats.querySelector(".product_alco");
    let productdes = backstats.querySelector(".product_des");
    let productID = event.target.closest('.product').id;
    console.log(productID);
    let bierId = productID.substring(8);
    console.log(bierId);
    let response =  await fetch(`getbeerdetails.php?q=${bierId}`);
    console.log(response, "res");
    const jsonResponse = await response.json();
    console.log(jsonResponse);
    console.log(jsonResponse.alcoholgehalte);
    //alcoholgehalteBox.classList.add("tesbygeert");
    console.log(alcohol);
    productdes.innerHTML = jsonResponse.bierbeschrijving;
    alcohol.innerHTML= jsonResponse.alcoholgehalte;
    //backstats.appendChild(alcoholgehalteBox);
}
    //let target=  event.target;





});

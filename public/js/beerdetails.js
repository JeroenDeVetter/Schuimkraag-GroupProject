const viewDetailsButtons = document.querySelectorAll(".view_details");

viewDetailsButtons.forEach(function(detailbutton) {
    detailbutton.addEventListener('click', async function(e) {
        let productBack = event.target.parentElement.nextElementSibling;
        let productbackimg = document.createElement("img");
        let backstats = productBack.querySelector(".stats-container");
        let alcoholgehalteBox = backstats.querySelector(".product_alco");
        let descriptionBox = backstats.querySelector(".product_description");
        let ProductId = event.target.closest('.product').id;
        let bierId = ProductId.substr(8);
        let response = await fetch(`../src/Model/getbeerdetails.php?q=${bierId}`);
        const jsonResponse = await response.json();
        productbackimg.src = "../public/images/back/" + jsonResponse.etiketafbeelding;
        productBack.insertBefore(productbackimg, productBack.firstChild);
        alcoholgehalteBox.innerHTML = "alcoholgehalte: " + jsonResponse.alcoholgehalte + "°";
        descriptionBox.innerHTML = "<em>" + jsonResponse.bierbeschrijving + "</em>";
    });
});
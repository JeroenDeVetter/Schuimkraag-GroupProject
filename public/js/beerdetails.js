const viewDetailsButtons = document.querySelectorAll(".view_details");
console.log(viewDetailsButtons);
viewDetailsButtons.forEach(function () {
    this.addEventListener('click', async function (event) {
        let productBack = event.target.parentElement.nextElementSibling;
        if(productBack !== null) {
            let backstats = productBack.querySelector(".stats-container");
            let alcoholgehalteBox = backstats.querySelector(".product_alco");
            let descriptionBox = backstats.querySelector(".product_description");
            let ProductId = event.target.closest('.product').id;
            let bierId = ProductId.substr(8);
            let response = await fetch(`getbeerdetails.php?q=${bierId}`);
            const jsonResponse = await response.json();
            alcoholgehalteBox.innerHTML =  "alcoholgehalte: " + jsonResponse.alcoholgehalte + "°";
            descriptionBox.innerHTML =  "<em>" + jsonResponse.bierbeschrijving + "</em>";
            
        }
    });
});







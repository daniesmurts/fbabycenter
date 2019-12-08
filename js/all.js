$(document).ready(function () {
    getRequest(
        productsEndpoint
    ).then(response => {
        handleResponse(response);
    }).catch(error => {
        console.log('Error: ' + error)
    })



    async function handleResponse(response) {
        if (response.status >= 200 && response.status < 400) {
            var productsData = await response.json();
            createProductsDataHTML(productsData);
        
        } else {
            console.log("connected to the server but encountered an error");
        }
    }

    function createProductsDataHTML(fbcProductsData) {
        var rawProductsDataTemplate = document.getElementById("productsDataTemplate").innerHTML;
        var compiledProductsDataTemplate = Handlebars.compile(rawProductsDataTemplate);
        var generatedProductsDataHTML = compiledProductsDataTemplate(fbcProductsData);

        var ProductsDataContainer = document.getElementById("productsData-container");
        ProductsDataContainer.innerHTML = generatedProductsDataHTML;
    
    }
});
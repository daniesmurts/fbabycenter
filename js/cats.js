$(document).ready(function(){
    //cats
    

        getRequest(
            categoriesEndpoint
        ).then(response => {
            handleResponse(response);
        }).catch(error => {
            console.log('Error: ' + error)
        })

        async function handleResponse(response) {
            if (response.status >= 200 && response.status < 400) {
                var pickupStationData = await response.json();
                createCatHTML(pickupStationData);
            } else {
                console.log("connected to the server but encountered an error");
            }
        }
    
        function createCatHTML(fbcCatData){
            var rawCatTemplate = document.getElementById("catsTemplate").innerHTML;
            var compiledCatsTemplate = Handlebars.compile(rawCatTemplate);
            var generatedCatsHTML = compiledCatsTemplate(fbcCatData);
    
            var catsContainer = document.getElementById("cats-container");
            catsContainer.innerHTML = generatedCatsHTML;
        }
    });
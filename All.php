<?php
        if(empty($_COOKIE['idToken'])){
            //if(!empty($_COOKIE['idToken'])){
            header('Location: unauthorised.php');
            print('redirect') ;        
        } else {
                
        }

    ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Baby Arcade Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="login/images/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="login/images/icons/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- custom stylesheet -->
    <!-- <link type="text/css" rel="stylesheet" href="utilities/css/main.css"> -->
    
    
</head>

<body>
<div class="loader"></div>


    <div class="container">
    <div class="row fbc_row">
            <div class="col-md-12"><div id="productsData-container"></div></div>
            
            <div class="col-sm-12">
                <script id="productsDataTemplate" type="text/x-handlebars-template">
                    <table class="table  table-hover " id="fbc-table">
                        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Rating</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Size</th>

            </tr>
        </thead>
        {{#each data}}
        <tbody>

            <tr>
                <td>{{id}}</td>
                <td>{{name}}</td>
                <td>{{description}}</td>
                <td>{{rating}}</td>
                <td>{{quantity}}</td>
                <td>{{price}}</td>
                <td>{{discount}}</td>
                <td>{{is_big_product}}</td>
            
            </tr>
    
    
        </tbody>
        {{/each}}
</table>
    </script>
            </div>

        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    
    <script src="js/all.js"></script>
    <script src="js/networking.js"></script>
    <script src="js/node_modules/handlebars/dist/handlebars.js"></script>
    <script src="js/modernizr-custom.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</body>
</html>


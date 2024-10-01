<?php

if (isset($_GET["act"])) {
    $action = $_GET["act"];
} else if (isset($_POST["act"])) {
    $action = $_POST["act"];
} else {
    $action = "index";
}

switch ($action) {
    case "index":
        include "../view/index.php";
        break;

    case"register": 
        include "../view/register.php";
        break;  

    case"login": 
        include "../view/login.php";
        break;
    case"cart": 
        include "../view/cart.php";
        break;

    case"introduce": 
        include "../view/introduce.php";
        break;

    case"product": 
        include "../view/product.php";
        break;
                    
    case"news": 
        include "../view/news.php";
        break;

    case"contact": 
        include "../view/contact.php";
        break;
    case"product_details": 
        include "../view/product_details.php";
        break;    


    default:
    include "../view/index.php";
        break; 
    }
    

?>
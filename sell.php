
<?php
require_once 'dbConfig.php';

// If file upload form is submitted 
    $status = $statusMsg = ''; 
    if(isset($_POST["submit"])){ 

    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $seller = $_POST['seller'];
    $description = $_POST['description'];
    $imagefile = $_POST['image'];


    if(!empty($_FILES['image']['tmp_name'])) { 

        $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));


        // Insert variable content into database 
        $insert = $db->query("INSERT INTO sell(name, price, quantity, seller, description, image) 
        VALUES ('$name', '$price', '$quantity', '$seller', '$description' ,'$imgData')"); 

        if($insert){
            echo ' nice, listing successful';

                }
            }
        }






?>
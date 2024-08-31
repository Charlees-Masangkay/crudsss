<?php

require 'db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $description =  filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $price =  filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $quantity =  filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO products (name, description, price, quantity) VALUES (:name, :description, :price, :quantity)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute ([
        'name' => $name, 
        'description' => $description, 
        'price' => $price, 
        'quantity' => $quantity
    ]);


    header('Location: index.php');
    exit();


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<html>

</head>
<body> 
    <header> 
        PRODUCTS LIST
    </header>

    <title> Create Product <title>
    
    <form method= "post" action= "Create.php">
        <label for="name">name: </label>
        <input type="text" name="name" id= "name" required><br>

        <label for="description"> description:</label>>
        <t name="description" id= "description"></textarea><br>
        
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" required><br>
        
        <label for="quantity"> quantity:</label>
        <input type="text" name="quantity" id="quantity" required><br>
        
        <button type="submit">Create</button>
</form>

</body>
</html>

     

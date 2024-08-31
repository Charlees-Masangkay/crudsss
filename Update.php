<?php

require 'db.php';


$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE product SET name = :name, description = :description, price = :price, quantity = :quantity WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'description' => $description, 'price' => $price, 'quantity' => $quantity, 'id'=> $id]);


}

$sql = "SELECT * FROM product WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body
    <h1> Update Product</h1>
    <form method= "post" action= "update.php?id=<?php $id; ?>">
        <label for="name"> name:</label>
        <input type="text" name="name" id="name" value= "<?php ($product['name']); ?>" required><br>
        <label for ="description">description:</label>
        <textarea name= "description" id= "description"><?php ($product['description']);?> </textarea><br>
       
        <label for= "price"> Price:</label>
        <input type="text" name="price" id="price" value= "<?php ($product['price']); ?>" require><br>
        <button type= "submit">Update</button>

</form>
</body>
</html>

        
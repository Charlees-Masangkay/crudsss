<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'db.php';

try {
$sql = "SELECT * FROM product";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch (PDOException $e){
    die("Query failed:" . $e->getMessage());
}

?>






<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

</head>
<body>
    <h1>Products</h1>
    <a href="Create.php"> Add new Product</a>

    <br>

    <table style="width:10%">
    
  <tr>
    <th >id</th>
    <th  style="width:20%">name</th>
    <th>description</th>
    <th>price</th>
    <th>quantity</th>

  </tr>
  
</thread>
<tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php ($product['id']); ?></td>
            <td><?php ($product['name']); ?></td>
            <td><?php ($product['description']); ?></td>
            <td><?php ($product['price']); ?></td>
            <td><?php ($product['quantity']); ?></td>

            <td>
                <a href="update.php?id=<?php echo $product['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $product['id']; ?>" onclick="return conirm('Are you sure?');">Delete</a>
    </td>
    </tr>
    <?php endforeach; ?>

    </tbody>
    </table>
    </body>
    </html>
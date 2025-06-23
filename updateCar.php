<?php
    include_once("config.php");

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $image = $_POST['image'];
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
       

        $sql = "UPDATE cars SET id = :id, image = :image,  name = :name, brand = :brand, price = :price
        WHERE id = :id";

        $updateUser = $conn->prepare($sql);
        $updateUser->bindParam(":id", $id);
        $updateUser->bindParam(":image", $image);
        $updateUser->bindParam(":name", $name);
        $updateUser->bindParam(":brand", $brand);
        $updateUser->bindParam(":price", $price);
        $updateUser->execute();
        
        header("Location: dashboard.php");
    }

?>

<?php
    include_once("config.php");

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $sql = "UPDATE users SET  username = :username, password = :password
        WHERE id = :id";

        $updateUser = $conn->prepare($sql);
        $updateUser->bindParam(":id", $id);
        $updateUser->bindParam(":username", $username);
        $updateUser->bindParam(":password", $password);
        $updateUser->execute();
        
        header("Location: dashboard.php");
    }

?>

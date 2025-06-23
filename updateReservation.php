<?php
    include_once("config.php");

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $pickuplocation = $_POST['pickuplocation'];
        $locationoff = $_POST['locationoff'];
        $pickupdate = $_POST['pickupdate'];
        $pickoffdate = $_POST['pickoffdate'];
        $pickuptime = $_POST['pickuptime'];
       

        $sql = "UPDATE book SET id = :id, pickuplocation = :pickuplocation, locationoff = :locationoff,
        pickupdate = :pickupdate , pickoffdate = :pickoffdate  ,pickuptime = :pickuptime
        WHERE id = :id";

        $updateUser = $conn->prepare($sql);
        $updateUser->bindParam(":id", $id);
        $updateUser->bindParam(":pickuplocation", $pickuplocation);
        $updateUser->bindParam(":locationoff", $locationoff);
        $updateUser->bindParam(":pickupdate", $pickupdate);
        $updateUser->bindParam(":pickoffdate", $pickoffdate);
        $updateUser->bindParam(":pickuptime", $pickuptime);
        $updateUser->execute();
        
        header("Location: dashboard.php");
    }

?>

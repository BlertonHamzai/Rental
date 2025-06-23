<?php
include_once("config.php");


  try{
    if(isset($_POST['submit'])){
        $pickuplocation = $_POST['pickuplocation'];
        $locationoff = $_POST['locationoff'];
        $pickupdate = $_POST['pickupdate'];
        $dropoffdate = $_POST['dropoffdate'];
        $pickuptime = $_POST['pickuptime'];

         $sql = "INSERT INTO book( pickuplocation, locationoff, pickupdate, pickoffdate, pickuptime) VALUES ( :pickuplocation, :locationoff, :pickupdate, :pickoffdate, :pickuptime)";        
         $prep = $conn->prepare($sql);
         $prep->bindParam(':pickuplocation',$pickuplocation);
         $prep->bindParam(':locationoff',$locationoff);
         $prep->bindParam(':pickupdate',$pickupdate);
         $prep->bindParam(':pickoffdate',$pickoffdate);
         $prep->bindParam(':pickuptime',$pickuptime);

         header('Location:users.php');
         $prep->execute();

    }
  }
  catch(Exception $e){
    echo"something went wrong,, try again";
  }


?>
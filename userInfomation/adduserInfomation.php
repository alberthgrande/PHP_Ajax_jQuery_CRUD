<?php
    include("../database/connection.php");

    extract($_POST); // extract data

    if(isset($_POST['firstnameSend']) &&  isset($_POST['middlenameSend']) &&  isset($_POST['lastnameSend']) &&  isset($_POST['emailSend']) &&  isset($_POST['addressSend']) &&  isset($_POST['phoneSend'])) 
    {
        $sql = "INSERT INTO `tbl_account_information`(`firstname`, `middlename`, `lastname`, `email`, `address`, `phone`) VALUES ('$firstnameSend','$middlenameSend','$lastnameSend','$emailSend','$addressSend','$phoneSend');";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }
?>
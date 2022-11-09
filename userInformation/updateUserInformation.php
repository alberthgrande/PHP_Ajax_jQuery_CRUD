<?php
    include("../database/connection.php");

    //extract($_POST); // extract data

    if(isset($_POST['updateDataSend'])) {
        $uniqueID = $_POST['updateDataSend'];

        $sql = "SELECT * FROM `tbl_account_information` WHERE id='$uniqueID';";
        $result = $conn->query($sql);
        $response = array();
        while ($row = $result->fetch_assoc()) {
            $response = $row;
        }

        echo json_encode($response);
    }

    else {
        $response['status']=200; // it means ok
        $response['message']= "Invalid or data not found"; // error message
    }


    // update user information
    if (isset($_POST['hiddenData'])) {
        $unique_ID = $_POST['hiddenData'];
        $firtsname = $_POST['updatefirstname'];
        $middlename = $_POST['updatemiddlename'];
        $lastname = $_POST['updatelastname'];
        $email = $_POST['updateemail'];
        $address = $_POST['updateaddress'];
        $phone = $_POST['updatephone'];


        $sql = "UPDATE `tbl_account_information` SET
        `firstname`='$firtsname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`address`='$address',`phone`='$phone'
        WHERE id='$unique_ID';";

        $result = $conn->query($sql);
        
    }
    
?>
<?php
    include("../database/connection.php");
    if(isset($_POST['deleteDataSend'])) {
        $uniqueID = $_POST['deleteDataSend'];
        // sql to delete a record
        $sql = "DELETE FROM `tbl_account_information` WHERE id='$uniqueID';";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } 
        
        else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }
?>
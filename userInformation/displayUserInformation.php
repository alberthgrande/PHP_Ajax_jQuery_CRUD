<?php
    include("../database/connection.php");

    //extract($_POST); // extract data

    if(isset($_POST['displayDataSend'])) {
        $table='<table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Middlename</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>';
        $id_No = 0;
        $sql = "SELECT * FROM `tbl_account_information`;";
        $result = $conn->query($sql);
        if  ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $firstname = $row['firstname'];
                $middlename = $row['middlename'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $address = $row['address'];
                $phone = $row['phone'];
                $id_No++;
                $table.='<tr>
                <th scope="row">'.$id_No.'</th>
                <td>'.$firstname.'</td>
                <td>'.$middlename.'</td>
                <td>'.$lastname.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$phone.'</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="updateUserInformation('.$id.')">Update</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteUserInformation('.$id.')">Delete</button>
                </td>
              </tr>';
            }
            $table.='</table>';
    
            echo $table;
        } 

        else {
            $table='<table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Middlename</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tr>
                <td colspan="8" class="text-center text-danger">No User Information Found</td>
            </tr>';
        
            echo $table;  
        }

        $conn->close();
        
    } // end if POST Display Data Send
    
?>
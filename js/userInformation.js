// button id
const saveUserInformation = document.querySelector("#saveUserInformation");
// const deleteUserInformation = document.querySelector("#deleteUserInformation");
const displayData = "true";

// display user function
$(document).ready(() => {
    displayUserInfomation();
});

const displayUserInfomation = () => {
    $.ajax({
        url: "userInformation/displayUserInformation.php", // php path to add user infomation
        type: "POST", // php type
        data: {
            displayDataSend: displayData
        },
        success: (data, status) => {
            $("#dataUserInformationTable").html(data);
        }
    });
}

// adduser function
saveUserInformation.addEventListener("click", () => {
    const firstnameAdd = $("#completefirstname").val();
    const middlenameAdd = $("#completemiddelname").val();
    const lastnameAdd = $("#completelastname").val();
    const emailAdd = $("#completeemail").val();
    const addressAdd = $("#completeaddress").val();
    const phoneAdd = $("#completephone").val();

    if ((firstnameAdd == "" || firstnameAdd == null) || (middlenameAdd == "" || middlenameAdd == null) || (lastnameAdd == "" || lastnameAdd == null) || (emailAdd == "" || emailAdd == null) || (addressAdd == "" || addressAdd == null) || (phoneAdd == "" || phoneAdd == null)) {
        console.log("All field must be filled out");
        alert("All field must be filled out");
        $("#completefirstname").val('');
        $("#completemiddelname").val('');
        $("#completelastname").val('');
        $("#completeemail").val('');
        $("#completeaddress").val('');
        $("#completephone").val('');
        return false;
    } else {
        $.ajax({
            url: "./userInformation/addUserInfomation.php", // php path to add user infomation
            type: "POST", // php type
            data: { // data sent 
                firstnameSend: firstnameAdd,
                middlenameSend: middlenameAdd,
                lastnameSend: lastnameAdd,
                emailSend: emailAdd,
                addressSend: addressAdd,
                phoneSend: phoneAdd
            },
            success: (data, status) => { // display message if the code was success
                $("#completefirstname").val('');
                $("#completemiddelname").val('');
                $("#completelastname").val('');
                $("#completeemail").val('');
                $("#completeaddress").val('');
                $("#completephone").val('');
                alert("User Information Successfully Added");
                console.log(status);
                displayUserInfomation();
            }
        });
    }

});

// delete function
function deleteUserInformation(deleteID) {
    var deleteUserInfo = confirm("Are you sure you want to delete?");
    if (deleteUserInfo) {
        $.ajax({
            url: "./userInformation/deleteUserInformation.php",
            type: "POST",
            data: {
                deleteDataSend: deleteID
            },
            success: (data, status) => {
                console.log("User Information Successfully Deleted");
                alert("User Information Successfully Deleted");
                displayUserInfomation();
            }
        });
    }

    else {
        console.log("User Informatio Cancel Deletion Successfully");
    }
}

// update user information
function updateUserInformation(updateID) {
    $('#hiddenData').val(updateID);
    // update path                                           
    $.post("./userInformation/updateUserInformation.php",
        { updateDataSend: updateID }, // update post variable
        (data, status) => {
            const userID = JSON.parse(data); // JSON user extract data
            $("#updatefirstname").val(userID.firstname);
            $("#updatemiddelname").val(userID.middlename);
            $("#updatelastname").val(userID.lastname);
            $("#updateemail").val(userID.email);
            $("#updateaddress").val(userID.address);
            $("#updatephone").val(userID.phone);
        }
    );
    $('#updateUserInfomation').modal('show'); // show modal
}


function updateUserInfo() {
    const updatefirstname = $("#updatefirstname").val();
    const updatemiddlename = $("#updatemiddelname").val();
    const updatelastname = $("#updatelastname").val();
    const updateemail = $("#updateemail").val();
    const updateaddress = $("#updateaddress").val();
    const updatephone = $("#updatephone").val();
    const hiddenData = $("#hiddenData").val();

    $.post("./userInformation/updateUserInformation.php",
        {
            updatefirstname: updatefirstname,
            updatemiddlename: updatemiddlename,
            updatelastname: updatelastname,
            updateemail: updateemail,
            updateaddress: updateaddress,
            updatephone: updatephone,
            hiddenData: hiddenData
        }, (data, status) => {
            console.log("User Information Successfully Updated");
            alert("User Information Successfully Updated");
            displayUserInfomation();
        }
    );

}
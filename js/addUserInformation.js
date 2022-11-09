let saveUserInformation = document.querySelector("#saveUserInformation"); // button id
// button id addEventListener
saveUserInformation.addEventListener("click", () => {
    var firstnameAdd = $("#completefirstname").val();
    var middlenameAdd = $("#completemiddelname").val();
    var lastnameAdd = $("#completelastname").val();
    var emailAdd = $("#completeemail").val();
    var addressAdd = $("#completeaddress").val();
    var phoneAdd = $("#completephone").val();

    if ((firstnameAdd == "" || firstnameAdd == null) || (middlenameAdd == "" || middlenameAdd == null) || (lastnameAdd == "" || lastnameAdd == null) || (emailAdd == "" || emailAdd == null) || (addressAdd == "" || addressAdd == null) || (phoneAdd == "" || phoneAdd == null)) {
        alert("All field must be filled out");
        return false;
    } else {
        $.ajax({
            url: "userInfomation/adduserInfomation.php", // php path to add user infomation
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
                // console.log(status);
                // alert(status);
                alert("User Information Successfully Added");
                $("#completefirstname").val('');
                $("#completemiddelname").val('');
                $("#completelastname").val('');
                $("#completeemail").val('');
                $("#completeaddress").val('');
                $("#completephone").val('');
            }
        });
    }

});
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!--Start Modal Add User Information -->
    <div class="modal fade" id="adduserinfomation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="text" class="form-control" id="completefirstname" placeholder="Firstname: Juan">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="completemiddelname"
                            placeholder="Middelname: Dela Cruz">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="completelastname" placeholder="Lastname: Dele Cruz">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="completeemail" placeholder="Email: your@email.com">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="completeaddress"
                            placeholder="Address: G/F Nisce Building, Quezon Avenue">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="completephone" placeholder="Phone: 09123456789">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="saveUserInformation"
                        data-bs-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Add User Information -->
    <div class="container my-3">
        <h1 class="text-center">PHP Ajax jQuery CRUD</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#adduserinfomation">
            Add User Information
        </button>
    </div>


















    <!-- start jquery libraries -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- end jquery libraries -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <!-- jscript for crud -->
    <script src="js/addUserInformation.js"></script>
</body>

</html>
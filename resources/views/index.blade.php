<!DOCTYPE html>
<html lang="en">

<head>
    <title>TEST</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif;
        }

        .w3-sidebar {
            z-index: 3;
            width: 250px;
            top: 43px;
            bottom: 0;
            height: inherit;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=email]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
                href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-theme-l1">Home</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a> -->
            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a> -->
            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a> -->
            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a> -->
        </div>
    </div>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main">
        <div class="w3-row w3-padding-64" style="padding-bottom: 0!important;">

            <!-- SILA BUAT REGISTER FORM -->


            <form id="create-form">
                @csrf
                <div class="container">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" id="name" required>

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" id="email" required>

                    <label><b>Gender</b></label>
                    <input class="w3-radio" type="radio" name="gender" value="male" checked>
                    <label>Male</label>

                    <input class="w3-radio" type="radio" name="gender" value="female">
                    <label>Female</label>

                    <button type="submit" class="registerbtn">Register</button>
                </div>
            </form>

            <!-- SILA BUAT TABLE DISPLAY DATA -->


            <form id="filter" style="float: right;padding-right:20px">
                <label>Filter: </label>
                <label for="gender_filter">Gender:</label>
                <select id="gender_filter" name="gender_filter">
                    <option value="All">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="status_filter">Status:</label>
                <select id="status_filter" name="status_filter">
                    <option value="All">All</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <button type="submit">Filter</button>
            </form>
            <div id="table-container" style="overflow-x: auto;width:100%">

            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form id="edit-form">
                        @csrf
                        <div class="container">
                            <h1>Edit</h1>
                            <p>Please fill in this form to edit your account.</p>
                            <hr>

                            <input style="display: none" name="user_id" id="user_id">
                            <input style="display: none" name="current_link" id="current_link">

                            <label for="name_edit"><b>Name</b></label>
                            <input type="text" placeholder="Enter Name" name="name_edit" id="name_edit" required>

                            <label for="email_edit"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email_edit" id="email_edit" required>

                            <label><b>Gender</b></label>
                            <input class="w3-radio" type="radio" name="gender_edit" value="male">
                            <label>Male</label>

                            <input class="w3-radio" type="radio" name="gender_edit" value="female">
                            <label>Female</label>
                            <br><br>
                            <label><b>Status</b></label>
                            <input class="w3-radio" type="radio" name="status" value="active">
                            <label>Active</label>

                            <input class="w3-radio" type="radio" name="status" value="inactive">
                            <label>Inactive</label>



                            <button type="submit" class="registerbtn">Confirm Edit</button>
                        </div>
                    </form>
                </div>

            </div>



            <!-- Pagination -->


            <footer id="myFooter">
                <div class="w3-container w3-theme-l2 w3-padding-32">
                    <h4>Footer</h4>
                </div>

                <div class="w3-container w3-theme-l1">
                    <p>Provided by Faiz Hafidzin</p>
                </div>
            </footer>
        </div>
        <!-- END MAIN -->
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }

        $("#create-form").submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: "post",
                url: "{{ route('checkData') }}",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response)
                    Swal.fire({
                        title: "Successfully Registered",
                        html: '<div class="border rounded m-2 p-3 text-start">' +
                            '<b>ID:</b>' +
                            '<div>' + response["data"]["id"] + '</div>' +
                            '<br>' +
                            '<b>Name:</b>' +
                            '<div>' + response["data"]["name"] + '</div>' +
                            '<br>' +
                            '<b>Email:</b>' +
                            '<div>' + response["data"]["email"] +
                            '</div>' +
                            '<br>' +
                            '<b>Gender:</b>' +
                            '<div>' + response["data"]["gender"] +
                            '</div>' +
                            '<br>' +
                            '<b>Status:</b>' +
                            '<div>' + response["data"]["status"] +
                            '</div>' +
                            '</div>',
                        icon: "success",
                        allowOutsideClick: false,
                        buttons: {
                            confirm: "Okay"
                        }
                    })
                }
            });

        });

        function table_load(link = "https://gorest.co.in/public/v1/users?page=1&gender=&status=") {

            $.ajax({
                type: "post",
                url: "{{ route('tableLoad') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "action": "load",
                    "link": link
                },
                success: function(response) {
                    $("#table-container").html(response['view']);
                }
            });
        }
        table_load()

        $(document.body).on("click", "#btn-previous", function() {
            var link = $(this).attr("data-link");
            table_load(link)
        });
        $(document.body).on("click", "#btn-next", function() {
            var link = $(this).attr("data-link");
            table_load(link)
        });
        $(document.body).on("click", ".btn-delete", function() {
            var id = $(this).attr("data-id");
            var link = $(this).attr("data-link");
            deleteUser(id, link)
        });

        function deleteUser(id, link) {
            $.ajax({
                type: "post",
                url: "{{ route('deleteUser') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "action": "delete",
                    "id": id,
                },
                success: function(response) {
                    table_load(link)
                }
            });
        }

        // Get the modal
        var modal = $("#myModal");

        // Get the <span> element that closes the modal
        var span = $(".close");
        // When the user clicks on <span> (x), close the modal
        span.click(function() {
            modal.css("display", "none");
        })
        // When the user clicks anywhere outside of the modal, close it
        $(window).click(function(event) {
            if (event.target == modal) {
                modal.css("display", "none");
            }
        })

        $(document.body).on("click", ".btn-edit", function() {

            $("#user_id").val($(this).attr("data-id"));
            $("#current_link").val($(this).attr("data-link"));
            $("#name_edit").val($(this).attr("data-name"));
            $("#email_edit").val($(this).attr("data-email"));
            var gender = $(this).attr("data-gender")
            var status = $(this).attr("data-status")
            $("input[name=gender_edit][value=" + gender + "]").prop('checked', true);
            $("input[name=status][value=" + status + "]").prop('checked', true);

            // Get the button that opens the modal
            var btn = $(".btn-edit");

            // When the user clicks the button, open the modal 
            // btn.click(function() {
            modal.css("display", "block");
            // })

        });

        $("#edit-form").submit(function(e) {
            e.preventDefault();
            var link = $("#current_link").val();
            $.ajax({
                type: "post",
                url: "{{ route('editUser') }}",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response)
                    table_load(link)
                    modal.css("display", "none");
                }
            });

        });

        function filter(link = "https://gorest.co.in/public/v1/users", gender, status) {

            $.ajax({
                type: "post",
                url: "{{ route('filter') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "action": "filter",
                    "link": link,
                    "gender": gender,
                    "status": status,
                },
                success: function(response) {
                    $("#table-container").html(response['view']);
                }
            });
        }

        $("#filter").submit(function(e) {
            e.preventDefault();
            var gender = $("#gender_filter").val();
            var status = $("#status_filter").val();
            filter(link = "https://gorest.co.in/public/v1/users", gender, status)
        });
    </script>

</body>

</html>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
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
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main">
        <div class="w3-row w3-padding-64">

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



            <h2>Table Display Data</h2>

            <table>
                <tr>
                    <th>Username</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>user1</td>
                    <td>number1</td>
                    <td>user1@gmail</td>
                    <td>u1</td>
                    <td>Edit/Delete</td>
                </tr>
                <tr>
                    <td>user2</td>
                    <td>number2</td>
                    <td>user2@gmail</td>
                    <td>u2</td>
                    <td>Edit/Delete</td>
                </tr>
                <tr>
                    <td>user3</td>
                    <td>number2</td>
                    <td>user3@gmail</td>
                    <td>u3</td>
                    <td>Edit/Delete</td>
                </tr>
            </table>

            <!-- Pagination -->
            <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                    <a class="w3-button w3-hover-black" href="#">«</a>
                    <a class="w3-button w3-black" href="#">1</a>
                    <a class="w3-button w3-hover-black" href="#">2</a>
                    <a class="w3-button w3-hover-black" href="#">3</a>
                    <a class="w3-button w3-hover-black" href="#">»</a>
                </div>
            </div>

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
                url: "{{route('checkData')}}",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response)
                }
            });

        });
    </script>

</body>

</html>
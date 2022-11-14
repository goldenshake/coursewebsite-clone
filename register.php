<?php

    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect,"members");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>


    <!-- LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/book.ico" type="image/x-icon">

    <style>
        .dropdown-toggle::after {
            display: none;
        }

        body {
            background-image: linear-gradient(to bottom, #89929b 20%, #ffffff);
            background-repeat: no-repeat;
            color: black;


        }

        .form-control:focus {
            border-color: #00a2ff;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 247, 255, 0.6);
        }

        .form-control {
            color: #19bef0;
            background-color: rgba(123, 192, 197, 0.185);
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 register">
                <div class="text-center mb-4"><img src="https://cdn-icons-png.flaticon.com/512/1057/1057240.png" alt=""
                        width="150"></div>
                <form action="register.php " method="post">
                    <div class="row">
                        <div class="col">
                            <label for="fname" class="form-label">First name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="col">
                            <label for="lname" class="form-label">Last name</label>
                            <input type="text" name="lname" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="passw" class="form-label">Password</label>
                        <input type="password" name="passw" class="form-control">

                    </div>
                    <div class="text-center">
                        <button type="submit" name="registsubmit" class="btn btn-outline-info">Sign Up<svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg></button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        $outcome = "";
    if (isset($_POST['registsubmit'])){
        mysqli_query($connect, "insert into subscriber values('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[username]','$_POST[passw]')");
        $outcome = "Successfully created.....";
        header('Location:login.php');
        
    }
    
    
    ?>
    <div class="form-text"><?php echo $outcome;  ?></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
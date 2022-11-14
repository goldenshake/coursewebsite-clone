<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect,"members");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


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
            <div class="col-12 login">
                <div class="text-center mb-4">
                    <h6 class="pb-2"><strong>William Online Teaching Resources</strong></h4>
                    <img src="https://cdn-icons-png.flaticon.com/512/4784/4784546.png" alt="" width="150">
                    
                </div>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="passw" class="form-label">Password</label>
                        <input type="password" name="passw" class="form-control">
                        <div class="form-text"><a href="register.php" class="text-info">No account? Click here to
                                register.</a></div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="loginsubmit" class="btn btn-outline-info">Login<svg
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
    
    if(isset($_POST["loginsubmit"])){
        $user = $_POST['username'];
        $_SESSION['username'] = $user;
        $data = mysqli_query($connect, "select * from subscriber where username = '$user'");
        
        while($row = mysqli_fetch_assoc($data)){
            if($_POST['username'] == $row['username'] && $_POST['passw'] == $row['password']){
                header('Location: index.php');
            }
        }
    }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
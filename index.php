<?php
ob_start();
session_start();
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "members");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            background-image: linear-gradient(to bottom, #373c41 10%, #0e2031);
            color: white;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid nav-container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">



                <div class="container-fluid">
                    <div class="row">
                        <div class="col container1">
                            <span class="logo">
                                <a class="navbar-brand" href="index.php">
                                    <img src="images/book.png" alt="" width="40" style="padding-bottom: 15px;">
                                    <strong>
                                        William Online Teaching Resources
                                    </strong>
                                </a>
                            </span>
                        </div>

                        <div class="col profile d-flex justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Welcome <?php echo $_SESSION['username'];  ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu prof" aria-labelledby="navbarDropdown">
                                        <!-- <li> -->
                                        <!-- <a class="dropdown-item" href=""> -->
                                        <div>
                                            <form action="" method="post">
                                                <div class="text-center p-1">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="" class="" width="30">
                                                    <p class="pt-2"><strong>Edit Profile</strong></p>
                                                </div>
                                                <div class="row">
                                                    <div class="col pt-2"><label for="newname" class="form-label">Username</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="newname" id="" class="form-control" value="<?php echo $_SESSION['username'];  ?>">
                                                    </div>
                                                </div>
                                                <div class="mt-3 text-center">
                                                    <button type="submit" name="updater" class="btn btn-outline-light" style="font-size: 12px;"><strong>Save</strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                                        </svg></button>
                                                </div>
                                                <!-- Username : <?php echo $_SESSION['username'];  ?> -->
                                            </form>
                                        </div>
                                        <!-- </a> -->
                                        <!-- </li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="col container2 d-flex justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link"><strong>Home</strong></a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Courses
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="courses.php">Online Courses</a></li>
                                        <li><a class="dropdown-item" href="payment.php">Payments</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact</a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Other
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                        <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="login.php" class="nav-link">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>

            <!-- <div class="container3 d-flex justify-content-end">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div> -->
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row row1">
            <div class="col-lg-12 text-center homepage-title">
                <h3>Best courses to help you fulfill <br>your dreams</h3>
                <h4>Start selecting a course today!</h4>
                <button class="btn btn-outline-info">Get started
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                    <!-- <img src="https://cdn-icons-png.flaticon.com/512/467/467282.png" alt="" width="20"> -->
                </button>
            </div>

        </div>

        <div class="row row2">
            <div class="col-lg-6 d-flex">
                <h3>
                    Become a professional right at your desk.
                </h3>
            </div>
            <div class="col-lg-6 image1">

            </div>
        </div>
    </div>


    <?php

    if (isset($_POST['updater'])) {
        $nametobeUpdated = $_SESSION['username'];
        $newame = $_POST['newname'];
        mysqli_query($connect, "update subscriber set username='$newame' where username='$nametobeUpdated'");
        $_SESSION['username'] = $newame;
        header("Refresh:0");
    }
    ob_end_flush();
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
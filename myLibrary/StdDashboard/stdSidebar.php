<?php

if (!$_SESSION["auth"]) {
    // echo "<script>window.location.href='//localhost/library%20managment%20system%20final/myLibrary-/index.php'</script>";
    echo "<script>window.location.href='../index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">b
    <title> Admin Dashboard </title>
    <!-- Bootstrap 5 Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleCss/stdSidebar.css">
</head>

<body>
    <div class="sidebar open">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Dashboard</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li class="ccc">
                <a class="a" href="std1.php">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li class="ccc">
                <a class="a" href="add_student.php">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Registration</span>
                </a>
                <span class="tooltip">Registration</span>
            </li>

            <li class="ccc">
                <a class="a" href=" issue_book.php">
                    <i class='bx bx-book'></i>
                    <span class="links_name">Issue Order</span>
                </a>
                <span class="tooltip">Issue order</span>
            </li>
            <li class="ccc">
                <a class="a" href="report.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Report</span>
                </a>
                <span class="tooltip">Report</span>
            </li>
            <li class="ccc">
                <a class="a" href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="profile-user.png" alt="profileImg">
                    <div class="name_job">
                        <div class="name"><?php
                                            $conn = mysqli_connect("localhost","root","","my_library");
                                            $email = $_SESSION['email'];
                                            // echo $email;
                                            $query = "SELECT susername FROM signup WHERE semail = '$email'";
                                            $result = mysqli_query($conn, $query);
                                            if($data = mysqli_fetch_assoc($result)){
                                                echo $data['susername'];
                                            }
                                            ?></div>
                        <!-- <div class="job">Web designer</div> -->
                    </div>
                </div>
                <a href="logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
            </li>
        </ul>
    </div>

    <script src="sidebar.js"></script>
</body>

</html>
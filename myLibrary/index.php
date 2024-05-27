<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="css/pr"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Library Managment System</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Student Login</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" id="admin-btn" href="#">Admin Login</a> -->
                        <a class="nav-link" href="./admin/index.php">Admin Login</a>
                        <!-- <button type="button" id="admin-btn" class="btn mx-3 btn-dark btn-lg ">Login</button> -->

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Show Admin  -->

    <div class="admin" id="admin">
        <form class="admin__form" method='post'>
            <h2 class="admin__title">Log In</h2>

            <div class="admin__group">
                <div>
                    <label for="text" class="admin__label">Email</label>
                    <input type="text" name="admin_email" required placeholder="Write your email" id="admin_email" class="admin__input">
                </div>

                <div>
                    <label for="password" class="admin__label">Password</label>
                    <input type="password" name="admin_password" required placeholder="Enter your password" id="password" class="admin__input">
                </div>

            </div>

            <div>
                <p class="admin__signup" style="color:  hsl(230, 75%, 56%);">
                    You do not have an account?
                    <!-- <a href="#">Sign up</a> -->
                    <a type="button" id="signup-btn-admin">Signup</a>

                </p>

                <a href="#" class="admin__forgot">
                    You forgot your password
                </a>

                <button type="submit" name="admin" class="admin__button">Log In</button>
            </div>
        </form>

        <i class="ri-close-line admin__close" id="admin-close"><i class="fa-solid fa-xmark"></i></i>
    </div>

    <!-- Show Login -->

    <div class="login" id="login">
        <form action="index_action.php" class="login__form" method='post'>
            <h2 class="login__title">Log In</h2>

            <div class="login__group">
                <div>
                    <label for="text" class="login__label">Email</label>
                    <input type="text" name="login_email" required placeholder="Write your username or email" id="login_email" class="login__input">
                </div>

                <div>
                    <label for="password" class="login__label">Password</label>
                    <input type="password" name="login_password" required placeholder="Enter your password" id="password" class="login__input">
                </div>

                <div>
                    <!-- <input type="radio" required value="librarian" name="select" id="librarian">
                    <lable style="color: #0a0a0a;"> Librarian </lable>
                    <input type="radio" required value="student" name="select" id="student">
                    <lable style="color: #0a0a0a;"> Student </lable> -->
                    <select required class="login__input"  name="loginSelect" id="">
                        <option value="">Plese Select Login Method</option>
                        <option value="librarian">Librarian login</option>
                        <option value="student">Student login</option>
                    </select>
                </div>
            </div>
            <div>
                <p class="login__signup" style="color:  hsl(230, 75%, 56%);">
                    You do not have an account?
                    <!-- <a href="#">Sign up</a> -->
                    <a type="button" id="signup-btn-login">Signup</a>

                </p>

                <a href="#" class="login__forgot">
                    You forgot your password
                </a>

                <button type="submit" name="login" class="login__button">Log In</button>
            </div>
        </form>

        <i class="ri-close-line login__close" id="login-close"><i class="fa-solid fa-xmark"></i></i>
    </div>
    <!-- <?php

            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $database = "my_library";

            // $conn = new mysqli($servername, $username, $password, $database);
            //        if (isset($_POST['login'])) {
            //         $email = $_POST['login_email'];
            //         $pass = $_POST['login_password'];
            //         $query = "select * from signup where semail='$email' and password='$pass'";
            //         $result = mysqli_query($conn, $query);

            //         if (mysqli_num_rows($result) == 1) {
            //             session_start();
            //             $_SESSION['auth'] = 'true';
            //             $_SESSION['email'] = $email;
            //             echo "<script>window.location.href='./StdDashboard/std1.php'</script>";
            //         } else {
            //             echo "<script>alert('Invalid Usarname and Password') </script>";
            //         }
            //         if (!$result) {
            //             die('Error in query: ' . mysqli_error($conn));
            //         }
            //     }
            ?> -->


    <!-- Show Signup  -->

    <div class="signup" id="signup" onsubmit="checkRadio1()">
        <form action="index_action.php" method="post" class="signup__form">
            <h2 class="signup__title">Sign Up</h2>

            <div class="signup__group">
                <div>
                    <label for="text" class="signup__label">Name</label>
                    <input type="text" name="username" required placeholder="Enter your name" id="name" class="signup__input">
                </div>

                <div>
                    <label for="numbar" class="signup__label">Mobile No</label>
                    <input type="number" name="number" required placeholder="Write your number" id="number" class="signup__input">
                </div>

                <div>
                    <label for="email" class="signup__label">Email</label>
                    <input type="email" name="email" required placeholder="Write your email" id="signup_email" class="signup__input">
                </div>

                <div>
                    <label for="password" class="signup__label">Password</label>
                    <input type="password" name="signup_password" requir placeholder="Enter your password" id="password" class="signup__input">
                </div>

                <div>
                    <label for="librarian">
                        <input type="radio" value="librarian" name="select" id="librarian">
                        <label for="librarian" style="color: #0a0a0a;"> Librarian </label>
                    </label>

                    <lable for="student">
                        <input type="radio" value="student" name="select" id="student">
                        <label for="student" style="color: #0a0a0a;"> Student </label>
                    </lable>
                </div>
            </div>
            <div>
                <p class="signup__signup" style="color:  hsl(230, 75%, 56%);">
                    You have an already account?
                    <!-- <a href="#login">Login</a> -->
                    <a type="button" id="login-btn-signup">Login</a>

                </p>

                <button type="submit" name="submit" class="signup__button">Sign Up</button>
            </div>
        </form>

        <i class="ri-close-line signup__close" id="signup-close"><i class="fa-solid fa-xmark"></i></i>
    </div>
    <div class="container-fluid row ">
        <div class="row">

            <div class="col-6" id="left-col">
                <div class="prompt">
                    <!-- <h1>Welcome </h1> -->
                    <h1>Simplify. Organize. Innovate: My Library System</h1>
                    <p>Discover the ease of managing your library's resources
                        online, ensuring a smooth and engaging experience for
                        both librarians and users. Library is here to redefine
                        how libraries function in the digital age, providing a
                        platform that combines efficiency with a user-centric
                        design. Welcome to Library - where knowledge management meets simplicity.
                    </p>
                    <button type="button" id="login-btn" class="btn mx-3 btn-dark btn-lg ">Login</button>
                    <button type="button" id="signup-btn" class="btn btn-dark btn-lg ">Singup</button>

                    <!-- <li><a class="ri-user-line " id="login-btn">Login</a></li> 
                    <li><a class="ri-user-line " id="signup-btn">Signup</a></li> -->
                </div>
            </div>
            <div class="col-6" id="right-col">
                <img src="./Images/library1.png" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="text-center mt-5">Our Values</h2>
            <div class="row " id="secound_div">
                <div class="col-3" id="digital-resources" style="background-color: #e48c22; color:#2f5a71">
                    <div class="col-7">
                        <h3>Digital Resources</h3>
                        <button class="btn">See more</button>
                    </div>
                    <div class="col-5">
                        <img src="./images/DigitalResources.png" alt="">
                    </div>
                </div>
                <div class="col-3" style="background-color: #543a4b; color:#f6c97c">
                    <div class="col-7">
                        <h3>Our <br> Services</h3>
                        <button class="btn">See more</button>
                    </div>
                    <div class="col-5">
                        <img src="./images/services.png" alt="">
                    </div>
                </div>
                <div class="col-3" style="background-color: #0e7cd8; color:#0e1e39">
                    <div class="col-7">
                        <h3>Events and Programs</h3>
                        <button class="btn">See more</button>
                    </div>
                    <div class="col-5">
                        <img src="./images/events.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="" id="key">
            <h2 class="text-center mt-5">Key Features of Our LMS</h2>
            <div class=" container row">
                <div class="col-7" id="key-feature">
                    <!-- <div class="" id="about-info">
                        <p>At My library management system, we understand the
                            importance of efficient library operations
                            and seamless access to information. Our Library
                            Management System (LMS) is designed to empower
                            librarians, enhance user experiences, and
                            streamline library processes.
                        </p>
                    </div> -->
                    <!-- <div class="" id="our-mission">
                        <h4>Our Mission</h4>
                        <p> our mission is to revolutionize library management
                            by providing a robust, user-friendly, and integrated
                            Library Management System. We aim to simplify library
                            tasks, facilitate collaboration, and ensure patrons
                            have optimal access to the wealth of resources our
                            library has to offer.
                        </p>
                    </div> -->
                    <div id="key-info" class="row mt-5">
                        <div class="col-4">
                            <h5>User-Friendly Interface</h5>
                            <p>Our LMS boasts an intuitive interface, making it easy
                                for librarians to navigate and manage library resources efficiently.
                            </p>
                        </div>
                        <div class="col-4">
                            <h5>Catalog Management</h5>
                            <p>Seamlessly organize, update, and search for library materials
                                through our comprehensive catalog management tools.</p>
                        </div>
                        <div class="col-4">
                            <h5>Member Management</h5>
                            <p>Simplify membership processes, track user activity,
                                and manage member information effortlessly.</p>
                        </div>
                        <div class="col-4 mt-4">
                            <h5>Circulation Control</h5>
                            <p>Streamline the borrowing and return processes with
                                automated circulation controls, reducing manual workload.</p>
                        </div>
                        <div class="col-4 mt-4">
                            <h5>Reports and Analytics</h5>
                            <p> Gain valuable insights into library usage, circulation
                                patterns, and resource popularity through our robust reporting system.</p>
                        </div>
                        <div class="col-4 mt-4">
                            <h5>Multi-Location Support</h5>
                            <p> Perfect for libraries with multiple branches, our LMS
                                supports centralized management and ensures consistent operations across all locations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4" id="key-image">
                    <img id="image" src="./images/boy-in-study-hall--disney-pixar--101263315.png">
                </div>
            </div>
        </div>
        <footer>
            <div class="container" id="contact-us">
                <h2 class="text-center mt-5">Contact Us</h2>
                <ul class="icon">
                    <li><i class="fa-brands fa-github fa-2xl"></i></li>
                    <li><i class="fa-brands fa-linkedin fa-2xl"></i></li>
                    <li><i class="fa-brands fa-instagram fa-2xl"></i></li>
                    <li><i class="fa-brands fa-facebook fa-2xl"></i></li>
                </ul>

                <hr>
                <div class="row">
                    <div class="col-7 mt-5">
                        <div class="row">
                            <div class="col-4">
                                <h5>About Company</h5>
                                <ul class="about-company">
                                    <li>Home</li>
                                    <li>About Us</li>
                                    <li>Services</li>
                                    <li>About Company</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <h5>About Company</h5>
                                <ul class="about-company">
                                    <li>Home</li>
                                    <li>About Us</li>
                                    <li>Services</li>
                                    <li>About Company</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <h5>Contact Info</h5>
                                <ul class="contact-info">
                                    <li> <i class="fa-solid fa-user fa-lg"></i> Tejas Jagdale</li>
                                    <li> <i class="fa-solid fa-envelope fa-lg"></i> rushijagdale1605@gmail.com</li>
                                    <li> <i class="fa-solid fa-phone fa-lg"></i> 9607319433</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" id="contact-info">
                        <p>Thank you for choosing My library managment system your partner in modernizing library
                            operations and enhancing user experiences.</p>
                    </div>
                </div>
            </div>
        </footer>
</body>
<script src="script.js">

</script>

</html>
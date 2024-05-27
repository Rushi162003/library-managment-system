<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_library";
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    echo "Database not connected";
} else {
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['signup_password'];
        $number = $_POST['number'];
        // $sql1 = "INSERT INTO signup(susername,semail,password,mobile)VALUES('$user','$email','$pass','$number')";
        $sql1 = "insert into signup(susername,semail,password,mobile)values('$user','$email','$pass','$number')";
        $query = mysqli_query($conn, $sql1);
        if ($query) {
            echo "<script>alert('Register Scussefully')</script>";
            setcookie("username", "$user", time() + 3600, "/");
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('User not Register')</script>";
        }
    }
    if (isset($_POST['login'])) {
        session_start();
        $email = $_POST['login_email'];
        $pass = $_POST['login_password'];
        $select = $_POST['loginSelect'];
        if ($select == 'student') {
            $sql = "select * from signup where semail='$email' and password='$pass'";
            // $result = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql);
            // if (!$result) {
            //     die("Query failed: " . mysqli_error($conn));
            // }

            if (mysqli_num_rows($result) == 1) {
                // session_start();
                $_SESSION['auth'] = 'true';
                $_SESSION['email'] = $email;
                echo "<script>window.location.href='./StdDashboard/std1.php'</script>";
            } else {
                echo "<script>alert('Invalid username or password')</script>";
                echo "<script>window.location.href='index.php'</script>";
            }
        } else {
            $sql = "select * from admin where username='$email' and password='$pass'";
            // $result = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql);
            // if (!$result) {
            //     die("Query failed: " . mysqli_error($conn));
            // }

            if (mysqli_num_rows($result) == 1) {
                // session_start();
                $_SESSION['auth'] = 'true';
                $_SESSION['username'] = $username;
                echo "<script>window.location.href='./admin/index.php'</script>";
            } else {
                echo "<script>alert('Invalid username or password')</script>";
                echo "<script>window.location.href='index.php'</script>";
            }
        }
    }
}
// }

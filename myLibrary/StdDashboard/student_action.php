<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_library";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];
        $add = $_POST['Address'];
        $country = $_POST['country'];
        $hobbies = $_POST['hobbies'];
        $course = $_POST['course'];
        
        $sql1 = "insert into registered(fname,lname,dob,email,number,gender,address,country,hobbies,course)
        values('$fname','$lname','$dob','$email','$number','$gender','$add','$country','$hobbies','$course')";
        $query = mysqli_query($conn, $sql1);
        if ($query) {
            echo "<script>alert('Register Scussefully')</script>";
            // setcookie("username", "$user", time() + 3600, "/");
            echo "<script>window.location.href='add_student.php'</script>";
        } else {
            echo "<script>alert('User not Register')</script>";
        }
}
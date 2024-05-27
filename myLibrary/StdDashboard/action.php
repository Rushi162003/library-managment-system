<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_library";
$conn = new mysqli($servername,$username,$password,$database);
if(!$conn){
    echo "<script>alert('somthing went wrong')</script>";
}
else{
    $stdname = $_POST['name'];
    $dob = $_POST['dob'];
    $collage = $_POST['clg-name'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $department = $_POST['department'];
    $number = $_POST['mobile'];
    $email = $_POST['email'];
    $std = $_POST['std'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $sql = "insert into `registered`(`name`, `dob`,`collage`,`gender`,`state`,`department`,`number`,`email`,`std`,`city`,`address`)
    values('$stdname','$dob','$collage','$gender','$state','$department','$number','$email','$std','$city','$address')";
    $query = mysqli_query($conn,$sql);
    if($query){
    echo "<script>alert('Thanks for registered')</script>";

    }
}
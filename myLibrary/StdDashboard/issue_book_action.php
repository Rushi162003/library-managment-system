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
    if(isset($_POST["submit"])){
    $bname = $_POST['bname'];
    $bid = $_POST['bid'];
    $author = $_POST['author'];
    $pbyear = $_POST['pbyear'];
    $stdemail = $_POST['semail'];
    $number = $_POST['number'];
    $stdname = $_POST['name'];
    $course = $_POST['course'];
    $sql = "insert into stdbookorder(book_name, book_id,author,pb_year,std_email,std_number,std_name,course)
    values('$bname','$bid','$author','$pbyear','$stdemail','$number','$stdname','$course')";
    $query = mysqli_query($conn,$sql);
    if($query){
    echo "<script>alert('Book request are sent')</script>";
    echo "<script>window.location.href='issue_book.php'</script>";
    }
    else{
    echo "<script>alert('Book request are not sent')</script>";
    echo "<script>window.location.href='issue_book.php'</script>";
    }
}
}
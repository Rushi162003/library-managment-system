<?php
session_start();
if (!$_SESSION["auth"]) {
    // echo "<script>window.location.href='//localhost/library%20managment%20system%20final/myLibrary-/index.php'</script>";
    echo "<script>alert('Please login first')</script>";
    echo "<script>window.location.href='../index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleCss/style.css">
    <title>Student Registration form</title>
</head>

<body>
    <?php
    include "stdSidebar.php";
    ?>
    <section class="home-section">
        <div class="text">
            <div>
                <div class="main">
                    <div id="add_book_container" class="container">
                        <div class="head text-center">
                            <h3>Book Data</h3>
                        </div>
                        <form name="myForm" method="post">
                            <div class=" row">
                                <div class="col-6">
                                    <label for="text">Book Name</label>

                                    <select name="bname" id="bname" class="input" aria-label="Default select example">
                                        <option value="">---- Select Option-----</option>
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "my_library";
                                        $conn = new mysqli($servername, $username, $password, $database);
                                        $sql = "SELECT bookName FROM bookdata";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bookname = $row['bookName'];
                                                echo "<option value = '" . $bookname . "'>" . $bookname . "</option>";
                                            }
                                        } else {
                                            echo "<option value = ''>No book available</option>";
                                        }
                                        if (isset($_POST['search'])) {
                                            $selected_bname = $_POST['bname'];
                                            $sql1 = "SELECT id, author, bookName, price FROM bookdata WHERE bookName = '$selected_bname'";
                                            $result1 = mysqli_query($conn, $sql1);
                                            if ($result1->num_rows > 0) {
                                                $row = $result1->fetch_assoc();
                                                $id = $row['id'];
                                                $author = $row['author'];
                                                $price = $row['price'];
                                                $bookname = $row['bookName'];
                                        ?>
                                                <label for="text" class="">Book Id</label>
                                                <input readonly placeholder=" book-id" type="text" value="<?php echo $row['id'] ?>" id="bid" name="bid" class="input mt-3">
                                                <!-- <input hidden readonly placeholder="author" value="" class="input"> -->
                                                <input readonly type="text" hidden value="<?php echo $bookname ?>" name="bname1" id="bname1">
                                </div>
                                <div class="col-6">


                                    <label for="text">Author</label>
                                    <input readonly placeholder="author" value="<?php echo  $row['author'] ?>" id="author" type="text" name="author" class="input">
                                    <label for="text">Price</label>
                                    <input readonly placeholder="publication year" id="pbyear" value="<?php echo  $row['price'] ?>" type="text" name="pbyear" class="input">
                                </div>
                        <?php
                                            } else {
                                                echo "<script>alert('No data found for selected username.')</script>";
                                            }
                                            $conn->close();
                                        } else {
                                        }
                        ?>
                        </select>


                            </div>

                            <div class=" row">
                                <div class="head mt-5 text-center">
                                    <h3>Student Data</h3>
                                </div>
                                <div class="col-6">
                                    <label for="text">Student email</label>
                                    <input placeholder="student email" type="text" id="semail" name="semail" class="input">
                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "my_library";
                                    $conn = new mysqli($servername, $username, $password, $database);
                                    if (isset($_POST['search'])) {
                                        $email = $_POST['semail'];
                                        $sql2 = "SELECT * FROM registered WHERE email='$email'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        if (mysqli_num_rows($result2) > 0) {
                                            $row2 = mysqli_fetch_assoc($result2);
                                    ?>

                                            <label for="text">Mobile Number</label>
                                            <input placeholder=" mobile-number" id="number" value="<?php echo $row2['number'] ?>" type="number" name="number" class="input">
                                </div>
                                <div class="col-6">
                                    <label for="text">Student Name</label>
                                    <input placeholder="student name" type="text" value="<?php echo $row2['fname'] ?>" id="name" name="name" class="input">
                                    <label for="text">Course</label>
                                    <input id="course" placeholder="course" value="<?php echo $row2['course'] ?>" name="course" class="input"></input>
                                    <input hidden id="email1" placeholder="course" value="<?php echo $row2['email'] ?>" name="email1" class="input"></input>
                                </div>
                        <?php
                                        } else {
                                            echo "<script>alert('No data found for selected username.')</script>";
                                        }
                                    }
                        ?>
                        <div class="button mt-3">
                            <button type="submit" name="search" style="color: white;" onclick="return validateForm()" id="bottone5">Search</button>
                            <button type="submit" name="submit" style="color: white;" id="bottone5">Submit</button>
                        </div>
                        <div class="button mt-3">
                        </div>
                        <!-- <div class="button">
                                    <button name="submit" id="bottone5">Submit</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "my_library";
    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn) {
        echo "<script>alert('somthing went wrong')</script>";
    } else {
        if (isset($_POST["submit"])) {
            $bname = $_POST['bname1'];
            $bid = $_POST['bid'];
            $author = $_POST['author'];
            $pbyear = $_POST['pbyear'];
            $stdemail = $_POST['email1'];
            $number = $_POST['number'];
            $stdname = $_POST['name'];
            $course = $_POST['course'];
            $sql = "insert into stdbookorder(book_name, book_id,author,pb_year,std_email,std_number,std_name,course)
        values('$bname','$bid','$author','$pbyear','$stdemail','$number','$stdname','$course')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo "<script>alert('Book request are sent')</script>";
                echo "<script>window.location.href='issue_book.php'</script>";
            } else {
                echo "<script>alert('Book request are not sent')</script>";
                echo "<script>window.location.href='issue_book.php'</script>";
            }
        }
    }
    ?>

    <script>
        function validateForm() {

            var bname = document.forms['myForm']['bname'].value
            var bid = document.forms['myForm']['semail'].value;

            if (bname == "") {
                alert("First name is empty");

            } else if (bid == "") {
                alert("First username is empty");
                // document.getElementById('fname').style.border = "2px solid red";
                // document.getElementById('fname').style.backgroundColor = "  rgb(255, 100, 100)";
                return false;
            }
            return true;
        }
    </script>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let collapseOpen = document.querySelector(".ccc");
        let collapse = document.querySelector(".coll");
        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
            //calling the function(optional)
        });
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
                // document.querySelector(".collapse").disabled = false;
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
                // document.querySelector(".collapse").disabled = true;

            }
        }
    </script>
</body>



</html>
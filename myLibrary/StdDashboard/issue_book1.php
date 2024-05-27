<?php
session_start();
if (!$_SESSION["auth"]) {
    // echo "<script>window.location.href='//localhost/library%20managment%20system%20final/myLibrary-/index.php'</script>";
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
                                        <option value="Drawing">book name</option>
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
                                            echo $selected_bname;
                                            $sql1 = "SELECT id, author, price FROM bookdata WHERE bookName = '$selected_bname'";
                                            $result1 = mysqli_query($conn, $sql1);

                                            if ($result1->num_rows > 0) {
                                                $row = $result1->fetch_assoc();
                                                $id = $row['id'];
                                                $author = $row['author'];
                                                $price = $row['price'];
                                        ?>
                                                <label for="text" class="">Book Id</label>
                                                <input readonly placeholder=" book-id" type="text" value="<?php echo $row['id'] ?>" id="bid" name="bid" class="input mt-3">
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
                                        }
                        ?>
                        </select>
                        <div class="button">
                            <button name="search" id="bottone5">Search</button>
                        </div>

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
                                    $conn = new mysqli($servername,$username,$password,$database);
                                    if (isset($_POST['std_search'])){
                                        $email = $_POST['semail'];
                                        $sql2 = "SELECT * FROM registered WHERE email='$email'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        if (mysqli_num_rows($result2) > 0) {
                                            $row2 = mysqli_fetch_assoc($result2);
                                    ?>

                                            <label for="text">Mobile Number</label>
                                            <input placeholder=" mobile-number" id="number" value=<?php echo $row2['number'] ?> type="number" name="number" class="input">
                                </div>
                                <div class="col-6">
                                    <label for="text">Student Name</label>
                                    <input placeholder="student name" type="text" value=<?php echo $row2['fname'] ?> id="name" name="name" class="input">
                                    <label for="text">Course</label>
                                    <input id="course" placeholder="course" value=<?php echo $row2['course'] ?> name="course" class="input"></input>
                                </div>
                        <?php
                                        } else {
                                            echo "<script>alert('No data found for selected username.')</script>";
                                        }
                                    } 
                                    else {
                                        echo "<script>alert('No database connection found.')</script>";
                                    }
                        ?>
                        <div class="button">
                            <button name="std_search" id="bottone5">Search</button>
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

        function validateForm() {
            // var fname = document.forms['myForm']('fname').value;
            // var lname = document.forms['myForm']('lname').value;
            // var dob = document.forms['myForm']('date').value; // Corrected the element ID
            // var email = document.forms['myForm']('email').value;
            // var course = document.forms['myForm']('course').value;
            // var number = document.forms['myForm']('number').value;
            // var gender = document.forms['myForm']('gender').value;
            // var address = document.forms['myForm']('address').value;
            // var country = document.forms['myForm']('country').value;
            // var hobbies = document.forms['myForm']('hobbies').value;
            var bname = document.forms['myForm']['bname'].value
            var bid = document.forms['myForm']['bid'].value;
            var author = document.forms['myForm']['author'].value; // Corrected the element ID
            var year = document.forms['myForm']['pbyear'].value;
            var sid = document.forms['myForm']['sid'].value;
            var number = document.forms['myForm']['number'].value;
            var sname = document.forms['myForm']['name'].value;
            var course = document.forms['myForm']['course'].value;

            if (bname === "") {
                // alert("First name is empty");
                document.getElementById('fname').style.border = "2px solid red";
                // document.getElementById('fname').style.backgroundColor = "  rgb(255, 100, 100)";
                document.getElementById('fname_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (bid === "") {
                document.getElementById('lname').style.border = "2px solid red";
                document.getElementById('lname_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (author === "") {
                document.getElementById('date').style.border = "2px solid red";
                document.getElementById('dob_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (year === "") {
                document.getElementById('email').style.border = "2px solid red";
                document.getElementById('email_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (sid === "") {
                document.getElementById('course').style.border = "2px solid red";
                document.getElementById('course_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (number === "") {
                document.getElementById('number').style.border = "2px solid red";
                document.getElementById('number_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (sname === "") {
                document.getElementById('address').style.border = "2px solid red";
                document.getElementById('add_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (course === "") {
                document.getElementById('gender').style.border = "2px solid red";
                document.getElementById('gender_p').innerHTML = "Please fill this filed ";
                return false;
            }

            return true;
        }
    </script>
</body>



</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Admin Dashboard </title>
    <!-- Bootstrap 5 Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleCss/style.css">
</head>

<body>
    <?php
    include "stdSidebar.php";
    ?>
    <section class="home-section">
        <div class="text">
            <div class="main">
                <div id="add_book_container" class="container">
                    <div class="head text-center">
                        <h3>Add Book Stock</h3>
                    </div>
                    <?php
                    $host = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $db = 'my_library';
                    $conn = mysqli_connect($host, $user, $pass, $db);

                    // Check if issueid is set in the URL
                    if (isset($_GET['issueid'])) {
                        $id = $_GET['issueid'];
                        $sql = "SELECT bookName, author, email, name, number FROM issuebook WHERE issueid=$id";
                        $result = mysqli_query($conn, $sql);
                        if ($result && mysqli_num_rows($result) > 0) {
                            $data = mysqli_fetch_array($result);
                            $bname = $data['bookName'];
                            $author = $data['author'];
                            $email = $data['email'];
                            $name = $data['name'];
                            $number = $data['number'];
                        } else {
                            echo "Issue ID not found";
                            exit;
                        }
                    } else {
                        echo "Issue ID is not set";
                        exit;
                    } 

                    if (isset($_POST['return'])) {
                        $bname = $_POST['bname'];
                        $author = $_POST['author'];
                        $sname = $_POST['sname'];
                        $semail = $_POST['semail'];
                        $number = $_POST['number'];
                        // Wrap 'return' in backticks to avoid conflicts with SQL keyword
                        $sql1 = "INSERT INTO `return_data` (bookName, name, author, email, number) VALUES ('$bname', '$sname', '$author', '$semail', '$number')";
                        $result1 = mysqli_query($conn, $sql1);
                        if ($result1) {
                            $sql2 = "DELETE FROM issuebook WHERE issueid = $id";
                            $result2 = mysqli_query($conn, $sql2);
                            if ($result2) {
                                echo "<script>alert('Book has been returned by the student')</script>";
                                echo "<script>window.location.href = 'report.php'</script>";
                            }
                        }
                    }
                    ?>
                    <form name="myForm" method="post">
                        <div class=" row">
                            <div class="col-6">
                                <label for="text">Book Name</label>
                                <input class="input" type="text" name="bname" id="bname" value="<?php echo $bname ?>" readonly>
                                <label for="text">Author</label>
                                <input readonly class="input" type="text" name="author" id="author" value="<?php echo $author ?>">
                                <div class="button mt-3">
                                    <button type="submit" name="return" id="bottone5">Return</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="text">Student Name</label>
                                <input readonly class="input" type="text" name="sname" id="sname" value="<?php echo $name ?>">
                                <label for="text">Student Email</label>
                                <input readonly class="input" type="text" name="semail" id="semail" value="<?php echo $email ?>">
                                <label for="text">Student Number</label>
                                <input readonly class="input" type="text" name="number" id="number" value="<?php echo $number ?>">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="index.js"></script>
</body>

</html>
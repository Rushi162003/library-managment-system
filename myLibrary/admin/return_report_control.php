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
    include 'sidebar.php';
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
                    if (isset($_GET['return_id'])) {
                        $id = $_GET['return_id'];
                        $sql = "SELECT * FROM return_data WHERE return_id=$id";
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
                        }
                    } else {
                        echo "Issue ID is not set";
                    }

                    if (isset($_POST['approve'])) {

                        $book_rec = $_POST['book_re'];
                        // Wrap 'return' in backticks to avoid conflicts with SQL keyword
                        $sql1 = "UPDATE return_data SET approve = '$book_rec' WHERE  return_id=$id";
                        $result1 = mysqli_query($conn, $sql1);
                        if ($result1) {
                            $sql3 = "UPDATE bookdata SET quantity = quantity + 1 WHERE bookName = '$bname'";
                            $result3 = mysqli_query($conn, $sql3);
                            echo "<script>alert('Book has been returned by the student')</script>";
                            echo "<script>window.location.href = 'return_report.php'</script>";
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
                                <label for="text">Book Reviced</label>
                                <select readonly class="input" type="text" name="book_re" id="book_re">
                                    <option value="book recived">Book Recived</option>
                                    <option value="book not recived">Book not Recived</option>
                                </select>
                                <div class="button mt-3">
                                    <button type="submit" name="approve" id="bottone5">Approve</button>
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
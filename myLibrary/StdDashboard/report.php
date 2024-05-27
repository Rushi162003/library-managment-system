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
                            <h3>Student Order Book</h3>
                        </div>
                        <table class="table table-dark text-center table-striped">
                            <thead>
                                <tr>

                                    <th>Issue Id</th>
                                    <th>Book Name</th>
                                    <th>Author</th>
                                    <th>Student Email</th>
                                    <th>Student Name</th>
                                    <th>Mobile Number</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "my_library";
                                $conn = new mysqli($servername, $username, $password, $database);
                                $email = $_SESSION['email'];
                                if ($conn) {
                                    $sql = "SELECT * FROM issuebook WHERE email='$email'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($data = mysqli_fetch_row($result)) {
                                ?>
                                        <tr>
                                            <td><?php echo $data[0] ?></td>
                                            <td><?php echo $data[1] ?></td>
                                            <td><?php echo $data[2] ?></td>
                                            <td><?php echo $data[3] ?></td>
                                            <td><?php echo $data[4] ?></td>
                                            <td><?php echo $data[5] ?></td>
                                            <td><a class="btn btn-primary" href="report_control.php?issueid=<?php echo $data[0]; ?>">Return</a></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                  ?>
                                  <p>The Cart in Empty</p>
                                  <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>


    </script>
</body>



</html>
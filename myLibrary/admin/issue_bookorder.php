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
    <link rel="stylesheet" href="./style/sidebar.css">
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
                        <h3>Student Order Book</h3>
                    </div>
                    <table class="table table-dark text-center table-striped">
                        <thead>
                            <tr>
                                <th>Book Name</th>
                                <th>Author</th>
                                <th>Student Email</th>
                                <th>Student Name</th>
                                <th>Mobile Number</th>
                                <th>Issue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "my_library";
                            $conn = new mysqli($servername, $username, $password, $database);
                            if (!$conn) {
                                echo "<script>alert('Database is not connected')</script>";
                            } else {
                                $sql = "SELECT * FROM stdbookorder";
                                $result = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_row($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $data[1] ?></td>
                                        <td><?php echo $data[3] ?></td>
                                        <td><?php echo $data[5] ?></td>
                                        <td><?php echo $data[7] ?></td>
                                        <td><?php echo $data[6] ?></td>
                                        <td><a class="btn btn-primary" href="issue_control.php?order_id=<?php echo $data[0]; ?>">Issue</a></td>
                                        <!-- <td><a class="btn btn-primary" href="update.php?id=<?php echo $data[0]; ?>">Update</a></td> -->


                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="index.js">
    </script>
</body>

</html>
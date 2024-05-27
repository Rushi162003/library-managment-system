<?php
session_start();
if (!$_SESSION["auth"]) {
  echo "<script>window.location.href='../index.php'</script>";
}
?>
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
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <div class="container">
          <!-- <div class="head text-center">
            <h3>Add Book Stock</h3>
          </div> -->
          <div class=" main-side">
            <div class="col1">
              <div class="card">
                <div class="card-single">
                  <div>
                    <h1><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "my_library";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "SELECT count(semail) as email_count FROM signup";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          $data = $result->fetch_assoc();
                          echo $data['email_count'];
                        } else {
                          echo "0";
                        }

                        $conn->close();
                        ?></h1>
                    <span>Students</span>
                  </div>
                  <div>
                    <span class="bx bxs-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col1">
              <div class="card">
                <div class="card-single">
                  <div>
                    <h1><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "my_library";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "SELECT count(bookName) as bookname_count FROM bookdata";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          $data = $result->fetch_assoc();
                          echo $data['bookname_count'];
                        } else {
                          echo "0";
                        }

                        $conn->close();
                        ?></h1>
                    <span>Books</span>
                  </div>
                  <div>
                    <span class="bx bxs-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col1">
              <div class="card">
                <div class="card-single">
                  <div>
                    <h1><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "my_library";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "SELECT count(email) as bookName FROM return_data";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          $data = $result->fetch_assoc();
                          echo $data['bookName'];
                        } else {
                          echo "0";
                        }

                        $conn->close();
                        ?></h1>
                    <span>Reports</span>
                  </div>
                  <div>
                    <span class="bx bxs-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col1">
              <div class="card">
                <div class="card-single">
                  <div>
                    <h1><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "my_library";
                        $conn = new mysqli($servername, $username, $password, $database);
                        $sql = "SELECT count(email) as bookName FROM issuebook";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          $data = $result->fetch_assoc();
                          echo $data['bookName'];
                        } else {
                          echo "0";
                        }

                        $conn->close();
                        ?></h1>
                    <span>Issue</span>
                  </div>
                  <div>
                    <span class="bx bxs-user"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5 text-center"><h2>No of Student</h2></div>
          <table class="table table-dark mt-5 text-center table-striped">
            <thead>
              <tr>
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Mobile Number</th>
                <th>Date</th>
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
                $sql = "SELECT * FROM signup  ";
                $result = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_row($result)) {
              ?>
                  <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[4] ?></td>
                    <td><?php echo $data[5] ?></td>
                    <!-- <td><?php echo $data[6] ?></td> -->
                    <!-- <td><a class="btn btn-primary" href="issue_control.php?order_id=<?php echo $data[0]; ?>">Issue</a></td> -->
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
    </div>
  </section>
  <!-- <script src="index.js"></script> -->
</body>

</html>
<?php
session_start();
if (!$_SESSION["auth"]) {

  echo "<script>alert('Please Login first')</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Student Dashboard </title>
  <!-- Bootstrap 5 Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styleCss/style.css">
</head>

<body> 
  <?php 
  include 'stdSidebar.php';
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
                    <h1>4</h1>
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
                    <h1>4</h1>
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
                    <h1>454</h1>
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
                    <h1>4</h1>
                    <span>Issue</span>
                  </div>
                  <div>
                   
                    <span class="bx bxs-user"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <article>
    <div class="std_table">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Name</th>
          </tr>
        </thead>
      </table>
    </div>
  </article>
  <script src="std.js"></script>
  <h1><?php $_SESSION['email']?></h1>
</body>

</html>
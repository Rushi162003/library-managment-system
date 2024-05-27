<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">b
  <title> Admin Dashboard </title>
  <!-- Bootstrap 5 Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styleCss/style.css">
</head>

<body>
  <div class="sidebar open">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Dashboard</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li class="" active>
        <a href="#">
          <i class='bx bx-home'></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li class="ccc">
        <a onclick="dropdown(this)" class="coll" data-bs-toggle="collapse" href="#collapseExample" role="button"
          aria-controls="collapseExample">
          <i class='bx bx-book'></i>
          <span class="links_name">Book Control</span>
        </a>
        <span class="tooltip">Book Control</span>
      </li>
      <div class="collapse" id="collapseExample">
        <div class="">
          <ul>
            <li><a href="/library managment system final/-My-Library-/admin/componants/add_book.php"><span class="links_name p-2">Add Book</span></a></li>
            <li><a href="#"><span class="links_name p-2">Display Book</span></a></li>
            <li><a href="#"><span class="links_name p-2">Edit Book</span></a></li>
            <li><a href="#"><span class="links_name p-2">Delete Book</span></a></li>
          </ul>
          <!-- <div >
            <button ><i class="fa-solid fa-house"></i> Home</button>
            <button ></i> Registration</button>
            <button ></i> View and Update</button>
            <button >Settings</button>
          </div> -->
        </div>
      </div>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Issue Book</span>
        </a>
        <span class="tooltip">Issue Book</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Return Book</span>
        </a>
        <span class="tooltip">Return Book</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder'></i>
          <span class="links_name">Stock of Book</span>
        </a>
        <span class="tooltip">Stock</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat'></i>
          <span class="links_name">Report</span>
        </a>
        <span class="tooltip">Report</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <img src="profile.jpg" alt="profileImg">
          <div class="name_job">
            <div class="name">Prem Shahi</div>
            <div class="job">Web designer</div>
          </div>
        </div>
        <a href="\library managment system final\-My-Library-\admin\sidebar\logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
      </li>
    </ul>
  </div>
  <script src="sidebar.js"></script>
</body>

</html>
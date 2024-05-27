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
            <h3>Add Book Stock</h3>
          </div>
          <form name="myForm" action="action.php" method="post">
            <div class=" row">
              <div class="col-6">
                <label for="text">Book Id</label>
                <input placeholder="Book-id" readonly type="text" id="book-id" name="book-id" class="input">
                <p id="bid_id"></p>
                <label for="text">Author</label>
                <input placeholder=" Author" autocomplete="none" type="text" id="author" name="author" class="input">
                <p id="author_id"></p>
                <label for="text">Pages</label>
                <input placeholder=" No of Pages" autocomplete="none" type="number" id="pages" name="pages" class="input">
                <p id="pages_id"></p>
                <label for="text">Quantity</label>
                <input placeholder="Quantity" autocomplete="none" id="qty" type="number" name="qty" class="input">
                <p id="qty_id"></p>
              </div>
              <div class="col-6">
                <label for="text">Book Name</label>
                <input placeholder=" Book-name" autocomplete="none" id="book-name" type="text" name="book_name" class="input">
                <!-- <input type="text" name="book_name" placeholder="Enter book name"> -->

                <p id="bname_id"></p>
                <label for="text">Publication</label>
                <input placeholder="Publication" autocomplete="none" id="publication" type="text" name="publication" class="input">
                <p id="pb_id"></p>
                <label for="text">Publication Year</label>
                <input placeholder=" Publication Year" autocomplete="none" id="pb-year" type="number" name="pb_year" class="input">
                <p id="pbyear_id"></p>
                <label for="text">Price</label>
                <input placeholder="price" autocomplete="none" id="price" type="number" name="price" class="input">
                <p id="price_id"></p>
              </div>
              <div class="button mt-3">
                <button type="submit" name="submit" id="bottone5">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="index.js">
  </script>
</body>

</html>
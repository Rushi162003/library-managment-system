
  <?php
    // error_reporting(E_ALL);/
    echo "Hello, world!";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "my_library";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $pages = $_POST['pages'];
        $qty = $_POST['qty'];
        $bname = $_POST['book_name'];
        $publication = $_POST['publication'];
        $pbyear = $_POST['pb_year'];
        $price = $_POST['price'];

        $sql = "INSERT INTO bookdata(bookName, author, publication, pages, pbyear, quantity, price) VALUES ('$bname', '$author', '$publication', '$pages', '$pbyear', '$qty', '$price')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Book added successfully')</script>";
            echo "<script>window.location.href = 'add_book.php'</script>";
        } else {
            // echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
            echo "<script>alert('Book not  added successfully')</script>";
            echo "<script>window.location.href = 'add_book.php'</script>";
        }
    }

    $conn->close();
    ?>

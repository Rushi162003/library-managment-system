<?php 
session_start();
session_destroy();
echo "<script>alert('Logout Succesfull')</script>";
echo "<script>window.location.href='/library managment system final/myLibrary/index.php'</script>";

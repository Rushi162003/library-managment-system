<?php
session_start();
if (!$_SESSION["auth"]) {
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
                            <h3>Student Registration Form</h3>
                        </div>
                        <form name="myForm" onsubmit="return validateForm()" action="student_action.php" method="post">
                            <div class=" row">
                                <div class="col-6">
                                    <label for="text">First Name</label>
                                    <input placeholder="first-name" type="text" id="fname" name="fname" class="input">
                                    <p class="ptag" id="fname_p" style="color: red;"></p>
                                    <label for="text">Last Name</label>
                                    <input placeholder=" last-name" type="text" id="lname" name="lname" class="input">
                                    <p class="ptag" id="lname_p"></p>
                                    <label for="text">Date of Birth</label>
                                    <input type="date" id="date" name="date" class="input">
                                    <p class="ptag" id="dob_p"></p>
                                    <label for="text">Email</label>
                                    <input placeholder="email" id="email" type="email" name="email" class="input">
                                    <p class="ptag" id="email_p"></p>
                                    <label for="text">Course</label>
                                    <input placeholder="course" id="course" type="text" name="course" class="input">
                                    <p class="ptag" id="course_p"></p>
                                </div>
                                <div class="col-6">
                                    <label for="text">Mobile Number</label>
                                    <input placeholder=" mobile-number" id="number" type="number" name="number" class="input">
                                    <p class="ptag" id="number_p"></p>
                                    <label for="text">Gender</label>
                                    <select name="gender" class="input" aria-label="Default select example">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <p class="ptag" id="gender_p"></p>
                                    <label for="text">Address</label>
                                    <textarea id="address" name="Address" rows="4" cols="30" class="input"></textarea>
                                    <p class="ptag" id="add_p"></p>
                                    <label for="text">Country</label>
                                    <input placeholder="India" readonly value="India" id="country" type="text" name="country" class="input">
                                    <p class="ptag" id="country_p"></p>
                                    <label for="text">Hobbies</label>
                                    <select name="hobbies" class=" input" aria-label="Default select example">
                                        <option value="Drawing">Drawing</option>
                                        <option value="Playing">Playing</option>
                                        <option value="Singing">Singing</option>
                                        <option value="Dancing">Dancing</option>
                                        <option value="Riding">Riding</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <p class="ptag" id="hobbies_p"></p>
                                </div>
                                <div class="button">
                                    <button id="bottone5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let collapseOpen = document.querySelector(".ccc");
        let collapse = document.querySelector(".coll");
        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
            //calling the function(optional)
        });
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
                // document.querySelector(".collapse").disabled = false;
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
                // document.querySelector(".collapse").disabled = true;

            }
        }

        function validateForm() {
            // var fname = document.forms['myForm']('fname').value;
            // var lname = document.forms['myForm']('lname').value;
            // var dob = document.forms['myForm']('date').value; // Corrected the element ID
            // var email = document.forms['myForm']('email').value;
            // var course = document.forms['myForm']('course').value;
            // var number = document.forms['myForm']('number').value;
            // var gender = document.forms['myForm']('gender').value;
            // var address = document.forms['myForm']('address').value;
            // var country = document.forms['myForm']('country').value;
            // var hobbies = document.forms['myForm']('hobbies').value;
            var fname = document.forms['myForm']['fname'].value
            var lname = document.forms['myForm']['lname'].value;
            var dob = document.forms['myForm']['date'].value; // Corrected the element ID
            var email = document.forms['myForm']['email'].value;
            var course = document.forms['myForm']['course'].value;
            var number = document.forms['myForm']['number'].value;
            var gender = document.forms['myForm']['gender'].value;
            var address = document.forms['myForm']['address'].value;
            var country = document.forms['myForm']['country'].value;
            var hobbies = document.forms['myForm']['hobbies'].value;
            if (fname === "") {
                // alert("First name is empty");
                document.getElementById('fname').style.border = "2px solid red";
                // document.getElementById('fname').style.backgroundColor = "  rgb(255, 100, 100)";
                document.getElementById('fname_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (lname === "") {
                document.getElementById('lname').style.border = "2px solid red";
                document.getElementById('lname_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (dob === "") {
                document.getElementById('date').style.border = "2px solid red";
                document.getElementById('dob_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (email === "") {
                document.getElementById('email').style.border = "2px solid red";
                document.getElementById('email_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (course === "") {
                document.getElementById('course').style.border = "2px solid red";
                document.getElementById('course_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (number === "") {
                document.getElementById('number').style.border = "2px solid red";
                document.getElementById('number_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (gender === "") {
                document.getElementById('gender').style.border = "2px solid red";
                document.getElementById('gender_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (address === "") {
                document.getElementById('address').style.border = "2px solid red";
                document.getElementById('add_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (country === "") {
                document.getElementById('country').style.border = "2px solid red";
                document.getElementById('country_p').innerHTML = "Please fill this filed ";
                return false;
            } else if (hobbies === "") {
                document.getElementById('hobbies').style.border = "2px solid red";
                document.getElementById('hobbies_p').innerHTML = "Please fill this filed ";
                return false;
            }

            return true;
        }
    </script>
</body>



</html>
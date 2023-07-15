<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Registration Form</title>
</head>

<body>

    <section class="header">

        <a href="registration.php" class="logo">travel</a>

        <nav class="navbar">

            <a href="registration.php">register</a>

            <a href="login.php">login</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>



    </section>
    <div class="container" style=" max-width: 600px;
  margin: 0 auto;
  padding: 50px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; margin-top:100px;">



        <?php
        if (isset($_POST['submit'])) {
            $fullName = htmlspecialchars($_POST['fullname']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $passwordRepeat = htmlspecialchars($_POST['repeat_password']);
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid email address");
            }
            // if (count($password) < 8) {
            //     array_push($errors, "Password must be greater than 8 characters");
            // }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be greater than 8 characters");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "./database.php";
            $sql = "SELECT * FROM users WHERE email ='$email'";
            // opt 1
            $result = mysqli_query($conn, $sql);
            // 
            // opt 2
            // $temp = mysqli_fetch_assoc($result);
            // 
            $rowCount = mysqli_num_rows($result);
            // this down here also works
            // if ($temp ) {
            //     array_push($errors, "Email already exist");
            //     echo "<div class='alert alert-danger'>
            //     email already exist
            // </div>";
            // }

            if ($rowCount > 0) {
                array_push($errors, "Email already exist");
                echo "<div class='alert alert-danger'>
                email already exist
            </div>";
            } else {
                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>
                    $error
                </div>";
                    }
                } else {

                    $fullName = mysqli_real_escape_string($conn, $fullName);
                    $email = mysqli_real_escape_string($conn, $email);
                    $passwordHash = mysqli_real_escape_string($conn, $passwordHash);
                    echo $fullName;
                    echo $email;
                    echo $passwordHash;
                    $sql = "INSERT INTO users VALUES(DEFAULT,'$fullName','$email','$passwordHash')";

                    if (mysqli_query($conn, $sql)) {
                        echo "Inside";
                        echo "<div class='alert alert-success'>You have been registered successfully. $fullName  </div>";
                    } else {
                        die("SQL Error: " . mysqli_error($conn));
                    }
                    // $stmt =  mysqli_stmt_init($conn);
                    // $prepareStmt =  mysqli_stmt_prepare($stmt, $sql);
                    // if ($prepareStmt) {
                    // }
                }
            }
            // echo "<div class='alert alert-danger'>Email is already taken choose a different one</div>";


        }

        ?>
        <h1 class="heading-title">register</h1>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input autofocus class="form-control" style="  margin-bottom: 30px; padding:15px 10px; border-radius:10px " type="text" name="fullname" placeholder="Full name" />
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" style="  margin-bottom: 30px; text-transform:lowercase;padding:15px 10px; border-radius:10px" placeholder="Email" />
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" style="  margin-bottom: 30px;padding:15px 10px; border-radius:10px" />
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="repeat_password" placeholder="Repeat password" style="  margin-bottom: 30px; text-transform:lowercase;padding:15px 10px; border-radius:10px" />
            </div>
            <div class="form-btn" style="display:flex;justify-content:center">
                <input class="btn btn-primary" type="submit" name="submit" , value="Register" style="  margin-bottom: 30px; width:80%" />
            </div>
            <p>Already registered? <a href="login.php" style="font-size: 15px; font-weight:700; ">login</a></p>
        </form>
    </div>

</body>

</html>
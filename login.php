<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Login form</title>
</head>

<body>

    <<section class="header">

        <a href="login.php" class="logo">travel</a>

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

            if (isset($_POST['login'])) {

                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);
                require_once "./database.php";
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);




                if ($user) {
                    if (password_verify($password, $user['password'])) {
                        echo "<div class='alert alert-success'>email and password  exist</div> ";
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: home.php");
                        die();
                    } else {
                        echo "<div class='alert alert-danger'>password does not exist</div> ";
                    }
                } else {
                    echo "<div class='alert alert-danger'>email or password do not exist</div> ";
                }
            }

            ?>
            <h1 class="heading-title">login</h1>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input autofocus type="email" style="  margin-bottom: 30px; padding:15px 10px; border-radius:10px" placeholder="Enter email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" style="  margin-bottom: 30px; padding:15px 10px;border-radius:10px " placeholder="Enter password" name="password" class="form-control">
                </div>
                <div class="form-btn" style="display:flex;justify-content:center">
                    <input type="submit" style="  margin-bottom: 30px;width:80% " value="Login" name="login" class="btn btn-primary">
                </div>
                <p>Not registered <a href="registration.php" style="font-size: 15px; font-weight:700; ">register</a></p>

            </form>
        </div>


</body>

</html>
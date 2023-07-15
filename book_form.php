<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "book_db";

$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if (!$connection) {
    echo "Sdomething went wrong with mysql connection";
} else {
    echo "Connected successfully";
}
if (isset($_POST['send'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $location = htmlspecialchars($_POST['location']);
    $guests = htmlspecialchars($_POST['guests']);
    $arrivals = htmlspecialchars($_POST['arrivals']);
    $leaving = htmlspecialchars($_POST['leaving']);

    $sql = "INSERT INTO  book_form VALUES(DEFAULT,'$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
    mysqli_query($connection, $sql);
    header('Location:home.php');
}

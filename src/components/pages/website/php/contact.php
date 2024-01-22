<?php

if(isset($_POST['submit']))
{
    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtPhone = $_POST['txtPhone'];
    $txtMessage = $_POST['txtMessage'];
}

$host = "localhost";
$username = "root";
$password - "";
$dbname = "db_contact";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con)
{
    die("Connection Failed!" . mysqli_connect_error());
}

$sql = "INSERT INTO contactform_entries (txtName, txtEmail, txtPhone, txtMessage) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

$rs = mysqli_query($con, $sql);
if ($rs)
{
    echo "Entries Added!";
}

mysqli_close($con);


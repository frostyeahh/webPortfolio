<?php

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $txtName = $_POST['fldName'];
    $txtEmail = $_POST['fldEmail'];
    $txtPhone = $_POST['fldPhone'];
    $txtMessage = $_POST['fldMessage'];
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

$sql = "INSERT INTO contactform_entries (txtName, txtEmail, txtPhone, txtMessage) VALUES ('0','$id', '$fldName', '$fldEmail', '$fldPhone', '$fldMessage')";

$rs = mysqli_query($con, $sql);
if ($rs)
{
    echo "Entries Added!";
}

mysqli_close($con);


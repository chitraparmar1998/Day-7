<?php
//DB Connection
$host = "localhost";
$usename = "root";
$passwd = "";
$dbname = "db_bakecorner";
$connection = mysqli_connect("localhost","root","","db_bakecorner");

$id = $_GET['deleteid'];

$q=mysqli_query($connection,"update tbl_customer set is_delete = 1 where customer_id = '{$id}'") or die("Error".mysqli_error($connection));

if ($q)
{
     echo "<script>alert('Record Deleted');window.location='3table.php';</script>";
}


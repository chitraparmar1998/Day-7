<?php
//DB Connection
$host = "localhost";
$usename = "root";
$passwd = "";
$dbname = "db_bakecorner";
$connection = mysqli_connect("localhost","root","","db_bakecorner");

//Query
$q=mysqli_query($connection,"select * from tbl_customer") or die("Error".mysqli_error($connection));

//below function will fetch data as a numerical array
$row=mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//numerical & assositive
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['customer_id'].$row['customer_name'].$row['customer_gender'].$row['customer_mobile'];





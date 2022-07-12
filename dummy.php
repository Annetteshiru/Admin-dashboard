<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn=mysqli_connect($server, $username, $password, $database);
$sqlquery = mysqli_query($conn,"SELECT * FROM enrollment");
$countRecords = mysqli_num_rows($sqlquery);

while ($fetchRecords = mysqli_fetch_array($sqlquery)){
echo $fetchRecords ['fullName'];
echo $fetchRecords['phonenumber'];
echo $fetchRecords['emailaddress'];
echo $fetchRecords['gender'];
echo $fetchRecords['course'].'<br>';

}
?>
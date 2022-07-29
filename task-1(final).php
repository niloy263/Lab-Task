<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "base";

$uname = "niloy";
$pass = "123";

$conn = new mysqli($servername, $username, $password, $dname, $uname, $pass)
$q = "insert into Table(Uname, Pass)" values(".$uname.",".$pass.");
$result = $conn->query($q);
 
$q = "update into Table set Pass= '".$pass.'" where uname='adhar'";
$result = $conn->query($q);

$q = "delete from Table where id=2";
$result = $conn->query($q);

?>
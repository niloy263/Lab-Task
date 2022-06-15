<form action ="Registration.php" method ="post">
<?php
echo "<h2>Welcome to Registration Form<br><br><br><br><br></h2>";
echo "<h3>Username : ".$_POST["uname"]."<br></h3>";
echo "<h3>Password : ".$_POST["pass"]."<br></h3>";
echo "<h3>Email Address: ".$_POST["email"]."<br></h3>";
echo "<h3>Address: ".$_POST["address"]."<br></h3>";
echo "<h3>Gender: ".$_POST["gender"]."<br></h3>";
echo "<h3>Skills: </h3>";
foreach($_POST["skills"] as $b)
{
	echo $b." "."<br>";
}
echo "<h3>Department: ".$_POST["dept"]."<br></h3>";

?>
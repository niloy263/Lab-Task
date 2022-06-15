<form action ="Registrationresult.php" method ="post">
<!DOCTYPE html>
<html>
<style>
.error {color: #ccff99;}
</style>
 <h1><center> Regisration form </center></title></h1>
<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>


<?php
$isPost=false;
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]="")
		$password=$_POST["pass"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Password:<input type="password" id="pass" name="pass"><br><br>
<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>


<form action="#" method="post">
Email Address:<input type="emailaddress" id="email" name="email"> <br><br>
<?php
if($isPost==true && $emailaddress=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<?php
$isPost=false;
$address="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["address"]="")
		$address=$_POST["address"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>
<?php
if($isPost==true && $address=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<?php
$isPost=false;
$gender="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["gender"]="")
		$gender=$_POST["gender"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<br><br>
<?php
if($isPost==true && $gender=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<?php
$isPost=false;
$skills="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["skills"]="")
		$skills=$_POST["skills"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python<br><br>
<?php
if($isPost==true && $skills=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<?php
$isPost=false;
$department="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["department"]="")
		$department=$_POST["dept"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Department:<select name="dept">
<option value="FST">FST</option>
<option value="FBA">FBA</option>
<option value="FASS">FASS</option>
</select><br><br>
<?php
if($isPost==true && $department=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<input type="submit" value="Submit" name="btnClick">
</form>
</html>
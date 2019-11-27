<?php include 'db.php';?>
<?php
//create a variable
$FirstName=$_POST['First_Name'];
$LastName=$_POST['Last_Name'];
$gender=$_POST['Gender'];
$dob=$_POST['DOB'];
$email=$_POST['Email'];
$user=$_POST['Username'];
$pass=$_POST['Password'];

mysqli_query($connect,"INSERT into registers(First_Name,Last_Name,Gender,DOB,Email,Username,Password) VALUES('$FirstName','$LastName','$gender','$dob','$email','$user','$pass')");

if(mysqli_affected_rows($connect)>0)
{
	echo "<p>Registration Completed</p>";
	mysqli_query($connect,"select * from registers");
	echo 
	"+----------------------------+<br>";
	echo "<a href='homepage.html'> Go back</a>";
}
   else
   {
   echo "REGISTRATION FAILED";
   echo mysqli_error($connect);
   }
 ?>  
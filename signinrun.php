<?php include 'db.php';?>
<?php
//create a variable
$user=$_POST['username'];
$pass=$_POST['password'];

mysqli_query($connect,"INSERT into signin(username,password) VALUES('$user','$pass')");

if(mysqli_affected_rows($connect)>0)
{
	echo "<p>sign in Completed</p>";
	mysqli_query($connect,"select * from signin");
	echo 
	"+----------------------------+<br>";
	echo "<a href='homepage.html'>Go back</a>";
}
   else
   {
   echo "sign in FAILED";
   echo mysqli_error($connect);

   }
 ?>  
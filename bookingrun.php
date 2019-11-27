<?php include 'db.php';?>
<?php
//create a variable
$room=$_POST['Room_Id'];
$FirstName=$_POST['First_Name'];
$LastName=$_POST['Last_Name'];
$email=$_POST['Email'];
mysqli_query($connect,"INSERT into booking(Room_Id,First_Name,Last_Name,Email) VALUES('$room','$FirstName','$LastName','$email')");

if(mysqli_affected_rows($connect)>0)
{
	echo "<p>Booking Completed</p>";
	mysqli_query($connect,"select * from booking");
	echo 
	"+----------------------------+<br>";
	echo "<a href='homepage.html'>Go back</a>";
}
   else
   {
   echo "Booking FAILED";
   echo mysqli_error($connect);

   }
 ?>  
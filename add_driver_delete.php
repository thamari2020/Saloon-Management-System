<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from driver where driverId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		 
		echo"<script>alert('Delete Successful ');</script>";
        echo '<script>window.location="./add_driver.php"</script>';
	}
	else
	{

		echo"<script>alert('Delete unsuccessful Try Again ');</script>";
        echo '<script>window.location="./add_driver.php"</script>';
	}
?>

<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from leave_driver where leaveDriverId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		 echo"<script>alert('Delete Successful');</script>";
        echo '<script>window.location="./add_leavedriver.php"</script>'; 

	
	}
	else
	{
		 echo"<script>alert('Delete Unsuccessful Try Agaim');</script>";
        echo '<script>window.location="./add_leavedriver.php"</script>'; 

	}
?>

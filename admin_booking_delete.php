<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from booking where bId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo"<script>alert('Delete Successfully');</script>";
    	echo '<script>window.location="./add_Booikg.php"</script>';           
    
		 
	}
	else
	{
		echo"<script>alert('Delete Unsuccessfully Try Again');</script>";
    	echo '<script>window.location="./add_Booikg.php"</script>'; 
	}
?>

<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from leave_guide where LGId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo"<script>alert('Delete successful');</script>";
        echo '<script>window.location="./add_leaveguide.php"</script>'; 
    	
		 
	}
	else
	{
		echo"<script>alert('Delete unsuccessful Try Again ');</script>";
        echo '<script>window.location="./add_leaveguide.php"</script>'; 
    	}
?>

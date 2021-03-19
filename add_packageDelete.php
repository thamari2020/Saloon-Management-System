<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from package_booking where pBookingId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		 
               echo"<script>alert('Delete successful');</script>";
        echo '<script>window.location="./add_package.php"</script>'; 
    

	}
	else
	{
		 echo"<script>alert('Delete unsuccessful Try Again ');</script>";
        echo '<script>window.location="./add_package.php"</script>'; 
    
	}
?>

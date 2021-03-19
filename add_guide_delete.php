<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from guide where guideId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		 echo"<script>alert('Delete successful');</script>";
        echo '<script>window.location="./add_guide.php"</script>'; 

	}
	else
	{
		 echo"<script>alert('Delete Unsuccessful Try Agaim');</script>";
        echo '<script>window.location="./add_guide.php"</script>'; 
}
?>

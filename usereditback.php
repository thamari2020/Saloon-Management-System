	<?php

		
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);


		if($_SERVER["REQUEST_METHOD"] == "POST"){

   
    	if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){

       			 $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
       			 $filename = $_FILES["photo"]["name"];
       			 $filetype = $_FILES["photo"]["type"];
       			 $filesize = $_FILES["photo"]["size"];  			

			
  $uId= $_POST['uId'];
				$fName= $_POST['fName'];
        
        $lName = $_POST['lName'];

        $uNIC= $_POST['uNIC'];

        $userMail=$_POST['userMail'];

       

    
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
                           move_uploaded_file($_FILES["photo"]["tmp_name"], "in/upload/" . $filename);
                
               $sql = "update user set fName='$fName', lName='$lName', uNIC='$uNIC', userMail='$userMail', Image='$filename' where uId='$uId';";
				echo $sql;
			mysqli_query($conn,$sql);
		
                echo '<script>alert("Successfully Edit Profile")</script>';
        echo '<script>window.location="./mypro.php"</script>';
       
               
            } 
        } 
    } else{
      echo '<script>alert("UnSuccessfully Edit Profile")</script>';
        echo '<script>window.location="./useredit.php"</script>';
        }


?>
	

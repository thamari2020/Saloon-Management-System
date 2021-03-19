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
       			

			

				$gName= $_POST['gName'];

				$language =$_POST['language'];
        
        $gNIC = $_POST['gNIC'];

        $gEmail= $_POST['gEmail'];

        $gPhoneNo=$_POST['gPhoneNo'];

        $gqualification= $_POST['gqualification'];

        $password =$_POST['password'];
        $fees = $_POST['fees'];
        $userType = "Babar";
    
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
                
               $sql = "INSERT INTO babar (BabarId, gName,language,gNIC,gEmail,gPhoneNo,gqualification,password,Image,fees,availabledate) VALUES('','$gName','$language','$gNIC','$gEmail','$gPhoneNo','$gqualification','$password','$filename','$fees','2020-10-12');";
				echo $sql;
$register_query1 = "INSERT INTO `login`(`loginId`,`email`, `password`, `UserType`) VALUES ('','$gEmail', '$password','$userType')";
echo $register_query1;
			mysqli_query($conn,$sql);
		  mysqli_query($conn,$$register_query1);
                echo '<script>alert("Successfully Add New Babar")</script>';
        echo '<script>window.location="./add_Babar.php"</script>';
       
               
            } 
        } 
    } else{
        }


?>
	

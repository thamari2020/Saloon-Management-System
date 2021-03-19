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
       	

			
				$vName= $_POST['vName'];

				$howManyPeople =$_POST['howManyPeople'];
$fees =$_POST['fees'];
$vDescription = $_POST['vDescription'];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("in/upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "in/upload/" . $filename);
                
               $sql = "INSERT INTO vehicle (vId, vName,howManyPeople,Image,fees,vDescription,availabledate) VALUES('','$vName','$howManyPeople','$filename','$fees','$vDescription','2020-20-20');";
				echo $sql;
			mysqli_query($conn,$sql);
			             
         echo '<script>alert("Successfully Add New Transport")</script>';
        echo '<script>window.location="./add_transport.php"</script>';
       
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        
    }
}


	

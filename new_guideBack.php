<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){

          $allowed = array("pdf" => "image/pdf", "docx" => "image/PDF", "docx" => "image/docx");
        $fileName = $_FILES['userfile']['name'];
          $nBabarFname = $_POST['nBabarFname']; 
          $nBabarLname = $_POST['nBabarLname']; 
          $nGnic = $_POST['nGnic']; 
          $nGdob = $_POST['nGdob']; 
          $nGcontactNo = $_POST['nGcontactNo']; 
          $nGmail = $_POST['nGmail']; 
          $nGaddress = $_POST['nGaddress'];
 

      $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

          
          
          $register_query = "INSERT INTO `newbabar`(`newBabarId`,`nBabarFname`, `nBabarLname`, `nGnic`, `nGdob`, `nGcontactNo`, `nGmail`,`nGaddress`,`nGcv`) VALUES ('','$nBabarFname', '$nBabarLname', '$nGnic', '$nGdob', '$nGcontactNo', '$nGmail','$nGaddress','$fileName')";

          try{
            $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
   echo"<script>alert('Successfully Apply For Work');</script>";    
        echo '<script>window.location="./Home.php"</script>';

               
            }
            else{
             
            echo"<script>alert('error in Apply For Work Try Again');</script>";
            echo '<script>window.location="./new_Babar.php"</script>';
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>
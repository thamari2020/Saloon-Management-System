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
                       if(isset($_POST['register1']))
{
   $allowed = array("pdf" => "image/pdf", "docx" => "image/docx");
$fileName = $_FILES['userfile']['name'];

          $nDriverFname = $_POST['nDriverFname']; 
          $nDriverLname = $_POST['nDriverLname']; 
          $nDnic = $_POST['nDnic']; 
          $nDdob = $_POST['nDdob']; 
          $nDcontactNo = $_POST['nDcontactNo']; 
          $nDmail = $_POST['nDmail']; 
          $nDaddress = $_POST['nDaddress'];
       
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

       
          $register1_query = "INSERT INTO `newdriver`(`newDriverId`,`nDriverFname`, `nDriverLname`, `nDnic`, `nDdob`, `nDcontactNo`, `nDmail`,`nDaddress`,`nDcv`) VALUES ('','$nDriverFname', '$nDriverLname', '$nDnic', '$nDdob', '$nDcontactNo', '$nDmail','$nDaddress','$fileName')";

        try{
            $register_result = mysqli_query($conn, $register1_query);
            if(mysqli_affected_rows($conn)>0){
   echo"<script>alert('Successfully Apply For Work');</script>";    
        echo '<script>window.location="./Home.php"</script>';

               
            }
            else{
             
            echo"<script>alert('error in Apply For Work Try Again');</script>";
            echo '<script>window.location="./new_driver.php"</script>';
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>
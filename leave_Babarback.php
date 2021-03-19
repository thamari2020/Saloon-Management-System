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

        if(isset($_POST['register1'])){
          $BabarId = $_POST['BabarId']; 
          $gEmail = $_POST['gEmail']; 
          $sdate = $_POST['sdate']; 
          $edate = $_POST['edate']; 
          $reason = $_POST['reason']; 
                    
          
          $register1_query = "INSERT INTO `leave_Babar`(`LGId`,`BabarId`, `gEmail`, `sdate`,`edate`, `reason`) VALUES ('','$BabarId', '$gEmail', '$sdate','$edate', '$reason')";

         $register_result = mysqli_query($conn, $register1_query);
        
            if(mysqli_affected_rows($conn)>0){
                  echo"<script>alert('Successfully');</script>";
                  echo '<script>window.location="./leave_Babar.php"</script>';
            }
            else{
                  echo"<script>alert('error in Apply Leave');</script>";
                  echo '<script>window.location="./leave_Babar.php"</script>';
            }
            
          
        
          }

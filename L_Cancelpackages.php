<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
}
?>
<?php 
	
	// checking if the form is submit
	if ( isset($_POST['register']) ) {
		
		$email		= $_POST['email'];
		

		$to	 		  = $email;
		$mail_subject = 'Message from Tourist Transportation and Guiding Management System in Badulla';
		$email_body   = "Your booking has been successfully cancelled";
		$email_body  .= "Thank you for join with us!!!<br>";
		$email_body  .= "You can find all details from our website www.ttgms.lk";
		
		$email_body   .= "<br>contact details:0718949467<br>";
		$email_body   .= "Email:tom99791@gmail.com";
		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
			echo "Message Sent.";
		} else {
			echo "Message Not Sent.";
		}
	}
 ?>
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
          
          $email = $_POST['email']; 
          $pBookingId = $_POST['pBookingId']; 
          $reason = $_POST['reason']; 
          
          
          
          $register_query = "INSERT INTO `cpackages`(`cpackagesID`,`email`, `pBookingId`, `reason`) VALUES ('','$email','$pBookingId','$reason')";
		  $register_query1 = "Delete from package_booking where pBookingId =$pBookingId";
		 
          try{
               $register_result = mysqli_query($conn, $register_query);
			   $register_result = mysqli_query($conn, $register_query1);
            if(mysqli_affected_rows($conn)>0){
              echo '<script>alert("package booking is Successfully !!")</script>';
        echo '<script>window.location="L_Cancelpackages.php"</script>';
}
            else{
             
            echo"<script>alert('error in Booking');</script>";
 echo '<script>window.location="L_Cancelpackages.php"</script>';
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>
<HTML lang="en">
<HEAD>
 <TITLE>
  SALON PRO
  </TITLE>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  

<!-- CUSTOM STYLE CSS -->
    <link href="ass\style.css" rel="stylesheet" />


      <style>

      * {
          box-sizing: border-box;
        }
  
@media screen and(min-width:600px ){
  #image{
      flex:50%;
      max-width: 50%;
      }
  }

@media screen and(max-width:800px ){
  #image{
      flex:100%;
      max-width: 100%;
      }
  }

.div1 {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.image {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
  background-color :black;
  flex-wrap: nowrap;
}

.img:hover{
transform: scale(1.15);
}
.img{
    margin-top: 10px;
 }

.full {
 
    width: 100%; 
 
}
 
 
 
.footer {
 
                height: auto;
 
                padding-bottom: 30px;
 
                position: relative;
 
                width: 100%;
 
                 color:green;
 
                border-bottom: 1px solid #CCCCCC;
 
                border-top: 1px solid #DDDDDD;
 
                background: #ffffff;
 
                background: -webkit-linear-gradient(to right, #000000, #ffffff); 
 
                background: linear-gradient(to right, #000000, #ffffff);   
 
}
 
 
 
 
 

.footer ul {
 
                font-size: 13px;
 
                list-style-type: none;
 
                margin-left: 0;
 
                padding-left: 0;
 
                margin-top: 15px;
 
                color: #000000;
 
}

.phara{
	 column-count:3;
	 
 }
 
 
 
 

.footer ul {
 
                font-size: 13px;
 
                list-style-type: none;
 
                margin-left: 0;
 
                padding-left: 0;
 
                margin-top: 15px;
 
                color: #000000;
}


li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: gray;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
div1{
	padding-right:100px;
}
</style></head>
      <body style="background-color: #FFC0CB;">
	  
       <div style=" color: black; font-style:italic;">
  <center><h3><b>SALON PRO
</h3></center></div>

<!--Nav Bar-->  
<div>
  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
    <a class="nav-link active" href="L_Home.php">Home</a>
    </li>
  </ul>
  <ul class="navbar-nav">  
    <li class="nav-item" >
 <a class="nav-link active" href="L_services.php">Services</a>
   </li>    
  </ul>

<ul class="navbar-nav">  
    <li class="nav-item" >
 <a class="nav-link active" href="L_Package.php">Package</a>
   </li>    
  </ul>


    
    <li class="dropdown">
    <a href="L_Gallery.php" class="dropbtn">Gallery</a>
    <div class="dropdown-content">
      <a href="L_haircut.php">Haircut</a>
      <a href="L_haircolouring.php">Hair Colouring</a>
      <a href="L_hairtreatment.php">Hair Treatment</a>
    <a href="L_facial.php">Facial </a>
    <a href="L_makeup.php">Makeup</a>
    <a href="L_manicure.php">Manicure</a>

    </div>
    </li> 

   <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="L_about.php">About Us</a>
     </li>    
  </ul>

    <li class="dropdown">
    <a href="" class="dropbtn">Cancel Booking</a>
    <div class="dropdown-content">
      <a href="L_Cancelbooking.php">Services</a>
    <a href="L_Cancelpackages.php">Package</a>      
    </div>
    </li> 
  </ul>
   <ul class="navbar-nav">
   </ul>
      <ul class="navbar-nav">
      </ul>
       <ul class="navbar-nav">
   </ul>
  
 <ul class="nav navbar-nav navbar-right">
                    <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM user where userMail  ='$email'  ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>
<div>
 <li><a class="nav-link active" href="mypro.php"><?php echo "<img src=in/upload/".$row['Image']." width=80px height=50px alt=profile> ";?></a></li>
</div>

<?php
          }
        }}
      ?>

     
  </li>
       
      </ul>
  <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link active" href="logout.php"><img src="img\logout1.png" width="120px" height="45px" /></a>
  </li>
       
      </ul>
          <ul class="navbar-nav">
      </ul>
</nav>
    
</div>		




<!--Nav Bar-->  

</b></h5></center>
<br />
<div >
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 35%;
    padding: 10px; background-color: #C71585; color:white;">

<div class="col-15">
              <div class="thumbnail" style="width:100%",>
                    <center><b>
                  <center><div class="col-md-12 col-sm-12 alert-info">
                           <br> <h3>Cancel Packages Booking</h3>
                           
                    </div></center>
                  
                        <form class="form-horizontal w3-left w3-border " id="register-form1" method="post" action="L_Cancelpackages.php">
                        <br>                      

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:black">E-mail :- </span><input id="email" type="email" class="form-control" name="email" placeholder="E-mail" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:black">Booking ID:- </span><input id="address" type="text" class="form-control" name="pBookingId" placeholder="pBookingId" required autofocus><center></div><span style="color:gray"><small>[Refer your profile]</small></span></center></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:black">Reason for Cancel :- </span><input id="address" type="text" class="form-control" name="reason" placeholder="Reason for Cancel" required autofocus></div></div><br>
                                
                        <button type="submit" name="register" class="btn btn-info btn-block">Submit
                                </button>

                                <input type="reset"  value="clear" class="btn btn-info btn-block">
                                </form>
                              </div></div></form></b></center></div></div></div></div>


      </div>
    </div>
  </div>
							  

</div>
</BODY>
</HTML>
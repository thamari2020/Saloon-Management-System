<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  header("location:./plogin.php");
}
?>
<?php 
	
	// checking if the form is submit
	if ( isset($_POST['register']) ) {
		$fullname	= $_POST['fullname'];
		$email		= $_POST['email'];
		

		$to	 		  = $email;
		$mail_subject = 'Message from Tourist Transportation and Guiding Management System in Badulla';
		$email_body   = "Thank you </b> {$fullname} for your booking and that you have chosen our Travel Agency.<br>";
		$email_body   .= "We inform about booking package week before trip<br>";
		$email_body   .= "Please note that you can make change your profile or cancellations of your booking, through our web site.<br>
		                  If you cancel your booking in time,we will charge you no fees.Otherwise,the full booking amount (100%) is due. 
						  ";
		
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
          $fullname = $_POST['fullname']; 
          $email = $_POST['email']; 
          $pakageType = $get=$_POST['pakageType'];
          $address = $_POST['address']; 
          $phoneNum = $_POST['phoneNum']; 
          $startDate = $_POST['startDate']; 
          
          
          $register_query = "INSERT INTO `package_booking`(`pBookingId`,`fullname`, `email`, `pakageType`, `address`, `phoneNum`, `startDate`) VALUES ('','$fullname','$email','$pakageType','$address','$phoneNum','$startDate')";

          try{
               $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
              echo '<script>alert("package booking is Successfully !!")</script>';
        echo '<script>window.location="L_Package.php"</script>';
}
            else{
             
            echo"<script>alert('error in Booking');</script>";
 echo '<script>window.location="L_packageBooking.php"</script>';
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
  Tourists Transportation and Guiding Management System for a Travel Agency In Badulla  
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
  background-color :white;
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

 

</style>
</HEAD>
<BODY>

<div style="background-color: Gray; color: black; font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

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

<center>
  <br>
  <div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 50%;
  height:600px;
    padding: 10px;
    background-color: 4B4872">

 <br><h1 style="color: white"><u> Booking for Package</u></h1>    
              <br />                      
<form   id="add_meal" method="POST" action="L_packageBooking.php" enctype="multipart/form-data">


   <div class="input-group">
     <span class="input-group-addon" style="color:white">Full Name &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="fullname" type="text" class="form-control" name="fullname" placeholder="Full Name" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required autofocus> </div>
      <br>


   <div class="input-group">
     <span class="input-group-addon" style="color:white">Email &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="email" type="text" class="form-control" name="email" placeholder="Email Address" required autofocus> </div>
      <br>


  <div class="input-group">
     <span class="input-group-addon" style="color:white">Package Type &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
                <select name="pakageType" style="width:172px">
                    <option value="Package1" > Package1</option>
                    <option value="Package2">Package2</option>
                    <option value="Package3">Package3</option>
                    <option value="Package4">Package4</option>                    
                    <option value="Package5">Package5</option>
                    <option value="Package6">Package6</option>         
                </select>
     </div>
<br />
<div class="input-group">
     <span class="input-group-addon" style="color:white">Address &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="address" type="text" class="form-control" name="address" placeholder="Address" required autofocus> </div>
      <br>


<div class="input-group">
     <span class="input-group-addon" style="color:white">Phone Number &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="phoneNum" type="text" class="form-control" name="phoneNum" placeholder="Phone Number" required autofocus size="10" onkeypress="return (event.charCode >45  && event.charCode < 57)"> </div>
      <br>

     <div class="input-group">
     <span class="input-group-addon" style="color:white">Date &nbsp;&nbsp;&nbsp;  :-    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br>
                                  <input type="date" name="startDate" min="2021-01-21" max="2021-12-31" class="w3-input w3-border" required="required" placeholder="Select Your date" /><br></div><br>




 <button type="submit"  name="register" id="register" class="btn btn-success btn-block">Booking
                              </button><br>


                                             <button type="reset" class="btn btn-info btn-block">Clear
                                </button>
                        
                             
                                            </div>
                                                                
                                        </form>
                                    </div><br /><br />
                                            <div id="result"></div>
                                                                                
                                </div> 
                            </div> 
                        </div> 
                    </div>  


    </div></div></div></td></tr></table>
</div></div>


<footer>

    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Contact </h3>
 
                    <ul>
 
                       <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
 
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-7 ">
 
                    <h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>
</div>
</BODY>
</HTML>
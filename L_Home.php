<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
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
<body style="background-color: #FFC0CB; ">

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
 <li><a class="nav-link active" href="mypro.php"><?php echo "<img src=in/upload/".$row['Image']." width=70px height=50px alt=profile> ";?></a></li>
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

<div style = "background-image:url('salon1.jpg');  background-repeat: no-repeat;

  background-attachment: scroll;  
  background-size: 100%50%;">
    <!--HOME SECTION-->
     
 
        <div class="row text-center">
            <div  class="col-md-13 >            
<div class="item">
 <br />
  <br />
   <br />
    <br />
     <br />
      <br /> <br />
       <br />
        <br />
         <br />
        <br />
		 
		 <h1 style="color:cornsilk; font-family:Arial">
		<center>
			WELCOME TO SALON PRO
		</center>	</h1> 
         <br />
          <br />
           <br /> <br />
            <br />
             <br />
              <br />
               <br />
				 <br />
					<br />
				  <br />
				   <br />
			   <br />
				 <br />
					<br />
				  <br />
				   <br />
               

	
          
<body style="background-color: white;">
<!--Tourist Attraction Places-->
	
</p></center>
           <div class="div1">
		<div class="image">
<div class="img"><a class="nav-link" href="L_haircut.php"><img src="img\Haircut1.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_haircolouring.php"><img src="img\hair3.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_hairtreatment.php"><img src="img\facial3.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_facial.php"><img src="img\manicure2.jpg" width="100%" ></a></div>
	</div></div>
     <a class="nav-link" href="L_services.php"><button type="button" class="btn btn-success" style="align-items: right;"><center>View More</button></a><br><br>
<!--SERVICES SECTION-->
							
                            <h3 class="full-width" style="color:black"> <div class="wrap">Our Service</div></h3>
                           
                    </center>
                	<table>
                		<tr>
                			<td style="padding:30px">
                    <div class="col-md-11 col-sm-11 alert-success">
                            <h4 style="color:black">Hair Cut</h4>
                            <p>
                                We provide experienced drivers through our travel agency.
								They have ability to provide good service to tourist.
                <br /><br />
								
                            </p>
                            
                    </div>
                </td>
                <td style="padding:30px">
                    <div class="col-md-11 col-sm-11 alert-success">
                            <h4 style="color:black">Hair colouring</h4>
                            <p>
                                Customer realionship and communication is the most important
								component of the business done by a travel guide.So we provide
								best and skillfull guides to fulfill tourists needs.
                            </p>
                            
                    </div>
                   </td>
               </tr>
               <tr>
                			<td style="padding:30px">
                    <div class="col-md-11 col-sm-11 alert-success">
                            <h4 style="color:black">Hair Treatment</h4>
                            <p>
                                Ensure a quality, cost effective and safe intergrated
								transport system and services.We will porvide different
								capability drivers.Because some have lots of experiences.
								
                            </p>
                            
                    </div>
                </td>
                <td style="padding:30px">
                    <div class="col-md-11 col-sm-11 alert-success">
                            <h4 style="color:black">Facial </h4>
                            <p>
                                We provide facility to tourist for know about Badulla.
								We hope it become easy for tourist. It is better way to 
								know about what are the places tourist want to travel.
                            </p>
                            
                    </div>
                   </td>
               </tr>
			    <tr>
                			<td style="padding:30px">
                    <div class="col-md-11 col-sm-11 alert-success">
                            <h4 style="color:black">Make up</h4>
                            <p>
                                Ensure a quality, cost effective and safe intergrated
								transport system and services.We will porvide different
								capability drivers.Because some have lots of experiences.
								
                            </p>
                            
                    </div>
                </td>
                <td style="padding:30px">
                    <div class="col-md-11 col-sm-11 alert-success">
                            <h4 style="color:black">Manicure</h4>
                            <p>
                                We provide facility to tourist for know about Badulla.
								We hope it become easy for tourist. It is better way to 
								know about what are the places tourist want to travel.
                            </p>
                            
                    </div>
                   </td>
               </tr>
</table></div></div></div>
<br />
<br />                
          	<div class="text-center">
                	<center><div class="col-md-4 col-sm-4 alert-info">
                          <br /><h3>Beauticians</h3>
                           
                    </div></center>
           <div class="div1">
		<div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%"></div>
</div></div>

  <a class="nav-link" href="L_services.php"><button type="button" class="btn btn-success" style="align-items: right;"><center>View More</button></a>

                    </div></center>
    </div>

                  
<br />
<br />
          	 <div class="text-center">
                	<center><div class="col-md-4 col-sm-4 alert-info">
                            <br /><h3>Babar</h3>
                           
                    </div></center>
           <div class="div1">
		<div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%"></div>
</div></div><br><br>

  <a class="nav-link" href="L_services.php"><button type="button" class="btn btn-success" ><center>View More</button></a>
 </center></div>   

</div> 
      <br />
      <br />   
         	<div class="text-center">
                	<center><div class="col-md-4 col-sm-4 alert-info">
                          <br /><h3>Consultations</h3>
                           
                    </div></center>
           <div class="div1">
		<div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%" ></div>
</div><div class="image">
<div class="img"><img src="img\salon1.jpg" width="100%"></div>
</div></div>


  <a class="nav-link" href="L_services.php"><button type="button" class="btn btn-success"><center>View More</button></a>

                    </div></center>
    </div>
      
 </div>

</div>



<br><br>

<footer>
 <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
				<br>
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7"><br>
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7"><br>
 
                    <h3> Contact </h3>
 
                    <ul>
 
                       <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
 
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-7 "><br>
 
                    <h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>?</span><span>?</span><span>?</span><span>?</span><span>?</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>
</div>
</body>
</HTML>
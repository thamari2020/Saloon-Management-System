<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
}
?><HTML lang="en">
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
      </head>
      <body style="background-color: white;">
	  
       <div style=" color: black; font-style:italic;">
  <center><h3><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
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
 <a class="nav-link active" href="L_Transportation.php">Services</a>
   </li>    
  </ul>

<ul class="navbar-nav">  
    <li class="nav-item" >
 <a class="nav-link active" href="L_Package.php">Package</a>
   </li>    
  </ul>


    
    <li class="dropdown">
    <a href="L_Places.php" class="dropbtn">Tourist Attraction Places</a>
    <div class="dropdown-content">
      <a href="L_place1.php">Dunhida</a>
      <a href="L_place2.php">Muthiyanganaya</a>
      <a href="L_place3.php">Ella Rock</a>
    <a href="L_place4.php">Madolsima </a>
    <a href="L_place5.php">Narangala</a>
    <a href="L_place6.php">Dova</a>
    <a href="L_place7.php">Nine-Arch</a>
    <a href="L_place8.php">Namunukula</a>
    </div>
    </li> 

   <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="L_about.php">About Us</a>
     </li>    
  </ul>

    <li class="dropdown">
    <a href="L_cancelbooking.php" class="dropbtn">Cancel Booking</a>
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
    
                <div class="text-center">
                	<center><div class="col-md-6 col-sm-6 alert-info">
                          <br />  <h3> Tourist Attraction Places in Badulla</h3>
                           
                    </div></center>


					<p><center>
					Badulla District belong to the Hill country of Sri Lanka and rich with many tourist and religious attractions for both local and foreign Visitors. Number of famous waterfalls such as Babarakands; the highest in Sri Lanka add colors to its natural beauty. The sacred Muthyangana Rajamaha Vihara, located in Badulla Town is one of the prominent Buddhist attraction in the region.

The District of Badulla governs under Uva Province of Sri Lanka. This district extent over 2861 square km( 2866100 Hectares) of land and according to 2011 statistics, the population of Badulla District is 886,000. Badulla is an agricultural district and tea is the main commercial crop. You can see many cascading tea gardens by the roadside. Paddy and vegetables also cultivated in large scale
</p></center>
           <div class="div1">
		<div class="image">
<div class="img"><a class="nav-link" href="L_place1.php"><img src="img\Dunhida.png" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place2.php"><img src="img\Muthiyanganaya.png" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place3.php"><img src="img\ella1.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place4.php"><img src="img\madolsima.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place5.php"><img src="img\narangala.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place6.php"><img src="img\Dowa.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place7.php"><img src="img\Ninearch.jpg" width="100%" ></a></div>
	</div><div class="image">
<div class="img"><a class="nav-link" href="L_place8.php"><img src="img\namunukul.jpg" width="100%" ></a></div>
	</div><div class="image">
</div>




</div></b></h5></center></div>
<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 

<footer>

 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 <br /> <br /> 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
  <br /> <br />
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
  <br /> <br />
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
  <br /> <br />
                    <h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>*</span><span>*</span><span>*</span><span>*</span><span>*</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer></BODY></HTML>



</h5></center></div></body></HTML>
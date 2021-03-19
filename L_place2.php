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

<body style="background-color: white;">

<div style="background-color: Gray;font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>
<div>
 
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

    
                <div class="text-center">
                	<center><div class="col-md-6 col-sm-6 alert-info">
                          <br />  <h3> Tourist Attraction Places in Badulla</h3>
                           
                    </div></center>
<a class="weatherwidget-io" href="https://forecast7.com/en/6d9981d05/badulla/" data-label_1="Muthiyangana Temple" data-label_2="WEATHER" data-theme="original" >BADULLA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
					
					
<div class="container">
    <div class="panel panel-default">
<br>
<h3 style="color:#1c2833 "> Muthiyangana Temple</h3>
<p style="color:black"> 
 Muthiyanganaya Raja Maha Viharaya lies in the centre of the city of Badulla. The History of this temple goes back to the time of Buddha but this area around Badulla (especially Uva Province) goes way back in to the time of 19th -18th century BCE. Emperor Rawana was ruling this country with Badulla as the capital. It is also believed that the War of Rama and Rawana took place in this area. There are many places and names which identify this area as one of Rawana’s capitals; Seetha Eliya, Seetha Kotuwa, and Rawana Ella as described in Ramayana. It is said that the Rawana finally lost the war and his defector brother Vibishana took the capital to Kelaniya and the Uva gradually got lost in history until the 5th century. </p>
<p style="color:black">
The Buddha and 500 Arhants visited this Island for the third time on the invitation of Naga King Maniakkhitha to Kelaniya. On that visit, Buddha came to Badulla on the invitation of King Indaka (now elevated to the Deity status), ruler of the Namunukula Mountain Range. King Indaka built a Stupa enshrining some hair and Mukthaka Dathu (drops of sweat turned in to pearls) of the Buddha on the location where Buddha made his sermons. This is the birth of the Muthiyanganaya Stupa. Since then this Stupa and the temple has been expanded, reconstructed and renovated by many kings.</p>
<p style="color:black"> 
The `Thorana’ of a unique design of six levels at the entrance of the temple is of an unknown period. First level includes the main entrance and above it on the second level is a typical Makara (dragon) Head. On the sides of the head are two guard figures and at the corners are two lion figures. On the third level there are two `Vamana’ figures and at the edge two animals probably lions. These figures are not as clear as the lion figures on the second level. On the centre of the third level is a high stand which goes right up to the fourth level on it are two bulls and the special features of these bulls are that they are decorated and have large humps. Such bulls are a feature of Hinduism and this feature indicates some influence of Hinduism in the making of this structure. Lastly and on top of the fifth level is a seated Buddha statue. The fifth is dedicated to the Buddha statue. The peacocks at the sixth level complete the outline of the k structure. At the entrance is a colourful `Makara Thorana’. Right above the entrance and below the dragon head is a P figure of Maitre Bodhisattva. On the right hand side of the Image house is a statue of Deity Indaka, the protector of the Muthiyanganaya Holy Ground and the Namunukula Mountain Range. On the right is the statue of Maitre Bodhisattva. k. Passing the Image House you come to the holiest structure of the temple, the Stupa which enshrines the hair and the Mukthaka Dathu of Buddha. The initial stupa built by the Deity Indaka in the 5th century BCE has been enlarged by e King Devanampiyatissa (250-210 BCE) of Anuradhapura Era.
</p><p style="color:black">
Hence Randenigala ,Victoria and Rantambe are identified as the three main water valleys down sided from the Dunhinda Water fall, apart from being a natural water resource it has been a relaxation for the tourists.
</p>

          
          	<div class="text-center">
                	<center><div class="col-md-4 col-sm-4 alert-info">
                           
                    </div></center>
           <div class="div1">
		<div class="image">
<div class="img"><img src="img\m1.jpg" width="100% height=90%" ></div>
</div><div class="image">
<div class="img"><img src="img\m2.jpg" width="100% height=90%" ></div>
</div><div class="image">
<div class="img"><img src="img\m3.png" width="100% height=100%" ></div>
</div><div class="image">
<div class="img"><img src="img\m4.jpg" width="100% height=110%"></div>
</div></div>


<h3> Map</h3>
 <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 6.9842, lng: 81.0614};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });


        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdPPgAompJDsLaDhiw5wjaLMGn5u7px4&callback=initMap">
    </script>
</div></div>
<br><br>
<h3><center>Go to other places</center></h3>
					<div class="text-center">
                	<center><div class="col-md-4 col-sm-4 alert-info">                          
                    </div></center>
	<div class="div1">
    <div class="image">
<div class="img"><a class="nav-link" href="place1.php"><img src="img\Dunhida.png" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place2.php"><img src="img\Muthiyanganaya.png" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place3.php"><img src="img\ella1.jpg" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place4.php"><img src="img\madolsima.jpg" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place5.php"><img src="img\narangala.jpg" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place6.php"><img src="img\Dowa.jpg" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place7.php"><img src="img\Ninearch.jpg" width="100%" ></a></div>
 </div><div class="image">
<div class="img"><a class="nav-link" href="place8.php"><img src="img\namunukul.jpg" width="100%" ></a></div>
</div><div class="image">

    </div>


</div></b></h5></center></div>


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
<ul><li><b><span>?</span><span>?</span><span>?</span><span>?</span><span>?</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer></BODY></HTML>



</h5></center></div></body></HTML>
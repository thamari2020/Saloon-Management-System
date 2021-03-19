<?php 

session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");

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
#frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}

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

<div style="background-color: white; color: black; font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

<!--Nav Bar-->  
<div>



  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
 <a class="nav-link active" href="Home.php">Home</a>
    </li>
  </ul>
  <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="package.php">Package</a>
   
    </li>    
  </ul>



    
    <li class="dropdown">
    <a href="places.php" class="dropbtn">Tourist Attraction Places</a>
    <div class="dropdown-content">
      <a href="place1.php">Dunhida</a>
      <a href="place2.php">Muthiyanganaya</a>
      <a href="place3.php">Ella Rock</a>
    <a href="place4.php">Madolsima </a>
    <a href="place5.php">Narangala</a>
    <a href="place6.php">Dova</a>
    <a href="place7.php">Nine-Arch</a>
    <a href="place8.php">Namunukula</a>
    </div>
    </li> 

   <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="about.php">About Us</a>
     </li>    
  </ul>

    <li class="dropdown">
    <a href="" class="dropbtn">Vacancy</a>
    <div class="dropdown-content">
      <a href="new_driver.php">Driver</a>
      <a href="new_guide.php">Guide</a>
      
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
      <li><a class="nav-link active" href="login.php"><img src="img\log.png" /></a>
  </li>
       
      </ul>
          <ul class="navbar-nav">
      </ul>
</nav>
    
</div>
     <center>
<div class="width: 100% ">
                	
                           <br/> <h1><u>Driver</u></h1>
                           
                    </div>
                    
        
<?php
        $query = "SELECT * FROM driver";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <div class="col-md-10">
        <form method="post">
          <div  style="background-color:#0a2e4f; border-radius:5px; padding:16px;" align="center">
            <table style="width:100%"><tr><th><img src="in\upload\<?php echo $row["Image"]; ?>" class="img-responsive" /><br /></th>

            <th><h5 class="text-info"><font color="white">Name : <?php echo $row["dName"]; ?><br>Price : Rs <?php echo $row["fees"]; ?>  Per Hour <br>Qualification : <?php echo $row["dqualification"]; ?></font></h5></th></tr></table>



            <input type="hidden" name="hidden_name" value="<?php echo $row["dName"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["fees"]; ?>" />

<a href="login.php">
            
<div class="text-right"><div class="text-right btn btn-success">Book Driver</div></a>
</div>
          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
                <!--end search bar-->                                 
           
      </center>



<div class="text-right">

    <a href="Transportation.php"><button type="button" class="btn btn-success">Trasport</button> </a>
        <a href="guide.php"><button type="button" class="btn btn-success">Guide</button>  </a>
            <a href="CheckOutForm.php"><button type="button" class="btn btn-success">Booking Form</button></a>
                    </div></center>
    </div>
<br /></div>

<div class="container">
<table><tr><td width="50%">

    
      <div>
      <h2 align ="center">Rate About Transportation Service</h2>
            <?php
    
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

$find_data = "select * from rate";
$result = $conn -> query($find_data);
while ($row = mysqli_fetch_assoc($result)) {
  
  $id = $row['id'];
  $name = $row['name'];
  $food = $row['food'];
  $current_rating = $row['rating'];
  $hits = $row['hits'];

  echo "
          <form action='rates.php' method='POST'>
          <select name='rating' class='form-control selcls'>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          
          </select>
           <div class='form-group'>
          <input type='hidden' value='$food' name='food'>
          </div>
          <div>
          <input type ='submit' value='Rate!' class='btn btn-info'> </div>Current Rating:";
  echo round($current_rating, 3);
  echo "


          </form>

          ";
}
?>
        </div></td><td>
      <div class="container">
            <h2 align="center">Comment About Transportation Service</h2>
          <br />

           <form method="POST" id="comment_form">
            <div class="form-group">
              <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
            </div>
            <div class="form-group">
              <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="comment_id" id="comment_id" value="0" />
              <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
          </form>
          <span id="comment_message"></span>
            <br />
          <div id="display_comment"></div>
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
 
       
</footer></div>
</BODY>
</HTML>
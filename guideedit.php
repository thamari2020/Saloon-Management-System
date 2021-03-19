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


 

</style>
</HEAD>

<BODY>

<div style="background-color: Gray;font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

<!--Nav Bar-->  
<div>


  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
  <a class="nav-link" href="guidepro.php">My Profile</a>
    </li>
  </ul>
  <ul class="navbar-nav navbar-nav">  
    <li class="nav-item" >
  <a class="nav-link" href="leave_guide.php">Leave Application</a>
    </li>
    
  </ul>

  </ul>
  <ul class="navbar-nav navbar-nav">  
    <li class="nav-item" >
  <a class="nav-link" href="guidebook.php">Booking</a>
    </li>    
  </ul>

   <ul class="navbar-nav navbar-nav">  
    <li class="nav-item" >
  <a class="nav-link" href="guidemyleave.php">My Leave</a>
    </li>    
  </ul>

  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><img src="img\logout1.png" width="120px" height="50px"></a></li>
       
      </ul>
</nav>
</div>
<br>
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 50%;
  height:1000px;
    padding: 10px;
    background-color: 4B4872">

<div class="col-40" align="center">
              <div class="thumbnail" class="col-45">
                      <center><b>
<div class="container">
                  <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM guide where gEmail ='$email'  ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>
<div>
<?php echo "<img src=in/upload/".$row['Image'].">";?>
</div>
<br><br>
<form   id="add_meal" method="POST" action="guideeditback.php" enctype="multipart/form-data">
                            <div class="input-group">
     <span class="input-group-addon" style="color:white">Guide ID &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="guideId" type="text" class="form-control" name="guideId" placeholder="guide Id"  readonly value="<?php echo $row['guideId'];  ?>" required autofocus> </div>
      <br>

           <div class="input-group">
     <span class="input-group-addon" style="color:white">Guide Name &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="gName" type="text" class="form-control" name="gName" placeholder="Name"  value="<?php echo $row['gName'];  ?>" required autofocus onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> </div>
      <br>

      <div class="input-group">
     <span class="input-group-addon" style="color:white">Language  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="language" type="text" class="form-control" name="language" placeholder="language"  value="<?php echo $row['language'];  ?>" required autofocus onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> </div>
      <br>

       <div class="input-group">
     <span class="input-group-addon" style="color:white">NIC  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="gNIC" type="text" class="form-control" name="gNIC" placeholder="gNIC"  value="<?php echo $row['gNIC'];  ?>" required autofocus> </div>
      <br>

        <div class="input-group">
     <span class="input-group-addon" style="color:white">Email  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="gEmail" type="text" class="form-control" name="gEmail" placeholder="gEmail"  value="<?php echo $row['gEmail'];  ?>" required autofocus> </div>
      <br>

       <div class="input-group">
     <span class="input-group-addon" style="color:white">PhoneNo  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="gPhoneNo" type="text" class="form-control" name="gPhoneNo" placeholder="gPhoneNo" value="<?php echo $row['gPhoneNo'];  ?>" required autofocus onkeypress="return (event.charCode >45  && event.charCode < 59)" pattern="(?=.*[0-9]).{10,}"> </div>
      <br>

<div class="input-group">
     <span class="input-group-addon" style="color:white">Qualification  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="gqualification" type="text" class="form-control" name="gqualification" placeholder="gqualification" value="<?php echo $row['gqualification'];  ?>" required autofocus onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> </div>
      <br>

        <div class="w3-padding">
 <div class="w3-border w3-col s4   w3-center" style="margin-top:8px;">
<div class="w3-padding ">
<h3>Upload a photo</h3><hr/>
 <div style="width:10%;height:10%;"><img id="myImg" src="img\tra.png" alt="Add image" class="w3-image" style="width:100%;height:100%"/>
                                                    </div>
                                                    <br>        
                                                
<input type="file" name="photo" id="fileSelect" class="w3-btn w3-block w3-black w3-padding-large">
 <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                                             </div> 
                                        
                       
                                                    </div>                  
 <div>

<div class="w3-half">
<input type="submit" class="btn btn-success" name="meal_add" value="Save">
                                                </div> 
 </div>                             
                              
                      </div></form>
</div></b></center></div></div></div></b></h5></center></div><br><br><br>
 <?php
          }
        }}
      ?>
                                 
           

<footer>
 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>s
 
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

</BODY>
</HTML>
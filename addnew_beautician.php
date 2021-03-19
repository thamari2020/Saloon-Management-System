<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
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


  table,th,td
    {
      border:2px solid red;
    }
    table
    {
      border-collapse:collapse;
      width:20%;
    }
    td
    {
      height:40px;
    }
    tr
    {
      background-color:green;
      color:white;
    }
    th
    {
      background-color:yellow;
      color:black;

 
	}
 

</style>
</HEAD>

<BODY>
<div style=" color: black; font-style:italic;">
  <center><h3><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h3></center></div>

<!--Nav Bar-->  
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="add_home.php">Home</a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

    <li class="nav-item">
      <form action="add_transport.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Transport" name="submit">
                  
             </form>
    </li>
        

 
    
    <li class="nav-item">
      <form action="add_guide.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Guide" name="submit">
                  
             </form>
      
    </li>

   
 
     <li class="nav-item">
       <form action="add_driver.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Driver" name="submit">
                  
             </form>
    </li>
  
   
    
     <li class="nav-item">
        <form action="add_package.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Package" name="submit">
                  
             </form>
    </li>
   
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
  <li class="nav-item">
    <form action="add_newguide.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="NewGuide" name="submit">
                  
             </form>
      
    </li>
 
    
      <li class="nav-item">
        <form action="add_newdriver.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="NewDriver" name="submit">
                  
             </form>
     
    </li>


   
 <li class="nav-item" >
       <form action="add_cancelbooking.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Cancel Booking" name="submit">
                  
             </form>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

   <li class="nav-item" >
       <form action="add_Booikg.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Booking" name="submit">
                  
             </form>
    </li>

 <li class="nav-item" >
       <form action="add_leavedriver.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="DriverLeave" name="submit">
                  
             </form>
    </li>


     <li class="nav-item" >
       <form action="add_leaveguide.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="GuideLeave" name="submit">
                  
             </form>
    </li>

 <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item" >
  <a class="nav-link" href="logout.php">Log Out</a>
    </li>
    
    </li>
  </ul>
</nav>
</div>
<center>
<div style="background-color: #E0E6F8; width: 60% "> <br><h1><u> Add a Driver</u></h1>    
                                    
<form   id="add_meal" method="POST" action="addnew_beautician_back.php" enctype="multipart/form-data">

<div class="w3-half w3-padding">      
    <input class="w3-input w3-border" name="dName" type="text" placeholder="Driver Name"  id="dName" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></div><br />
<div class="w3-padding">
     <input class="w3-input w3-border" name="dEmail" type="text" placeholder="Driver Email"  id="dEmail"></div>   
     <br />
<div class="w3-padding">
     <input class="w3-input w3-border" name="dPhoneNo" size = "10" type="number" placeholder="Driver Phone No"  id="dPhoneNo"></div>   
     <br />
     <div class="w3-padding">
     <input class="w3-input w3-border" name="dAge" type="number" size = "2" placeholder="Driver Age"  id="dAge"></div>   
     <br />
<div class="w3-padding">
     <input class="w3-input w3-border" name="dqualification" type="text" placeholder="Driver qualification"  id="dqualification"></div>   
     <br />
<div class="w3-padding">
     <input class="w3-input w3-border" name="password" type="text" placeholder="password"  id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></div>   

<div class="w3-padding"><br />
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
                                                    <div class="w3-padding">
     <input class="w3-input w3-border" name="fees" type="text" placeholder="fees per hour"  id="fees"></div>   
     <br />
<div class="w3-row-padding w3-margin-bottom">   
<div class="w3-half">
<input type="submit" class="w3-btn w3-green w3-block " name="meal_add" value="Add Driver">
                                                </div> <br />
<div class="w3-half">
<input type="reset" class="w3-btn w3-red w3-block " name="meal-cancel" value="Cancel">
                                                </div>                              
                                            </div>
                                                                
                                        </form>
                                    </div><br /><br />
                                            <div id="result"></div>
                                                                                
                                </div> 
                            </div> 
                        </div> 
                    </div>  




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
</BODY>
</HTML>
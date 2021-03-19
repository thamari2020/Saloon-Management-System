<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  header("location:./plogin.php");
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
<div style = "background-image:url('Badulla.jpg');  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">
<div style="background-color: Gray; color: black; font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

<!--Nav Bar-->  
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
  <!-- Links -->
  <ul class="navbar-nav">
   
 <li class="nav-item" >
      <a class="nav-link" href="logout.php">LogOut</a>
    </li>

     
  </ul>
</nav>
</div>
<center><div style="background-color: #E0E6F8; width: 60% "> <br><h1><u> Booking for Package</u></h1>    
                                    
<form   id="add_meal" method="POST" action="package_BookingBack.php" enctype="multipart/form-data">

<div class="w3-half w3-padding">      
    <input class="w3-input w3-border" name="fullname" type="text" placeholder="Full Name"  id="fullname" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></div><br />
<div class="w3-padding">
     <input class="w3-input w3-border" name="email" type="text" placeholder=" Email"  id="email"></div>   
     <br />
     <div class="form-group">
              <label class="control-label col-sm-4" for="pakageType">Package Type :- &nbsp&nbsp&nbsp </label> 
              <div class="col-sm-10">
                <select name="pakageType" style="width:172px">
                    <option value="family" > Family</option>
                    <option value="couple">Couple</option>
                    <option value="friend">Friend</option>
                    <option value="Seasonal">Seasonal</option>                    
                    <option value="Luxury">Luxury</option>
                    <option value="Heritage">Heritage</option>
                    
                    
                </select>
     </div></div>
<div class="w3-padding">
     <input class="w3-input w3-border" name="address" type="text" placeholder="address"  id="address"></div>   
     <br />
     <div class="w3-padding">
     <input class="w3-input w3-border" name="phoneNum" type="text" size="10" onkeypress="return (event.charCode >45  && event.charCode < 57)" placeholder="Phone Number"  id="phoneNum"></div>   
     <br />
  <div class="w3-padding">
Start Date:
                                 <!-- date-->

                                  <input type="date" name="startDate" min="2020-01-21" max="2020-12-31" class="w3-input w3-border" required="required" placeholder="Select Your date" /><br>
                                  <br /><br />
<div class="w3-row-padding w3-margin-bottom">   
<div class="w3-half">
<input type="submit" class="w3-btn w3-green w3-block "  class="btn btn-success btn-lg btn-block" name="register" value="Booking">
                                                </div> <br />
<div class="w3-half">
<input type="reset" class="w3-btn w3-red w3-block " name="meal-cancel" value="Cancel">
                                                </div> <br /><br />                             
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
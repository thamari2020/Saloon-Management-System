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

</style>
      </head>
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
 <a class="nav-link active" href="Home.php">Home</a>
    </li>
  </ul>
  <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="package.php">Package</a>
   
    </li>    
  </ul>



    
     <li class="dropdown">
    <a href="Gallery.php" class="dropbtn">Gallery</a>
    <div class="dropdown-content">
      <a href="haircut.php">Haircut</a>
      <a href="haircolouring.php">Hair Colouring</a>
      <a href="hairtreatment.php">Hair Treatment</a>
    <a href="facial.php">Facial </a>
    <a href="makeup.php">Makeup</a>
    <a href="manicure.php">Manicure</a>
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
      <a href="new_Beautician.php">Beautician</a>
      <a href="new_Babar.php">Babar</a>
      
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
</b></h5></center>
<br>
<div class="container-fluid" style=" margin: auto;
    width: 45%;
  height:400px;
    padding: 10px;">

 
<div class="col-40" align="center">
              <div class="thumbnail" class="col-45">
                      <center><b>
      <form  style ="background-color:#C71585;";  action= "./loginback.php"  method="POST">
               <br />
    <center><div class="col-md-12 col-sm-12 alert-info" style="width: 80%;"><br><h3>Login</h3> </div></center>

                    
          
                    <div class="col-sm-12">
                  <label class="control-label col-sm-4" for="email"><b><h6 style="color: white">E-Mail</h6></b></label>
                   <div class="col-sm-10">
                  <input type="text" placeholder="Enter E-Mail" name="email" required>
                </div></div><br>

 <div class="col-sm-10">
                  <label  class="control-label col-sm-4" for="psw"><b><h6 style="color: white">Password</h6></b></label>
                   <div class="col-sm-12">
                  <input type="password" placeholder="Enter Password" name="psw" required>
                </div></div>
                    <br>
                          <div class="form-group"> 
             <div class="col-sm-4"> 
                  <button type="submit" class="btn btn-success btn-sm btn-block" name="login" id="login">Login</button>
                  
                </div>
            </div>
                 <div class="form-group"> 
             <div class="col-sm-4"> <label>
                    Remember me
                  </label>   
 <a href="change.php"><label class="control-label"><b><h6 style="color: white">Forgot Password Or Reset Password</h6></b></label></a>

                  <a href="sign.php" ><span> <button type="button" class="btn btn-success btn-sm btn-block"   >Register Now</button></span></a>
                </div>

</div><br /><br />            </form>
          </center>
        </div>

                      </div></div></div></div></div></div>  
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  
<footer>
 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7"><br>
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <br><h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <br><h3> Contact </h3>
 
                    <ul>
 
                       <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
 
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-7 ">
 
                    <br><h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>

</body>
</HTML>
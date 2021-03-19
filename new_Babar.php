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

 

 


 #frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}

</style>
</HEAD>
<body style="background-color: #FFC0CB; ">

<div style="background-color: font-style:italic;">
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
<div >
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 60%;
    padding: 20px;
    background-color: #4B4872;
    color: white;">
                 
<div class="col-15">
              <div class="thumbnail" style="width:100%";>
                    <center><b>
                    	<form class="form-horizontal w3-left w3-border w3-light-gray" id="register-form" enctype="multipart/form-data" method="post" action="./new_BabarBack.php">
                  <div class="text-center">

                  <center><div class="col-md-12 col-sm-12 alert-info">
                           <br> <h3> New Babar Application</h3>
                           
                    </div></center>
                    
                        
                        <br>
                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>First Name&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span><input id="fname" type="text" class="form-control" name="nBabarFname" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  placeholder="First Name" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>Last Name&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span><input id="lname" type="text" class="form-control" name="nBabarLname" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  placeholder="Last Name" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>NIC &nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span><input id="nic" size = '12' type="text" class="form-control" name="nGnic" placeholder="NIC" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>DOB&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span>
                                  <input type="date" name="nGdob" max="2020-01-21"  class="w3-input w3-border" required="required" placeholder="Select Your date" /></div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>Telephone No &nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span><input id="telenum" type="number" size = '10' class="form-control" name="nGcontactNo" placeholder="Telephone Number" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>E-mail &nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span><input id="email" type="email" class="form-control" name="nGmail" placeholder="E-mail" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span>Address&nbsp;&nbsp;&nbsp;:- &nbsp;&nbsp;&nbsp;</span><input id="address" type="text" class="form-control" name="nGaddress" placeholder="Address" required autofocus> </div></div><br>

   						<div class="col-lg-30">
                        <div class="input-group">
                            <span >CV&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp; </span><input id="userfile" type="file" class="form-control" name="userfile" placeholder="Upload Your CV" required autofocus> </div></div><br>

                                 
                        <button type="submit" name="register" id="submit-button" class="btn btn-success btn-block">Submit
                                </button>

                                <button type="reset" class="btn btn-info btn-block">Clear
                                </button>
                                </from>
                              </div></div></form></b></center></div></div></div></div>


<footer>

 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Babar </a> </li>
 
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
</footer></div>

                              </BODY></HTML>
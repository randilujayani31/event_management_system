<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
  <style>
        
* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
    background: blanchedalmond;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 30px 30px;
    margin-bottom: 0px;
    color: black;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
    width: 40%;
}

/* The company logo */

.footer-distributed h3{
    color:  black;
    font: normal 36px 'Open Sans', cursive;
    margin: 0;
}

.footer-distributed h3 span{
    color:  black;
}

/* Footer links */

.footer-distributed .footer-links{
    color:  black;
    margin: 20px 0 12px;
    padding: 0;
}

.footer-distributed .footer-links a{
    display:inline-block;
    line-height: 1.8;
  font-weight:400;
    text-decoration: none;
    color:  inherit;
}

.footer-distributed .footer-company-name{
    color:  black;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
    width: 35%;
}

.footer-distributed .footer-center i{
    background-color:  #33383b;
    color:  black;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p{
    display: inline-block;
   color:  black;
  font-weight:400;
    vertical-align: middle;
    margin:0;
}

.footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}

.footer-distributed .footer-center p a{
   color:  black;;
    text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color:  black;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
    width: 20%;
}

.footer-distributed .footer-company-about{
    line-height: 20px;
    color:  black;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span{
    display: block;
    color:  black;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons{
    margin-top: 25px;
}

.footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;

    font-size: 20px;
    color:  black;
    text-align: center;
    line-height: 35px;

    margin-right: 3px;
    margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

    .footer-distributed{
        font: bold 14px sans-serif;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }

    .footer-distributed .footer-center i{
        margin-left: 0;
    }}
a{
      font-size: 1.3em;
  }
form
    {
        background:black;
        background-repeat: no-repeat;
        background-size: cover; 
        margin-bottom: 30px;  
    align-content: center;
 flex-direction: column;
    width: auto;
    height: auto;
    margin: auto;
    margin-top: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.22);
    padding: 10px;
    margin-bottom: 20px; 
    padding-top: 0px; 

   
    }
      
#container{
    display: flex;
    flex-direction:column;

    align-content: center;
    padding-left: 300px;
    padding-right: 300px;
}


      
input{
    margin: 0.25em 0em 1em 0em;
    outline: none;
    padding-top:5px;
    padding-bottom: 5px;
    border: none;
    background-color: rgb(225, 225, 225);
    border-radius: 0.25em;
    color:black;
    font-weight: 400%;
    font-size: 15px;
}
    
b{
    color: ghostwhite;
    font-size: 1.2em;
    
}
h1{
    padding-top: 5px;
    color:Blue;
    text-align: center;
    font-size: 3em;
}


button{
    padding: 0.25em;
    border: none;
    outline: none;
    background-color: rgb(68, 18, 232);
    color: black;
    border-radius: 0.25em;
    font-weight: bold;
    font-size: 13px;
}
      
.btnn{
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    width: 250px;
    border-radius: 10px;
    font-size: 1.5em;
}

.new{
    margin-bottom: 30px;     
}

 </style>
  </head>
  <body>
  	<div class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php"><img src="images/a2.jpg" width="119" height="50" alt=""/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
              <li class="nav-item"> <a class="nav-link" href="Events.php">Events&nbsp;</a> </li>
              <li class="nav-item"> <a class="nav-link" href="Services.php">Services&nbsp;</a></li>
              <li class="nav-item"> <a class="nav-link" href="Venue.php">Venue&nbsp;</a></li>
              <li class="nav-item active"> <a class="nav-link" href="Register.php">Register&nbsp;</a></li>
              <li class="nav-item"> <a class="nav-link" href="Contact.php">Contact&nbsp;</a></li>
              <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> </div>
          </li>
              <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a></div>
              </li>
              <li class="nav-item"> </li>
            </ul>
            
          </div>
        </nav>
  	    <h1><div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
  	      <ol class="carousel-indicators">
  	        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
  	        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
  	        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
          </ol>
  	      <div class="carousel-inner" role="listbox">
  	        <div class="carousel-item active"> <img src="images/a16.jpg" alt="First slide" width="1200" height="600" class="d-block mx-auto">
  	          
            </div>
  	        <div class="carousel-item"> <img src="images/a14.jpg" alt="Second slide" width="1200" height="600" class="d-block mx-auto">
  	          
            </div>
  	        <div class="carousel-item"> <img src="images/a15.jpg" alt="Third slide" width="1200" height="600" class="d-block mx-auto">

            </div>
          </div>
  	      <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div></h1>
  	    
			<br>

 <form name="Registration" action="registerconnection.php" method="post">
      <div id="container">
      <h1 class="text-center" style="color: black; padding-top: 1px;">WTR Event Management System</h1>
      <h1>Register Form</h1>
      <p style="text-align: center;color: red">Kindly fill in this form to register.</p>
      <br>
      <label for="firstname"><b>Firstname</b></label>
        <input
          type="text"
          placeholder="Enter firstname "
          name="f_Name"
          id="f_Name"
          required
        />
      <label for="lastname"><b>Lastname</b></label>
        <input
          type="text"
          placeholder="Enter Lastname"
          name="l_Name"
          id="l_Name"
          required
        />
      
        <label  for="address"><b>Address</b></label>
        <textarea 
          name="address">  
        </textarea>
        
        <label  for="phone"><b>Phone</b></label>
        <input 
          type="text" 
          name="contact_No" 
          placeholder="enter phone number" 
                      
        />
        <label  for="nic"><b>NIC</b></label>
        <input
          name="nic" 
          type="text"
          required class="new"
          id="nic"
        />

      
      <button class="btnn" type="submit" name="submit">Register</button>
      <br><br>
      
      
    </div>
  </form>
 
<div class="row">
            <div class="col-lg-4">
              <div class="card col-md-4 col-lg-12"> <img class="card-img-top" src="images/download (3).jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Events&nbsp;</h5>
                  <p class="card-text">We will process any type of events you prefer.Only thing you have to do is share your need with us.We will do our best make your occasion so glamorous.&nbsp;</p>
                  <a href="Events.php" class="btn btn-primary">Read more&nbsp;</a> </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card col-md-4 col-lg-12"> <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Services&nbsp;</h5>
                  <p class="card-text">We offer different kinds of special facilities according to the event.&nbsp;</p>
                  <a href="Services.php" class="btn btn-primary">Read more&nbsp;</a> </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card col-md-4 col-lg-12"> <img class="card-img-top" src="images/i1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">&nbsp;Contact</h5>
                  <p class="card-text">You can contact us from different media to shre your ideas with us.&nbsp;</p>
                  <a href="Contact.php" class="btn btn-primary">Read more</a> </div>
              </div>
            </div>
          </div><br><br>
 <!-- <form>  

<label> Firstname </label>         
<input type="text" name="firstname" size="15"/> <br> <br>  
  
<label> Lastname: </label>         
<input type="text" name="lastname" size="15"/> <br> <br>  
  
<label>   
Event :  
</label>   
<select>  
<option value="Course">Event</option>  
<option value="BCA">Wedding</option>  
<option value="BBA">Birthday</option>  
<option value="B.Tech">Anivasary</option>  
<option value="MBA">Award Ceromony</option>  
<option value="MCA">Get together</option>  
<option value="M.Tech">Other</option>  
</select>  
  
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="male"/> Male <br>  
<input type="radio" name="female"/> Female <br>  
 
<br>  
<br>  
  
<label>Phone</label>  
<input type="text" name="country code"  value="+94" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  

<label>Address</label>  
<textarea cols="80" rows="5" value="address">  
</textarea>  

<label>Email</label> 
<input type="email" id="email" name="email"/> <br>    
<label>Password</label>
<input type="Password" id="pass" name="pass"> <br>    
<label>Re-type password</label>  
<input type="Password" id="repass" name="repass"> <br> <br>  
<input type="button" value="Submit"/>
 
</form>
</h1>  -->
<footer class="footer-distributed">

      <div class="footer-left">

        <img src="images/a2.jpg" width="200" height="100" alt=""/>

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="#">About</a>
          
          <a href="#">Faq</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">WTR EMS PVT(LTD) © 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>No. 25, </span>Flower road, Colombo 07</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>(+94) 77 7360 150</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">wtr@events.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          WTR Event Management System is a subsidiary of WTR (pvt) Ltd which is dedicated to making any event you can imagine a reality. Make your event memorable with WTR Events.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
       



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>
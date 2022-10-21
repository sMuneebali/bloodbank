
<?php 
session_start();
include "admin/config.php";
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

$mysqli = mysqli_connect('localhost', 'root', '', 'db_blood');
if(isset($_POST['name']))
{

$name = $_POST['name'];

$bloodgroup = $_POST['bloodgroup'];

$AGE = $_POST['AGE'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$cnic = $_POST['cnic'];
$lastdonate = $_POST['lastdonate'];
$phone = $_POST['phone'];


//for getting the current count 
$countQuery = "select quantity from tbl_bloodgroup where bloodgroup = '$bloodgroup'";
$rs_temp = mysqli_query($con,$countQuery);
while ($row = mysqli_fetch_array($rs_temp)){
	$count = $row[0];
	//echo $count;
	
}
//updating the current count by 1

--$count;
if($lastdonate >=1){

$query = "INSERT INTO `tbl_seeker`(`s_id`, `s_name`, `s_age`, `s_bloodgroup`, `s_phone`, `s_CNIC`, `s_gender`, `s_quantity`, `s_location`) VALUES (' ','$name','$AGE','$bloodgroup','$phone','$cnic','$gender','$lastdonate','$location')";
$queryup="UPDATE `tbl_bloodgroup` SET `quantity`= '$count' WHERE `bloodgroup`='$bloodgroup'";
$rs = mysqli_query($con, $query);

$rss = mysqli_query($con, $queryup);
echo '<script>alert("your registration successfully complete. you have reply in just a second in your maile check your mail")</script>';
}
else{
	echo '<script>alert("please select right quantity")</script>';

}
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Blood Bank</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
 <link rel="shortcut icon" href="images/favicon.jpg" type="">
   <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	

<style>

.loader_bg{
    position: fixed;
    z-index: 999999;
    background: #fff;
    width: 100%;
    height: 100%;
}
.loader{
    border: 0 soild transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(50vw - 75px);
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #16C6B7;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
    animation-delay: .5s;
}
@keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
    }
}




#abc{
  width:100%;
  height:40px;
  background-size: cover;
  position:relative;
}

nav{
  width: 100%;
  height: 100px;
  line-height: 50px;
}
nav ul{
  float: left;
  margin-right: 10px;
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
}


nav ul li a{
  text-decoration: none;
  color: black;
  padding: 20px;
  
}
nav ul li:hover{
  background-color:#16C6B7;
  color:white;
}


nav ul li a:hover{
  color:white;
}
</style>

</head>
<body>
        
        
        <div class="loader_bg">
    <div class="loader"></div>
</div>
    <!-- ################# Banner Starts Here#######################--->

      <div id="abc">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="seeker.php">seeker</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </nav>
	
</div>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           
            
                
                    <img src="images/hero-bg.png" alt=""><div class="carousel-caption d-none d-md-block">
      			
               

            </div>
   
       


    </div>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h1 class="title" style="font-family:Arial;">Seeker Form</h1>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                            <label class="label">Blood Group</label>
                            <div class="p-t-10">
                                <select name="bloodgroup" id="bloodgroup">
                                    <option disabled="disabled" selected="selected" >Choose option</option>
									 <?php

//Create the select query
$query ="SELECT * FROM tbl_bloodgroup"; 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
    //Loop through results
    while($row = $result->fetch_assoc()){
        echo "<option >" .$row['bloodgroup'] ."</option>";
    }
}
?>
                                    
                                  
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">AGE</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="AGE" id="age" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div >
                                       <select name="gender" id="gender">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>MALE</option>
                                    <option>FEMALE</option>
                                </select>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-2">
                        <div class="input-group">
                            <label class="label">Location</label>
                            <div class="rs-select js-select-simple select--no-search">
                                <select name="location" id="location" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Nazimabad</option>
                                    <option>DHA</option>
                                    <option>Liyari</option>
                                    <option>Tariq Road</option>
                                </select>
                                
                            </div>
							
                        </div>
						
						</div>
						<div class="col-2">
                                <div class="input-group">
                                    <label class="label">CNIC</label>
                                    <input class="input--style-4" type="text" name="cnic" id="cnic"required>
                                </div>
                            </div>
						<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Quantity</label>
                                    <input type="number"class="input--style-4" maxlength="1"  max="5" min="1" step="1" placeholder="----" name="lastdonate" id="lastdonate" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone"  id="phones" required>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-12" style="text-align:center;">
                        <div class="p-t-15">
                            <input class="btn btn--radius-2 btn--blue" type="submit" value="Submit">
                        </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

       <!--*************** Footer  Starts Here *************** -->
     <footer id="contact" class="container-fluid" style="background:#00BFA5;">
       
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © bloodbank.com</a> | All right reserved.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    
      
    
</body>
  <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
		
    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
	
	  setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
  </script>
 
</html>

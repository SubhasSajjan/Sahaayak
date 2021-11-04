<!-- simple php has been used to implement below things -->
<!-- dropdown values selected retained after submitting -->
<!-- checkbox values are retianed after submitting -->
<!-- filters properly implemented -->

<?php
// Start the session
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAHAYAK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles1.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="homepage/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">-->
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>




 

</head>
<body style = "background-color: #efefef;">

      
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../index.php">Home</a>
            <a href="index11.php">Services</a>
            <a href="../login.php">Login</a>
            <a href="../about_us.html">About Us</a>
        </div>
        <!--<span class="sid" onclick="openNav()"><img src="https://i.ibb.co/HrfVRcx/menu.png"></span>-->
<span class="sid" onclick="openNav()"><img src="../menu1.png" style="margin-top:-13%;margin-left:230%;"></span> 
        <div class="p-3 my-3  text-white" style="margin-top:-1%;padding: 20px; border-radius: 5px;background-color:white;">
        <!--<img src="../sahaayak5.jpeg" alt="SAHAAYAK" style="height: 14rem;position:absolute;float:left;margin-top:-1%;">
		-->
		<img src="../ss.png" alt="SAHAAYAK" style="height: 12rem;position:absolute;float:left;margin-top:-0%;">
		<h1 style="text-align:center; color:#009688; font-family:Kaushan Script; font-size: 70px;position:relative;">SERVICES</h1>
		
	 </div>
      
<div class="container filter">
      <br>
  <form class="form-inline" action="index11.php" method = "POST">
        <!-- <div class="form-group">
        <label for="name">Service:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter type of service" name="name">
        </div> -->

        <div class="form-group" >
        <label for="job">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Service:&emsp;</label>
            <select name="job" class="form-control">
            <option>Select</option>
            <option value="All" <?php echo (isset($_POST['job']) && $_POST['job'] == 'All') ? 'selected' : '';?>>All</option>
            <option value="Cooking"<?php echo (isset($_POST['job']) && $_POST['job'] == 'Cooking') ? 'selected' : '';?>>Cooking</option>
            <option value="Plumbing"<?php echo (isset($_POST['job']) && $_POST['job'] == 'Plumbing') ? 'selected' : '';?>>Plumbing</option>
            <option value="Carpentary"<?php echo (isset($_POST['job']) && $_POST['job'] == 'Carpentary') ? 'selected' : '';?>>Carpentary</option>
            <option value="Electrician"<?php echo (isset($_POST['job']) && $_POST['job'] == 'Electrician') ? 'selected' : '';?>>Electrician</option>
            <option value="Driving"<?php echo (isset($_POST['job']) && $_POST['job'] == 'Driving') ? 'selected' : '';?>>Driving</option>
            </select>&emsp;

            <label for="city">City:&emsp;</label>
            <select name="city" class="form-control">
            <option>Select</option>
            <option value="Bangalore" <?php echo (isset($_POST['city']) && $_POST['city'] == 'Bangalore') ? 'selected' : '';?>>Bangalore</option>
            <option value="Ballari"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Ballari') ? 'selected' : '';?>>Ballari</option>
            <option value="Koppala"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Koppala') ? 'selected' : '';?>>Koppala</option>
            <option value="Delhi"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Delhi') ? 'selected' : '';?>>Delhi</option>
            <option value="Mumbai"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Mumbai') ? 'selected' : '';?>>Mumbai</option>
            <option value="Mysore"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Mysore') ? 'selected' : '';?>>Mysore</option>
            <option value="Palwal"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Palwal') ? 'selected' : '';?>>Palwal</option>
            <option value="Talikoti"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Talikoti') ? 'selected' : '';?>>Talikoti</option>
            <option value="Devi Camp"<?php echo (isset($_POST['city']) && $_POST['city'] == 'Devi Camp') ? 'selected' : '';?>>Devi Camp</option>

            </select>&emsp;
        </div>

         <!-- <div class="form-group">
                <label for="gender">&emsp;Gender:&emsp;</label>
                    <input type="checkbox" name="genderm" value="m">&emsp;Male&emsp;
                    <input type="checkbox" name="genderf" value="f">&emsp;Female&emsp;
                    </div>-->
                    <!-- <div class="form-group">
        <label for="gender">Gender:&emsp;</label>
            <select name="gender" class="form-control">
            <option>Select</option>
            <option value="all">All</option>
            <option value="f">Female</option>
            <option value="m">Male</option>
            </select>&emsp; -->
        <!-- </div> -->
        <div class="form-group">
                <label for="gender">&emsp;Gender:&emsp;</label>
                    <input type="checkbox" name="genderm" value="m" <?php if(isset($_POST['genderm'])) echo "checked='checked'"; ?>>&emsp;Male&emsp;
                    <input type="checkbox" name="genderf" value="f" <?php if(isset($_POST['genderf'])) echo "checked='checked'"; ?>>&emsp;Female&emsp;
                    </div>
        
            <div class="form-group">
        <label for="fullparttime">Type:&emsp;</label>
            <select name="fullparttime" class="form-control">
            <option>Select</option>
            <option value="All"<?php echo (isset($_POST['fullparttime']) && $_POST['fullparttime'] == 'All') ? 'selected' : '';?>>All</option>
            <option value="Full-Time"<?php echo (isset($_POST['fullparttime']) && $_POST['fullparttime'] == 'Full-Time') ? 'selected' : '';?>>Full-time</option>
            <option value="Part-Time"<?php echo (isset($_POST['fullparttime']) && $_POST['fullparttime'] == 'Part-Time') ? 'selected' : '';?>>Part-time</option>
            </select>&emsp;
        </div>



        <button type="submit" name = "submit" class="btn btn-default">Submit</button>
  </form>
</div>

<div class = "container content" style="padding: 30px; border-radius: 5px;">
<?php
        include("config/db.php");
        if(isset($_POST['submit'])){
            
            $job = $_POST['job'];
            $city = $_POST['city'];
            
            if($job == "Select")
            $job = "";

            if($city == "Select")
            $city = "";

            if($type == "Select")
            $type = "";

            $genderm = $_POST['genderm'];
            $genderf = $_POST['genderf'];

            //$type1 = $_POST['gender'];
            // echo "<br>";
            // echo $job;
            $type = $_POST['fullparttime'];

            if($type == "Select")
            $type = "";



            // echo "<br>";
            // echo $type;
            // echo "<br>";

            // echo $name;
            // echo $genderf;
            // echo $job;
            // echo $genderm;
            // echo $type;

            if($job == "")
            {
                echo "<div style='text-align:center; font-size: 25px;'> Please select a service </div>";
                echo '<script>alert("Please select a service");</script>';
                // echo 'swal("Heres a message!", "Its pretty, isnt it?");';
            }
            else if($city == "")
            {
                echo "<div style='text-align:center; font-size: 25px;'>Please select your city </div>";
                echo '<script>alert("Please select your city");</script>';
            }


            if(($job != "" && $city != ""))
            {
                // echo "1".$genderf;
                // echo "2".$genderm;
                // echo "3".$city;
                
                if($job == 'All')
                {
                    if($genderf != "" || $genderm != "")
                    {
                        $query = "select * from helper where gender in ('$genderf', '$genderm')  and city like '$city'";
                        
                        if($type != "" and $type != 'All')
                        {
                            $query = "select * from helper where gender in ('$genderf', '$genderm')  and city like '$city' and type = '$type'";
                        }
                    }
                    else 
                    {
                        $query = "select * from helper where  city like '$city'";
                        
                        if($type != "" and $type != 'All')
                        {
                            $query = "select * from helper where city like '$city' and type = '$type'";
                        }
                    }
                }
                else{
                    
                    if($genderf != "" || $genderm != "")
                    {
                        $query = "select * from helper where gender in ('$genderf', '$genderm') and job like '$job' and city like '$city'";
                        
                        if($type != "" and $type != 'All')
                        {
                            $query = "select * from helper where gender in ('$genderf', '$genderm') and job like '$job' and city like '$city' and type = '$type'";
                        }
                    }
                    else 
                    {
                        $query = "select * from helper where job like '$job' and city like '$city'";
                        
                        if($type != "" and $type != 'All')
                        {
                            $query = "select * from helper where job like '$job' and city like '$city' and type = '$type'";
                        }
                    }
                }
                
                $data = mysqli_query($conn, $query) or die('error');

                if(mysqli_num_rows($data) > 0){
                    while($row = mysqli_fetch_assoc($data)){
                       // session_start();
                        $hid = $row['hid'];
                        $image = $row['profileImage'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $type = $row['type'];
                        $gender = $row['gender'];
                        $address = $row['address'];
                        $city = $row['city'];
                        $age = $row['age'];
                        $experience = $row['exp'];
                        ?>
                        <br>
                <div class = "box">
                <img class = "image" src="<?php echo $image; ?>" alt="image">
                <div style="font-size: large; color:#007185;"><?php echo $fname." ".$lname;?></div>
                
                <div style="font-size: small;"><?php echo $address;?>, <?php echo $city;?></div>
                <div style="font-size: small;"><?php echo $type == 'F'? 'Full Time Worker': 'Part Time worker';?></div>
                Rating:
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                     <br>
                <button type="button"
                
                style="
    background-color:white;
    /* border-bottom: 1px solid black; */
    /* cursor: pointer; */
    /* padding: 3px;
    width: 50%;
    text-align: left;
    outline: none;
    font-size: 15px;
   border-style: outset; */
   border:none;
   padding-top: 5px;
   color: #039be5;
"
                class="collapsible">Know more</button>
                     <div class="content1" style="display:none;">
                     Experience: <?php echo $experience; ?>
                
                     </div>
                     <br>
                <!-- &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -->
               <form class="form-inline" action="register1.php" method = "POST">
                <button type="submit" id="mybutton" name = "<?php echo $hid;?>" class="btn btn-default">Book Now</button>
                </form>
                <br>
                <br>
                    <br>
            </div>
                    <?php
                    }
                }
                else{
                    echo "<div style='text-align:center; font-size: 25px;'>There is no such service available on the selected City</div>";
                }
            }
            
            
        }          
    
    ?>
	</div>
	<br><br>
	<br>
    <section id="footer"  style="background-color:#224;color:white;">
        <img src="../footer-img.png" class="footer-img">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Us Today</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Active Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday To Friday -9am to 9pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday and Sunday 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>#30 abc Colony,xyz City IN<i class="fa fa-map-marker"></i></p>
                <p>sahaayak@gmail.com<i class="fa fa-paper-plane"></i></p>
                <p>+91 9916524828<i class="fa fa-phone"></i></p>
            
            </div>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"> </i>
            <i class="fa fa-youtube-play"></i>
            <p>Copyright &copy; Team Sahayaak</p>
        </div>
    </section>





</body>

<script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


</html>
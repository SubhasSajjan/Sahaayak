<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAHAYAK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="registerstyle.css">
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



<body style="background-color:#efefef;">
<?php
        
        include("config/db.php");
        $hid =  key($_POST);
       
        //echo $hid;

        session_start();
        $_SESSION['hid'] = $hid;

       
        $query = "SELECT * FROM helper where hid = '$hid'";
                $data = mysqli_query($conn, $query) or die('error');
                if(mysqli_num_rows($data) > 0){
                    while($row = mysqli_fetch_assoc($data)){
                        // session_start();
                        $image = $row['profileImage'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $type = $row['type'];
                        $gender = $row['gender'];
                        $address = $row['address'];
                        $age = $row['age'];
                        $city = $row['city'];
                        $job = $row['job'];
                        // echo "his age is";
                        // echo "<br>"; echo $age;
                    }}
                    
                    ?>
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
                <img src="../ss.png" alt="SAHAAYAK" style="height: 12rem;position:absolute;float:left;margin-top:-0%;">
		<!--<img src="../sahaayak2.jpeg" alt="SAHAAYAK" style="height: 14rem;position:absolute;float:left;margin-top:-1%;">
		-->
		<h1 style="text-align:center; color:#009688; font-family:Kaushan Script; font-size: 70px;position:relative;">SERVICES</h1>
      </div>
      <h2 style="text-align: center";>Requested Service person:</h2><br>
        <div style="background-color:white;
    padding-top: 20px;
    padding-left: 30px;
    padding-right: 30px;
    border: 3px solid #399689;
    min-height: 180px;
    margin: auto;
    width: 50%;
    border-radius: 10px;">
                 
                        <img class = "image" src="<?php echo $image;?>" alt="image">
                        <br>
                        <div style="font-size: large;"><?php echo $fname." ".$lname;?></div>
                        
                        <div style="font-size: small;"><?php echo $address;?>, <?php echo $city;?></div>
                        
                        <div style="font-size: small;"><?php echo $job;?>, <?php echo $type == 'F'? 'Full Time Worker': 'Part Time worker';?></div>
                        Rating:
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    <br>
                            

                </div>
                        <br>

                        <h2 style="text-align: center";>Enter your details here:</h2>
                   <div style="background-color:#ffffff;
    padding-top: 20px;
    padding-left: 30px;
    padding-right: 30px;
    border: 3px solid #399689;
    min-height: 250px;
    margin: auto;
    width: 50%;
    border-radius: 10px;"> 
                
                    <form  method="post" action="../index.php" enctype='multipart/form-data' onsubmit = "return findmyvalue();">
                    <input type="hidden" id="custId" name="custId" value="<?php echo $hid;?>">
                                 <br>   
                      <input style="width:60%;"class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required>
                            <br>
                            <input style="width:60%;" class="form-control" type="text" name="phone" id="phone" placeholder="Enter your phone number" onchange="findmyvalue()" required>
                           <br>
                            <input style="width:60%;" class="form-control" type="email" name="email" id="email" placeholder="Enter your email id" required>
                            <br>
                            <textarea style="width:60%;" class="form-control" name="address" id="address" cols="20" rows="2" placeholder="Enter your address here" required></textarea>
                            <br>
                            <input style="width:60%;" class="form-control" type="date" id="from_date" placeholder="from date" name="from_date" required>
                            
                            <br>
                            

                            
                            <label  style="width:60%;" for="agreement" class="form-check-label font-ubuntu text-black-50"><input  style="width:20px;"type="checkbox" name="agreement" class="form-check-input" required>I agree <a href="#">all terms and conditions</a></label>
                            <br>
                       <button type="submit"  class="btn btn-default" value='Save name' name='but_upload'>Request</button>
                       <br>
                       <script type="text/javascript">
	
	// function myfunctionName(){

	// 	alert("We will contact you soon");
		
	// }
    function findmyvalue()
    {
    var phn = document.getElementById("phone").value;
        console.log("Hello world");
        if(phn.length != 10)
        {
            alert("Enter a valid phone number");
            return false;
        }
        else
        return true;
    
        
    }


</script>

                   </form>
        </div>
<br><br><br><br><br>
            <section id="footer"  style="background-color:#224;color:white;">
        <img src="../footer-img.png" class="footer-img">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Us Today</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Active Hours</h1>
                <p style="margin-left:-52%;"><i class="fa fa-clock-o"></i>Monday To Friday -9am to 9pm</p>
                <p style="margin-left:-46.5%;"><i class="fa fa-clock-o"></i>Saturday and Sunday 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p style="margin-right:-61.5%;">#30 abc Colony,xyz City IN<i class="fa fa-map-marker"></i></p>
                <p style="margin-right:-68%;">sahaayak@gmail.com<i class="fa fa-paper-plane"></i></p>
                <p style="margin-right:-75%;">+91 9916524828<i class="fa fa-phone"></i></p>
            
            </div>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"> </i>
            <i class="fa fa-youtube-play"></i>
            <p style="color:white;">Copyright &copy; Team Sahayaak</p>
        </div>
    </section>




        <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>











</body>

</html>

<!--<php

include("config/db.php");

if(isset($_POST['but_upload']))
{
    echo "<br><br><br><br><br><br><br><br><br>";
    print_r($_POST);
    echo "<br><br><br><br><br><br><br><br><br>";
    echo $hid;
    echo $hid;echo $hid;echo $hid;
    echo "<br><br><br><br><br><br><br><br><br>";
    $hid = $_POST['custId'];
    echo "<br><br><br><br><br><br><br><br><br>";
    echo $hid;
    echo "<br><br><br><br><br><br><br><br><br>";
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $from_date = $_POST['from_date'];
    echo "<br>";
    print_r($_POST);
    echo "hello world<br><br><br><br>";
        echo key($_POST);
    echo "<br><br><br><br>hello world<br>";
    echo $name;
    echo $from_date;
    $query = "INSERT into service_request (`name`,`phone`,`email`,`address`,`from_date`,`hid`) 
    VALUES ('$name',$phone,'$email','$address','$from_date','$hid')";
    // $query = "INSERT into service_request (name,phone,email,address,from_date) VALUES ('abdul kalam',782156,'abcdef','ghijk','123')";
    echo "<br><br>";
    echo $query;
    mysqli_query($conn,$query) or die(mysqli_error($conn));
}

?>-->



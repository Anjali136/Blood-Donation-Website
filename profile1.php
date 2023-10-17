<?php
session_start();
$query=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="profile10.css">
</head>
<body>
<div id="header">
<div class="title_main sponsor">
        
        <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
        <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
    
  </div>
   <a href="log1.php" class="top">Home</a>
     <a href="about.php" class="top">About Us</a>
     <a href="camp1.php" class="top">Blood Donation Camps</a>
     <a href="log1.php" class="top">Looking for blood</a>
     <a href="profile1.php"><img src="user.png" alt="" class="profile"></a>
    </div>

    <?php
include 'connection.php';

$selectquery="SELECT Name, Dob, Blood_group, Mobileno, Email, Address FROM registration1 WHERE Email='$query'";
$ros= mysqli_query($con,$selectquery);
$res = mysqli_fetch_array($ros);
$naming=$res['Name'];
$emailing=$res['Email'];

$select_query1="SELECT Campname FROM camp_register WHERE Name='$naming' and Email='$emailing'";
$bo=mysqli_query($con,$select_query1);
$nums=mysqli_num_rows($bo);


?>

<div class="boxx">
    <div class="head">
        <h3>My Profile</h3>
    </div>
<div>
        <form action="" method="POST">
                <div class="box">
                  <img src="user.png" alt="profile" class="image">
                  <br><br>
                  <p  class="name" name="nam" id="name"><?php echo $res['Name'] ; ?></p>
          
          <br><br><hr><br>
          <label for="email" >Email: </label>
          <p name="emai" id="email" class="blank"><?php echo $res['Email'] ; ?></p>
          <br><br><br>
          <label for="dob">Date Of Birth: </label>
          <p name="dob" id="dob" class="blank"><?php echo $res['Dob'] ; ?></p>
          <br><br><br>
          <label for="blood_group">Blood Group: </label>
          <p name="blood" id="blood" class="blank"><?php echo $res['Blood_group'] ; ?></p>
          <br><br><br>
          <label for="address">Address: </label>
          <p name="address" id="address" class="blank"><?php echo $res['Address'] ; ?></p>
          <br><br><br>
          <label for="phone">Phone: </label>
          <p name="phone" id="phone" class="blank"><?php echo $res['Mobileno'] ; ?></p><br><br><br>
          <label for="camps">Blood Camps history: </label>
          <?php 
          if($nums){
            while($boo=mysqli_fetch_array($bo)){
                ?>
                  <p name="camp"  class="blank"><?php echo $boo['Campname'] ; ?></p>
                <?php
              }
              
          }
          ?>
         
          <br><br><br>
                </div>
                <button class="button"><a href="home2.php" class="logout">Log Out</a></button>
        </form>
</div>
</div>

<section id="contact">
  <h2 class="footer-head">VitalBlood Connect</h2>
 <div id="foot" class="footer">
   <div class="want">
         <a href="" class="linkage">Want to Donate Blood</a>
         <div class="faq_don">
           <a href="camp1.php" class="sm_link">Blood Donation Camp</a>
           <a href="home2.php" class="sm_link">Donor Login</a>
           <a href="blood.php" class="sm_link">About Blood Donation</a>
         </div>
       </div>
       <div class="cont">
         <a href="privacy.php" class="linkage">About Us</a>
         <div class="faq_don">
           <a href="about.php" class="sm_link">About VitalBlood Connect</a>
           <a href="contactNEW.php" class="sm_link">Contact Us</a>
           <a href="a.php" class="sm_link">VitalBlood Connect FAQs</a>
         </div>
       </div>
         <!-- <a href="contact.php" class="linkage">Contact us</a> -->
         <div class="faq">
         <a href="" class="linkage">Looking For Blood</a>
         <div class="faq_don">
           <a href="avalability2.php" class=" sm_link">Blood  Availability</a>
           <a href="eligibleNEW.php" class="sm_link">Eligibility Requirements</a>
           <a href="common_concernsNew.php" class="sm_link">Common Concerns</a>
         </div>
       </div>
   </div>
   <div class="terms">
     <a href="termsNEW.php" class="tm_link">Terms and Condition</a>
     <a href="privacyNEW.php" class="tm_link">Privacy Policy</a>
     <p class="tm_link inline">Last Upadated- 31/07/2023</p>
   </div>
 
 </section>
   
</body>
</html>




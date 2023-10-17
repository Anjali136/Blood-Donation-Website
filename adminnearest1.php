<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminnearest.css">
</head>
<body>
<div id="header">
    <div class="title_main">
        <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
    <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
    </div>
    <!-- <div class="header_content"> -->
     <a href="adminpageNEW.php" class="top">Home</a>
   <a href="about.php" class="top">About Us</a>
   <a href="home2.php" class="top">Log Out</a>
<!-- </div> -->
</div>
<div class="img"> 
    <img src="admin.jpg" class="pic" alt="">
    <div class="image">
<h1 class="head1" class="aval">Nearest Blood Bank</h1>

<div class="content">

<!-- <div class="box1">
<div class="head">
       
        <div class="nearest"> -->
            <form action="" method="POST"class="inline"> 
            <p class="ci">State</p>
                <select name="state" id="stat" class="state"  required>
                    <option value="Choose_State">Choose State</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                </select><br>
            <p class="ci">City:</p> 
            <input type="text" class="label"name="district" placeholder="Enter City" required><br><br>
            <p class="ci">Pincode:</p>
            <input type="text"class="label" placeholder="Enter Pincode" name="pincode" maxlength="6" minlength="6" required><br><br>
            <p class="ci">BloodBank name:</p>
            <input type="text" class="label"name="address" placeholder="Enter BloodBank Name" required><br><br>
            <input type="submit"id="button" name="submit">
            </form>
           
        </div>
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

<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $state=$_POST['state'];
    $district=$_POST['district'];
    $pincode=$_POST['pincode'];
    $address=$_POST['address'];

    $insertquery="INSERT INTO nearestbank(State, City, Pincode, bloodBank) VALUES ('$state','$district','$pincode','$address')";
     $res=mysqli_query($con,$insertquery);
     if($res){
        ?>
        <script>
            alert("Submission successfull");
        </script>
        <?php
     }
}
?>
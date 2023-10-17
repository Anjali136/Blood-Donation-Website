<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nearest.css">
</head>
<body>
<div id="header">
      <div class="title_main">
        <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
        <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
      </div>
       <a href="log1.php" class="top">Home</a>
       <a href="about.php" class="top">About Us</a>
       <a href="camp.php" class="top">Blood Donation Camps</a>
       <a href="log1.php" class="top">Looking for blood</a>
    </div> 
<div class="main-content">
    <h1 class="heading">Nearest blood bank</h1>
    <p class="para">The most precious gift that one can give to another person is the gift of life i.e. blood. It is the essence of life.</p>
    <p class="para">Find where you can donate it</p>
    <fieldset>
        <div class="box1">
            <form action="" method="POST">
                Select State: 
                <select name="state" id="stat" class="state">
                    <option value="state">Select</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                </select><br><br>
                <input type="submit" name="submit" value="search" class="button">
            </form>
        </div>
    </fieldset><br><br>
    <fieldset>
        <div class="box2">
            <table>
                <thead>
                    <tr>
                        <th>&emsp;City &emsp;</th>
                        <th>BloodBank&emsp;</th>
                        <th>Pincode</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    include 'connection.php';
                    if(isset($_POST['submit'])){
                        $stat=$_POST['state'];
                        $selectquery="SELECT City,Pincode,bloodBank FROM nearestbank WHERE State='$stat'";
                        $query= mysqli_query($con,$selectquery);
                        $nums=mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query)){
                    
                    ?>
                    <tr>
                        <td>&emsp;<?php echo $res['City'] ; ?> &emsp;</td>
                        <td><?php echo $res['bloodBank'] ; ?> &emsp;</td>
                        <td><?php echo $res['Pincode'] ; ?> &emsp;</td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </fieldset>
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="camp_registerNEW.css" />
    <title>document page</title>
  </head>
  <body id="whole">

  <div id="header">
        <div class="title_main">
          <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
          <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
        </div>
         <a href="log1.php" class="top">Home</a>
         <a href="about.php" class="top">About Us</a>
         <a href="camp1.php" class="top">Blood Donation Camps</a>
         <a href="log1.php" class="top">Looking for blood</a>
        
    </div>

    <main>
      <div class="content">
        <h1 class="head">Register for Blood Camps</h1>
        <!-- <fieldset class="box"> -->

        <form action="" method="POST" class="inline">
          <label for="first" class="label">Name: </label>
          <input type="text" id="first" class="input bord" name="nam" required/>
          
         
          <label for="Phone" class="label">Mobile Number: </label>
          <input
            type="text"
            maxlength="9"
            minlength="9"
            class="input bord"
            name="phone"
            id="Phone"
            required
          />
          <label for="email" class="label">Email Address: </label>
          <input type="email" id="email" class="input bord" name="email" required/>
          <label for=" state" class="label" >State:</label>
          <input type="text" class="input bord" name="state"   required/><br><br>
          <label for=" date" class="label">Date:</label>
          <input type="date" class="input bord" name="date"  placeholder="DD-MM-YYYY" required><br><br>
          <label for="Address" class="label">Camp Name: </label>
          <input
            type="text"
            id="Address"
            class="input bord"
            name="address"
            required
          />
          
         
          <input type="submit" value="Register" class="button" name="submit" />
        </form>
      </div>
    </main>
    <!-- </fieldset> -->
    <!-- <section id="contact">
 <h2 class="footer-head">Website_name</h2>
<div id="foot" class="footer">
        <a href="terms1.php" class="linkage">Terms of Use</a>
        <a href="privacy.php" class="linkage">Privacy Policy</a>
        <a href="contact.php" class="linkage">Contact us</a>
        <a href="" class="linkage">FAQs</a>
    </div>
</section> -->
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

    if(isset($_POST['submit']))
    {
        // Retrieve form data
        $naming = $_POST['nam'];
        $number = $_POST['phone'];
        $emal = $_POST['email'];
        $state=$_POST['state'];
        $date=$_POST['date'];
        $adres = $_POST['address'];
        $flag=0;
       
        $selectquery="SELECT CampName FROM camp_scheduler WHERE State='$state' and Date='$date'";
        $reso=mysqli_query($con,$selectquery);
        $nums=mysqli_num_rows($reso);
        

            if($nums===0)
            {
                ?>
                <script>
                    alert('CampName is not avilable');
                </script>
                <?php



                
             }
             else{
                 while($khu=mysqli_fetch_array($reso)){
                    if($adres=$khu['CampName']){
                        $flag=1;
                    }
                 }
                 if($flag){
                    $insertquery = "INSERT INTO camp_register( Name, Mobileno, Email,State,Date, Campname) VALUES ('$naming','$number','$emal','$state','$date','$adres')";
                    $res=mysqli_query($con,$insertquery);
                    if($res){
                        ?>
                        <script>
                        alert('Registered Successfully!');
                     </script> 
                      
                    
    
                    <?php
                 }
                 }
                else{
                    ?>
                    <script>
                    alert('Not Registered !');
                 </script>
                 <?php
                }
             }
           }
         

      

    
    ?>
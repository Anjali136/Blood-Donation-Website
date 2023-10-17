<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="registrationNEW.css" />
    <title>registration page</title>
  </head>
  <body id="whole">

  <div id="header">
        <div class="title_main">
          <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
          <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
        </div>
         <a href="home2.php" class="top">Home</a>
         <a href="about.php" class="top">About Us</a>
        
    </div>

    <main>
      <div class="content">
        <h1 class="head">Join Us Today!</h1>
        <!-- <fieldset class="box"> -->

        <form action="" method="POST" class="inline">
          <label for="first" class="label">Name: </label>
          <input type="text" id="first" class="input bord" name="nam" required/>
          
          <label for="age" class="label">Date Of Birth: </label>
          <input type="date" id="age" class="input bord gap" name="dob" required />
          <label  class="label">Gender: </label>
          <input type="radio" id="female" name="gender" class="input gap" value="female" required/>
          <label for="female" class="label random">Female </label>
          <input type="radio" id="male" name="gender" class="input" value="male" required/>
          <label for="male"  class="label random">Male </label>
          
          <label for="Occupation" class="label">Occupation: </label>
          <input
            type="text"
            id="Occupation"
            class="input bord"
            name="occupation"
            required
          />
          <label for="blood" class="label">Blood Group:</label>
          <div class="options">
          <select name="blood" id="bgroup" class="input gap"  name="blood" required>
            <option value="A+">A+</option>
            <option value="O+">O+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="O-">O-</option>
            <option value="B-">B-</option>
            <option value="AB-">AB-</option></select
          >
        </div>
          <label for="Phone" class="label">Mobile Number: </label>
          <input
            type="number"
            maxlength="9"
            minlength="9"
            class="input bord"
            name="phone"
            id="Phone"
            required
          />
          <label for="email" class="label">Email Address: </label>
          <input type="email" id="email" class="input bord" name="email" required/>
          <label for="Address" class="label">Address: </label>
          <input
            type="text"
            id="Address"
            class="input bord"
            name="address"
            required
          />
          <label for="password" class="label">Password: </label>
          <input
            type="password"
            id="password"
            class="input bord"
            name="password"
            required
          />
          <label for="Password" class="label">Confirm Password: </label>
          <input type="password" id="Password" class="input bord" name="cpassword" required/>
           <br><br>
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
        $gend = $_POST['gender'];
        $occup = $_POST['occupation'];
        $blood_type = $_POST['blood'];
        $number = $_POST['phone'];
        $dob = $_POST['dob'];
        $adres = $_POST['address'];
        $emal = $_POST['email'];
        
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

        $pass=password_hash($password,PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

        $emailquery="select * from registration1 where Email='$emal' ";
        $query=mysqli_query($con,$emailquery);
        $emailcount=mysqli_num_rows($query);

        if($emailcount>0){
            ?>
            <script>
            alert("email already exist!!");
            </script>
            <?php
           }
           else{
            if($password===$cpassword)
            {
                $insertquery = "INSERT INTO registration1(Name, Gender, Occupation, Blood_group, Mobileno, Dob, Address, Email, Password,cpassword) VALUES ('$naming','$gend','$occup','$blood_type','$number','$dob','$adres','$emal','$pass','$cpass')";
                $res=mysqli_query($con,$insertquery);
                if($res){
                    ?>
                    <script>
                    alert('Registered Successfully!');
                 </script> 
                   
                   


                <?php
                }
                else{
                    ?>
                    <script>
                    alert('Not Registered !');
                 </script>
                 <?php
                }
             }
             else{
                ?>
                <script>
                    alert('Password not matched.Try again');
                </script>
                <?php
             }
           }
         

      

    }
    ?>

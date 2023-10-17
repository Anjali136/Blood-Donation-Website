<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
var stateObject = {
    "India": { 

"Bihar":["Patna","Muzaffarpur"],
"Delhi": ["South Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],

},

}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
<link rel="stylesheet" href="adminavailabilityNEW.css">
</head>
<body>

<div id="header">
    <div class="title_main">
        <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
    <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
    </div>
     <a href="adminpageNEW.php" class="top">Home</a>
   <a href="about.php" class="top">About Us</a>
   <a href="home2.php" class="top">Log Out</a>
   
</div>
<div class="img">
    <img src="admin.jpg" class="pic" alt="">
<div class="image">
<h1 class="head2">Blood Avalibility</h1>
<div class="head ">
            <form action="" method="POST">
             <p>Country:</p> <select  id="countySel" size="1"class="label"  name="country" required>
<option value="" selected="selected">Select Country</option>
</select>

<p>State:</p> <select  id="stateSel" size="1" name="state2"class="label" required>
<option value="" selected="selected" >Please select Country</option>
</select>
<p>District:</p> <select  id="districtSel" size="1" name="district2"class="label" required>
<option value="" selected="selected" >Please select State</option>
</select>
                <p>Blood group:</p>
                <select name="blood" id="bloodgroup" class="label" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                </select>
               <p> Blood Bank:</p>
                <input type="text" name="address2" class="put" required>
                <input type="submit"id="button" name="submit2">
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

if(isset($_POST['submit2'])){
    $country=$_POST['country'];
    $state2=$_POST['state2'];
    $district2=$_POST['district2'];
    $blood=$_POST['blood'];
    $addrress2=$_POST['address2'];

    $query="INSERT INTO blood_search(Country, State, District, Bloodgroup, BloodBank) VALUES ('$country','$state2','$district2','$blood','$addrress2')";
    $reso=mysqli_query($con,$query);
    if($reso){
       ?>
       <script>
           alert("Submission successfull");
       </script>
       <?php
    }
}
?>
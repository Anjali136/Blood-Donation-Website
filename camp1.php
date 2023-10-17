<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp Schedules</title>
    <link rel="stylesheet" href="campx.css">
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

<main class="main">
 <div class="content">
    <h1 class="head">Camp Schedules</h1>
    <form method="POST" class="form">
   <label for="country">Country: </label> 
    <select  id="countySel" size="1"class="label" required name="country">
<option value="" selected="selected"  >Select Country</option>
</select>
<br>
<br>
<label for="state">State:</label>
 <select  id="stateSel" size="1" name="state"class="label" required>
<option value="" selected="selected" >Please select Country first</option>
</select>
<br>
<br>
<label for="district">District:</label>
 <select  id="districtSel" size="1" name="district"class="label" required>
<option value="" selected="selected" >Please select State first</option>
</select><br><br>


<div id="date">
<label for=" date" >Date:</label>
</div>
<input type="date" class="label" name="date"  placeholder="DD-MM-YYYY"><br><br>
<input type="submit" name="submit"  class="button" placeholder="search" value="search"><br><br>
</form><br> <a href="camp_register.php">Visit here to register for Blood Camp</a>
<br>


<table>
    <thead>
    
    <th>State</th>
    <th>District</th>
    <th>CampName</th>
    <th>Address</th>
    <th>Time</th>
    <th>Contact</th>
    </thead>

<tbody>

           
           <?php
              include 'connection.php';
              if(isset($_POST['submit'])){
               
              $country=$_POST['country'];
              $state=$_POST['state'];
              $district=$_POST['district'];
              $date=$_POST['date'];
             
              $selectquery="SELECT  State, District, CampName, Address, Time, Contact FROM camp_scheduler WHERE   State='$state' and District='$district' and Date='$date'";
              $query= mysqli_query($con,$selectquery);
              $nums=mysqli_num_rows($query);

              if($nums==0){
               ?>
               <script>
               alert('OOPS! result not found');
            </script>
            <?php
           }
           else{
               while($res = mysqli_fetch_array($query)){
                   ?>
                  
               
                   <tr>
                   <td><?php echo $res['State'] ; ?> &emsp;</td>
                   <td><?php echo $res['District'] ; ?> &emsp;</td>
                   <td><?php echo $res['CampName'] ; ?> &emsp;</td>
                   <td><?php echo $res['Address'] ; ?> &emsp;</td>
                   <td><?php echo $res['Time'] ; ?> &emsp;</td>
                   <td><?php echo $res['Contact'] ; ?> &emsp;</td>
                   
                   <script>
                       alert('Yayy! Result found');
                   </script>
               </tr>
                <?php
                  }
           }
              
           }
           ?>
</tbody>
    
    
</table>

</div>
</main>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="avalabilityNew.css">
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
<body>
    <main class="main">
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

<div class="content">
<h1 class="aval" class="head"><u>Blood Avalibility Search</u> </h1>
     <div class="box">
<form name="myform" id="myForm" method="POST" class="inline">
<label for="">Country:</label>
<select  id="countySel" size="1"class="label" required>
<option value="" selected="selected" name="state" >Select Country</option>
</select>
<br>
<br>
<label for="">State:</label>
<select  id="stateSel" size="1" name="countrya"class="label" required>
<option value="" selected="selected" >Please select Country first</option>
</select>
<br>
<br>
<label for="">District:</label>
 <select  id="districtSel" size="1" name="district"class="label" required>
<option value="" selected="selected" >Please select State first</option>
</select><br><br>
<label for="blood" >Select Blood group: </label>
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

</select><br><br><br>
<input type="submit" name="submit" class="button" value="search"/>
</form></div>

<div>




    <div class="table">
        <table>
            <thead>
            <tr>
                
                <th>District &emsp;</th>
                <th>Blood Bank &emsp;</th>
                <th>Blood Group avalability &emsp;</th>
                
                
            </tr>
            </thead>
           <tbody>
           
            <?php
               include 'connection.php';
               if(isset($_POST['submit'])){
                
               $dist=$_POST['district'];
               $blood=$_POST['blood'];
              
               $selectquery="SELECT  District, BloodBank, Bloodgroup FROM blood_search WHERE District='$dist' and Bloodgroup='$blood'";
               $query= mysqli_query($con,$selectquery);
               $nums=mysqli_num_rows($query);

               if($nums==0){
                ?>
                <script>
                alert('OOPS! Not available');
             </script>
             <?php
            }
            else{
                while($res = mysqli_fetch_array($query)){
                    ?>
                   
                
                    <tr class="body_row">
                    
                    <td><?php echo $res['District'] ; ?> &emsp;</td>
                    <td><?php echo $res['BloodBank'] ; ?>&emsp; </td>
                    <td><?php echo $res['Bloodgroup'] ; ?> &emsp;</td>
                    <script>
                        alert('Yayy! its available');
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
</fieldset>
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


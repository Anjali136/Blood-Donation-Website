<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensuring Blood Safety: The Screening and Testing Process</title>
    <style>
        /* Reset some default styles to improve consistency */
        body, h1, h2, h3, p, ul {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
        }

        /* Navigation bar styles */
        #header{
  height: 3rem;
  position: sticky;
  top: 0;
  z-index: 1;
  /* background-color: #30A2FF; */
  /* background-image: linear-gradient(45deg,#FF0060,red); */
  background-color: teal;
  display: flex;
  align-items: center;
  justify-content: end;
  gap: 20px;
  font-size: large;

  
}
.icon{
  width: 32px;
  height: auto;
  display: inline-block;

  /* right: 44%; */
}
.title_main{
  display: flex;
  align-items: center;
  position: relative;
  right: 38%;
}
.icon_link{
  /* position: relative; */
  color: aliceblue;
  text-decoration: none;
  font-size: 1.4rem;
  padding-left: 0.5rem;
  font-weight: 600;
  font-family: "Nunito";

  /* right: 42%; */
}
.icon_link:hover,
.icon_link:focus{
  filter: brightness(120%);
}

.top{
  padding-right:10px;
  padding-left: 10px;
  color: rgba(255, 255, 255, 0.824);
  /* text-shadow: 2px 2px 2px black; */
  font-weight: 500;
  text-decoration:none;
}

.top:hover,
.top:focus{
  color: white;
  border: 1px solid rgba(255, 255, 255, 0.621);
  height: 3rem;
  display: flex;
  align-items: center;
  border-radius: 15px;

  
  }

        /* Main content container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 52px;
        }

        /* Footer styles */
        #contact{
  background-color: teal;
  min-height: 12rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  /* align-items: center; */
  gap: 2rem;
  min-height: 200px;
   /* height: 200px; */
   margin-top: 52px;
}
.linkage{
  color:white;
  font-size: 1.3rem;
  font-family: 'Nunito';
  text-decoration: none;
  background-image: linear-gradient(-45deg, #F9F5F6,#D2E9E9,#CDF0EA,#F9F9F9);
  font-weight: 600;
  -webkit-background-clip: text;
  color: transparent;
  cursor:pointer;
}
.linkage:hover{
  text-decoration: underline;
}
.footer{
  align-items: center;
  /* width: 729px; */
  /* font-family: "Nunito"; */
  justify-content: space-evenly;
  padding-bottom:1rem ;
  display: flex;
  /* padding: 61px 30px 34px 466px */
}
.footer-head{
  
  font-family: 'Nunito';
  padding-top: 2rem;
  font-size: 2rem;
  color: white;
  text-align: center;

}
.faq_don{
  margin-top: 1rem;
  display: flex;
  flex-direction: column;
}
.sm_link{
  color:white;
  font-size: 1rem;
  padding: 0.2rem;
  font-family: 'Roboto';
  /* margin-top: 1rem; */
  text-decoration: none;
  font-weight: 300;
  /* -webkit-background-clip: text; */
  /* color: transparent; */
  cursor:pointer;
}
.sm_link:hover{
  text-decoration: underline;
  filter:contrast(120%)
}
.terms{
  text-align: center;
}
.tm_link{
  color: aliceblue;
  font-weight: 200;
  font-size: 1rem;
  padding-right: 1rem;
  text-decoration: none;
  padding-bottom:1rem ;
}
.terms a:hover{
  filter: brightness(140%);
  /* color: black; */
}
.inline{
  display: inline-block;
}

        /* Image styles */
        .image-container {
            text-align: center;
            margin-bottom: 1rem;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Heading styles */
        h1, h2, h3 {
            margin-bottom: 1rem;
        }

        /* Paragraph styles */
        p {
            margin-bottom: 1.5rem;
        }

        /* List styles */
        ul {
            margin-bottom: 1.5rem;
            list-style: disc;
            padding-left: 2rem;
        }
        
    h1 {
      text-align: center;
      color: #336699; 
    }

    h3 {
      cursor: pointer;
      background-color: #e1e1e1; 
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
      color: #336699; 
    }
   
 


  
    </style>
    <script>
      function toggleAnswer(id) {
        var answer = document.getElementById(id);
        if (answer.style.display === "none") {
          answer.style.display = "block";
        } else {
          answer.style.display = "none";
        }
      }
    </script>
</head>

<body>
    <!-- Navigation Bar -->
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

    <!-- Main Content -->
    <div class="container">
    <h1>Blood Donation FAQs</h1>

    <h3 onclick="toggleAnswer('q1')">Q: Which blood groups can donate to and receive from other blood groups?</h3>
    <div id="q1" style="display:none;">
      A: Here's a quick summary of which blood groups can donate to and receive from other blood groups:

      Type A: Can donate to types A and AB. Can receive from types A and O.
      Type B: Can donate to types B and AB. Can receive from types B and O.
      Type AB: Can donate to type AB only. Can receive from types A, B, AB, and O.
      Type O: Can donate to all blood types (A, B, AB, and O). Can receive from type O only.
      Type O negative is considered the universal donor, and type AB positive is considered the universal recipient. However, this is a general guide, and there may be exceptions and additional factors to consider before a blood transfusion can take place. It's important to consult a healthcare professional for more information about blood transfusions and blood compatibility.
    </div>
    
    <h3 onclick="toggleAnswer('q2')">Q: Who can donate blood?</h3>
    <div id="q2" style="display:none;">
      A: In general, anyone who is healthy, at least 17 years old, and weighs at least 110 pounds (50 kg) can donate blood. Some other criteria may apply, such as travel or medication history.
      <br></div>
    
    <h3 onclick="toggleAnswer('q3')">Q: How often can I donate blood?</h3>
    <div id="q3" style="display:none;">
      A: In most cases, you can donate whole blood every 56 days (eight weeks). However, the interval may vary depending on the type of donation and your health status.
      <br></div>

    <h3 onclick="toggleAnswer('q4')">Q: Is it safe to donate blood?</h3>
    <div id="q4" style="display:none;">
      A: Yes, donating blood is generally safe. The donation process is regulated and every unit of blood collected is tested for infectious diseases. Some common side effects of blood donation include temporary dizziness, nausea, or fatigue.
      <br></div>
    
    <h3 onclick="toggleAnswer('q5')">Q: Can I donate blood if I have a cold or flu?</h3>
    <div id="q5" style="display:none;">
      A: No, you should wait until you fully recover before donating blood. Donating blood when you have an infection can put the recipient at risk of getting sick.
    </div>
    
    <h3 onclick="toggleAnswer('q6')">Q: How much blood is taken during a donation?</h3>
    <div id="q6" style="display:none;">
      A: A standard blood donation is about 1 pint (450 ml) of blood. This amount represents about 10% of the average adult's total blood volume.
    </div>

    <h3 onclick="toggleAnswer('q7')">Q: Can I donate blood if I have a tattoo or piercing?</h3>
    <div id="q7" style="display:none;">
      A: In most cases, yes, as long as the tattoo or piercing was done by a licensed professional and you waited long enough for it to heal properly.
    </div>
    
    <h3 onclick="toggleAnswer('q8')">Q: Can I donate blood if I am taking medication?</h3>
    <div id="q8" style="display:none;">
      A: It depends on the medication. Some medications may disqualify you from donating blood, while others are allowed as long as a certain amount of time has passed since the last dose.
    </div>
    
    <h3 onclick="toggleAnswer('q9')">Q: How long does the blood donation process take?</h3>
    <div id="q9" style="display:none;">
      A: The entire process usually takes about an hour, including registration, health screening, donation, and recovery time.
    </div>

    <h3 onclick="toggleAnswer('q10')">Q: What happens to my donated blood?</h3>
    <div id="q10" style="display:none;">
      A: The donated blood is separated into its different components (red blood cells, plasma, platelets) and tested for infectious diseases. The components are then used to treat patients with a variety of medical conditions.
    </div>
    
    <h3 onclick="toggleAnswer('q11')">Q: How can I prepare for a blood donation?</h3>
    <div id="q11" style="display:none;">
      A: Before donating blood, make sure to eat a healthy meal and drink plenty of fluids. Wear comfortable clothing that allows easy access to your arm. Avoid alcohol and smoking for at least 24 hours before the donation.
    </div>
    
    <h3 onclick="toggleAnswer('q12')">Q: Am I eligible to donate if I have been quarantined for COVID-19?</h3>
    <div id="q12" style="display:none;">
      A: If you are quarantined for any reason, you are not eligible to donate during the quarantine time period. If you are past the quarantine time and have been symptom-free for 10 days, you will be eligible to donate blood.
    </div>

    <h3 onclick="toggleAnswer('q13')">Q: What if I become sick after donating?</h3>
    <div id="q13" style="display:none;">
      A: Donors should call our Donor Support Center at 1-866-236-3276 if they become sick with any illness in the days after their donation.
    </div>
    
    <h3 onclick="toggleAnswer('q14')">Q: Can I donate after receiving the COVID-19 vaccination?</h3>
    <div id="q14" style="display:none;">
      A: You may still donate blood, platelets and plasma after receiving a COVID-19 vaccine.
    </div>
    
    <h3 onclick="toggleAnswer('q15')">Q: What if I have tested positive for COVID-19 in the last 10 days?</h3>
    <div id="q15" style="display:none;">
      A: You must be fully recovered from COVID-19 and symptom-free for a least 10 days before donating blood.

      If you have had a positive diagnostic test in the past 10 days for COVID-19 but didn’t have symptoms, you will need to wait 10 days after the COVID-19 test. 
      
       
      
      If you have a pending COVID-19 diagnostic test for COVID-19, you are not able to donate during this time. Once you have tested negative or been symptom-free for 10 days you will be eligible to donate blood.
    
    </div>
    </div>
    <!-- Footer -->
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
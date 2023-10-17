<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home0.css">
    <title>home</title>
</head>
<body>

    <div id="header">
    <div class="title_main">
        
        <img src="https://cdn-icons-png.flaticon.com/128/684/684072.png" alt="logo" class="icon" title="Home">
        <a href="blood.html" class="icon_link"> VitalBlood Connect</a>
    
  </div>
     <a href="" class="top">Home</a>
     <a href="about.php" class="top">About Us</a>
    
     
    </div>
    <main>
    <div class="content animate_it" >
    <div class="card">
        <div class="card__content">
          
          <div class="card__front">
            <h3 class="card__title">VitalBlood Connect</h3>
            <p class="card__subtitle">One hour and you can save three lives with your blood.</p>
          </div> 
          
          <div class="card__back">
             <h3 class="head card__title1">Log In</h3>
             <div class="form">
             <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="submit_form" method="POST">
            <input type="email" class="user enter log" name="email"  id="user" placeholder="Email Id" required>
            <input type="password" class="user pass log" placeholder="Password" name="password" value=""required>
            <div class="user login"> 
              <!-- <a href="" class="loginLink">Login</a> -->
              <button type="submit" class="loginLink log" name="submit" >Login</button>
              <!-- HTML !-->


            </div>
            <div class="signUp log"><a href="registrationNEW.php" class="signUplink log">Are you a new user.....?</a></div>
            <!-- <button class="user login">Login</button> -->
        </form>
        </div>
          </div>
          
        </div>
      
</div>
    </div>


   
      <!-- <div id="line">
        <button>Home</button>
        <button>About</button>
        <select name="resources" id="res">
            <option value="Gallery">Resources</option>
            <option value="FAQs">FAQs</option>
        </select>
        </div> -->
        

        
  <div class="terms">
    <a href="" class="tm_link">Terms and Condition</a>
    <a href="" class="tm_link">Privacy Policy</a>
    <p class="tm_link inline">Last Upadated- 31/07/2023</p>
  </div>

</section>
 
</body>
</html>

 
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $emailsearch="select * from registration1 where email='$email'";
    $query=mysqli_query($con,$emailsearch);
    $emailcount=mysqli_num_rows($query);


    $_SESSION['email']=$email;

    if($emailcount>0){
       $email_pass=mysqli_fetch_assoc($query);
       $db_pass=$email_pass['password'];
      
       $pass_decode=password_verify($password,$db_pass);
       if($pass_decode){
        ?>
        <script>
          alert("login successful");
         </script>
         <?php
          
        if($email=="admin123@gmail.com"){
          ?>
          <script>
          location.replace("adminpageNEW.php");
          </script>
          <?php
        }else{
          ?>
          <script>
          location.replace("log1.php");
          </script>
          <?php
        }
        ?>
       
        <?php
       }
       else{
        ?>
        <script>
          alert("password incorrect");
        </script>
        
        <?php
       }
    }else{
      ?>
      <script>
        alert("Invalid email");
      </script>
      
      <?php
    }
}

?>

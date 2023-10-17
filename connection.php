<?php
$username="root";
$password="";
$server='localhost';
$db='blood_donation';

$con=mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <script>
        alert("connection successful");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("connection is not successful");
    </script>
    <?php
}

?>
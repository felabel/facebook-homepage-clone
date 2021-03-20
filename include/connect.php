<?php
    $db_user = "root";
    $db_password = "";
    $db_name = "fb_db";
    $db_host = "localhost";

    $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if($con){
        echo 'db connected';
    } else {echo 'failed to connect to db';}
   
    

    if(isset($_POST['firstname'])){
        $firstname =  trim(mysqli_real_escape_string($con, $_POST['firstname']));
        $lastname =   trim(mysqli_real_escape_string($con,$_POST['lastname']));
        $email =      trim(mysqli_real_escape_string($con,$_POST['email']));
        $pword =      trim(mysqli_real_escape_string($con,$_POST['pword']));
        $betday =     trim(mysqli_real_escape_string($con,$_POST['betday']));
        $betmonth =   trim(mysqli_real_escape_string($con,$_POST['betmonth']));
        $betyear =    trim(mysqli_real_escape_string($con,$_POST['betyear']));
        $gender =     trim(mysqli_real_escape_string($con, $_POST['gender']));
        $date =       "$betyear-$betmonth-$betday";

        $sql = "INSERT INTO users_tb(FN, LN, Email, Password, dob, Gender) values('$firstname','$lastname', '$email', '$pword', '$date', '$gender')";
        $rst = mysqli_query($con, $sql);
    if($rst){
         echo "successfully added";
        // header("Location: login.php");
    }else{echo "try again";}
        
       
    }

?>
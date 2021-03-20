<?php
//   echo '<div id="popup" style="display: none; position: absolute; left: 0; top: 0; right: 0; bottom: 0; width: 100%; height: 100vh; background-color: rgba(0, 0, 0, 0.5); z-index: 5;margin:auto;">
//   rrrr
//  </div>';
 
    $db_user = "root";
    $db_password = "";
    $db_name = "fb_db";
    $db_host = "localhost";

    $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

   
    if(isset($_POST['mail'])){
        $email =      trim(mysqli_real_escape_string($con,$_POST['mail']));
    $pword =      trim(mysqli_real_escape_string($con,$_POST['pwords']));

    $sql = "SELECT * FROM users_tb WHERE Email = '{$email}' AND Password = '{$pword}'LIMIT 1";
    
    $rst = mysqli_query($con, $sql);
   

    $exists = mysqli_num_rows($rst);
    // echo  $exists;

    if($exists>0){
        $_SESSION['loggeduser'] = $email;
    // echo "successful";
    header("Location: resource/dashboard.php");
       
       
}else {echo "wrong password";}

    }
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mainstuff">
        <div class="nbar">
            <div class="nbar2">
            <div class="logo">facebook</div>
             <div class="signin">  

               <form action="index.php" onsubmit="//Facebook.login.signIn()" method="post" 
               >    
               
                  <div id="log"><br /><button id="loadme" type="submit" onclick="LoadMe()">  Log in</button></div>

                    <div id="pass"> Password<br /><input type="text" id="passcode" name="pwords" required /><br />
                        <a href="#" onclick="Facebook.password.showModal('popup')">Forgotten account?</a>
                        </div>
                    <div id="email">Email or Phone<br /><input type="text" id="emails"  name="mail"/></div>
                    </div>
                    

                   </div>
                </form>   
             </div>
            </div>
       </div>
</body>
</html>
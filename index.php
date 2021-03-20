<?php
 include 'include/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>facebook homepage</title>
    <link rel="stylesheet" href="css/styl.css">
    <script src="js/main.js"></script>
    <script>
        function newAjax(){
            var ajax;
            if (window.XMLHttpRequest) {
                ajax = new XMLHttpRequest();
            }else{
                ajax = new ActiveXObject("Microsoft.XMLHTTP");
            }
            return ajax;
        }
        function LoadMe(){
            var ajaxHandler = newAjax();
            ajaxHandler.onreadystatechange = function(){
                if (ajaxHandler.onreadystatechange ==4 && ajaxHandler.status==200){
                    document.getElementById("loadme").innerHTML =ajaxHandler.responseText;
                }
            }
            ajaxHandler.open("POST", "resource/popup.php", true);
            ajaxHandler.send();
        }

    </script>
</head>
<body >
  
       <?php 
      include "resource/navbar.php";
       ?>
            <div class="clear"></div>
            <div class="gbody">
                <div class="image"><p>Facebook helps you connect and share with the <br /> people in your life  </p>
                    <img src="imagf/fb community.png" alt="">
               
           </div>         
                <div class="signup">
                        <div class="acc"><p>Create an account </p></div>
            <div class="easy"><p>It's quick and easy</p></div>
            <form action="index.php" method="post"  onsubmit="//Facebook.createAccount.creatAcc()" >

            <div class="Fname" id="firstname"><input type="text"   class="firstname" required name ="firstname"  placeholder="&nbsp;First name" id="Fname" ></div>
            <div class="surname" id="sname"><input type="text" class="surname" required name="lastname" placeholder="&nbsp;surname" id="Sname"></div>
            <div class="mail" id="mail."><input type="text" class="mail" name="email" required placeholder="&nbsp;Mobile number or email address" id="phone"></div>
            <div class="newp" id="newpassword"><input type="text" class="surname" name="pword" required placeholder="&nbsp;New password" id="Newpass"></div>
            <div class="bday" id="birthday"><p>Birthday</p>
                <div class="DOB">
            <div class="day" ><select id="betday" name="betday">
                <option value="" selected disabled>choose day</option> <option>13</option>
                <option value="1">1</option>
            <option value="2">2</option><option value="3">3</option>
            <option>4</option><option >5</option>
            <option >6</option><option >7</option>
            <option >8</option><option >9</option>
            <option >10</option><option >11</option>
            <option >12</option><option >13</option>
            <option >14</option><option >15</option>
            <option >16</option><option >17</option>
            <option >18</option><option >19</option>
            <option >20</option><option >21</option>
            <option >22</option><option >23</option>
            <option >24</option><option >25</option>
            <option >26</option><option >27</option>
            <option >28</option><option >29</option>
            <option >30</option><option >31</option>
                </select>
   </div>
   <div class="month" >
<select id="betmonth" name="betmonth">
    <option value="" selected disabled>choose month</option>   
<option >Mar</option>
<option >Jan</option>
<option >Feb</option>

<option value="Apr" >Apr</option>
<option value="may">May</option>
<option value="jun">Jun</option>
<option >Jul</option>
<option >Aug</option>
<option >Sep</option>
<option >Oct</option>
<option >Nov</option>
<option >Dec</option>

</select>
   </div>
   <div class="year" >
<select id="betyear" name="betyear">
    <option value="" selected disabled>choose year</option> 
    <option value="1995">1995</option>
    <option value="2008">2008</option>   
    <option value="2007">2007</option>
    <option >2006</option>
    <option >2005</option>
    <option >2004</option>
    <option >2003</option>
    <option >2002</option>
    <option >2001</option>
    <option >2000</option>
    <option >1999</option>
    <option >1998</option>
    <option >1997</option>
    <option >1996</option>
    <option >1995</option>
    <option >1994</option>
    <option >1993</option>
    <option >1992</option>
    <option >1991</option>
    <option >1990</option>
    <option >1989</option>
    <option >1988</option>
    <option >1987</option>
    <option >1986</option>
    <option >1985</option>
    <option >1984</option>
    <option >1983</option>
    <option >1982</option>
    <option >1981</option>
    <option >1980</option>
    </select></div>
</div>
<div class="question"><a href="#">?</a></div>
</div>

<div class="cl"></div>

       <div class="gen"><p>Gender</p>
        <input type="radio"  name="gender" value="Male" id="man" onclick="Facebook.createAccount.gender('man')"/>Male
        
        <input type="radio"  name="gender" value="Female" id = "FG" onclick="Facebook.createAccount.gender('FG')"/>Female
        
        <input type="radio"  name="gender" value="Custom"  id="CD" onclick="Facebook.createAccount.gender('CD')"/>Custom
        <div class="quest"><a href="#">?</a></div>
        
       </div>
       
       <div><p style="font-size: small; color: gray;">
           By clicking Sign Up, you agree to our <a href="#" style="color: rgb(59, 89, 152); font-style: normal;text-decoration: none;">Terms, Data  
               Policy</a> and<br /><a href="#" style="color: rgb(59, 89, 152); font-style: normal; text-decoration: none;" > Cookie Policy.</a> you may receive 
               SMS notifications from us and<br /> can opt out at any time.
            </p>
        </div>

          <div class="sign"> 
          <!-- <input type="submit">   -->
        <button  id="sumit" class="result" type="submit">Sign Up</button> </div> 
        </form>
        <p></p><a href="#" style="text-decoration: none; color: rgb(35, 103, 180);">Create a Page</a> <em style="font-style: normal; color: grey;">for a celebrity, band or business</em></p><br />
</div>

</div>
<br />
    

   
   <div class="footcon">

    <div class="infoot">
        <footer>
            <p>English (UK) <a href="#"> &nbsp;&nbsp;Hausa</a> <a href="#">&nbsp;&nbsp; Francais (France)</a><a href="#">&nbsp;&nbsp;Portugues (Brasil)<a href="#">&nbsp;&nbsp; Espanol</a><a href="#"> &nbsp;&nbsp;Bahasa
                
                Indonesia</a><a href="#">&nbsp;&nbsp; Duetsh</a><a href="#"> Italiano</a><a href="#" class="plus" style="text-decoration: none; color: #0f0e0e;
                font-weight: bolder;">&nbsp;&nbsp;+</a></p><hr />
                <p>
                    <a href="#">Sign Up</a><a href="#">&nbsp; Log in</a><a href="#">&nbsp;&nbsp;Messenger</a><a href="#">&nbsp;&nbsp;Facebook Lite</a><a href="#"></a><a href="#">&nbsp;&nbsp;Watch</a><a href="#">&nbsp;&nbsp;People</a><a href="#">&nbsp;&nbsp;Pages</a><a href="#">&nbsp;&nbsp;Page categories</a><a href="#">&nbsp;&nbsp;Places</a><a href="#">&nbsp;&nbsp;Games</a><a href="#">&nbsp;&nbsp;Locations</a>
                    <a href="#">&nbsp;&nbsp;Marketplace</a><a href="#">&nbsp;&nbsp;Groups</a><a href="#">&nbsp;&nbsp;Instagram</a><br /><a href="#">Local</a><a href="#">&nbsp;&nbsp;Fundraisers</a>
                    <a href="#">&nbsp;&nbsp;Services</a><a href="#">&nbsp;&nbsp;About</a><a href="#">&nbsp;&nbsp;Create ad</a><a href="#">&nbsp;&nbsp;Create Page</a><a href="#">&nbsp;&nbsp;Developers</a><a href="#">&nbsp;&nbsp;Careers</a><a href="#">&nbsp;&nbsp;Privacy</a><a href="#">&nbsp;&nbsp;Cookies</a><a href="#">&nbsp;&nbsp;AdChoices</a><a href="#">&nbsp;&nbsp;Terms</a><a href="#">&nbsp;&nbsp;Help</a><br /><br />
                    Facebook&COPY;2020



                </p>
        </footer>

    </div>
</div>

    <!-- pop up -->
    <?php 
       include "resource/popup.php";
       ?>


</body>
</html>
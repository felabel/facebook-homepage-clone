<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="popup" style="display: none; position: fixed; left: 0; top: 0; right: 0; bottom: 0; width: 100%; height: 100vh; background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.5); Z-index: 15;">

<div style="position: relative; width: 100%; height: 100%;">

    <div style="position: absolute; left: 50%; top: 40%; transform: translate(-50%, -50%); width: 550px; height: 180px; color: black; background-color: #f7f7f7; border: solid thin #969696; border-radius: 5px;">
        <div class="sections" style="position: relative; width: 95%; margin: auto; " >
            <div id="popheader" class="popsections" style="border-bottom: solid thin #b9b9b9; height: 30px;" >
                <h4>Find Your Account</h4>
            </div>
            <div id="emailsection" class="popsections" style="position: relative; width: 75%; margin: auto; font-size: 13px;" >
               <p>Please enter your email address or phone number to search for your account.</p>
               <input id="emel" type="text"placeholder="Mobile Number" style="width: 60%; border: solid thin #b9b9b9; margin-right: 150px;" >
            </div>
        </div>
        <div id="submitsection" class="sections" style="position: absolute; bottom: 0; width: 100%; height: 40px; background-color:  rgb(212, 212, 212); border-top: solid thin #b9b9b9; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
            <div style="position: absolute; right: 2%; top: 20%;">
                <form action="javascript:void(0)" style="display: inline-block;" onsubmit="Facebook.password.forgottenPassword()">
                    <button style="color: #fff; background-color: #516899;border: solid thin #2e4f79; border-radius: 2px; font-weight: 600; height: 25px">Search</button>
                </form>
                <button style=" background-color: honeydew; color: grey; border: solid thin #b9b9b9; border-radius: 2px; font-weight: 600; height: 25px"  onclick="Facebook.password.cancel('popup')">Cancel</button>
            </div>
           
        </div>
    </div>

</div>

</div>
</body>
</html>
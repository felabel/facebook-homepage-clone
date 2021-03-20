// create a function

var Facebook = {
        login: {
             signIn : function(){
                  
                   var email = document.getElementById("emails").value;
                   var  pass = document.getElementById("passcode").value; 
                   
                //    alert(pass);  
                   var arrayLogin = [
                        [email, "Enter your email address"],
                        [pass, "Enter your password"]
                   ];
                   var j, elem;
                   for(j =0; j < arrayLogin.length; j++){
                        elem = arrayLogin[j];
                        if (elem[0] == ""){
                              alert (elem[1]); return; 
                              
                        };
                }

                        }   
                },
                password : {
                        showModal: function(id){
                                document.getElementById("popup").style.display = "block"
                        },
                        forgottenPassword:function() {
                                var emel = document.getElementById("emel").value;
                                arrayIndex = [emel, "Enter email or phone number"];
                                if (arrayIndex[0] == "") {
                                    alert(arrayIndex[1]);
                                    return;
                                }
                                var sendToServer = "emel="+escape(emel);
                                console.log(sendToServer);
                        // q CBNM,BNM./"
                        location = "sendAJAX.php?server="+escape(sendToServer);
                            },
                            cancel:function(id){
                                document.getElementById(id).style.display = "none";
                                
                            }
                },
                createAccount: {
                        getGender: null,
                        gender: function(ID){
                                switch(ID){
                                        case "man":
                                        Facebook.createAccount.getGender = "male";
                                                break;
                                        case "FG" :
                                        Facebook.createAccount.getGender += "Female";
                                        break;
                                        default:
                                        Facebook.createAccount.getGender += "Custom";
                                        break;
                                }
                        },
                        creatAcc : function(){
                           var firstname = document.getElementById("Fname").value;
                           var surname = document.getElementById("Sname").value;
                           var phoneNumber = document.getElementById("phone").value;
                           var Newpassword = document.getElementById("Newpass").value;
                           var bday = document.getElementById("betday").value;
                           var bmonth = document.getElementById("betmonth").value;
                           var byear = document.getElementById("betyear").value;
                           
                           var arrayIndex = [
                                   [firstname, "Enter First Name"],
                                   [surname, "Enter surname"],
                                   [phoneNumber, "Enter phoneNumber or Email"],
                                   [Newpassword, "Enter Newpassword"],
                                   [bday, "Enter day"],
                                   [bmonth, "Enter  month"],
                                   [byear, "Enter year"]
                                ];
                                var i, element;
                                   for(i = 0; i < arrayIndex.length; i++){
                                        element = arrayIndex[i];
                                        if (element[0] == ""){
                                              alert (element[1]); return; 
                                        };
                                }
                        var gender = Facebook.createAccount.getGender;
                        if(gender == null){alert("Choose your gender");}
                        else alert("all details are provided");
                        
                        var sendToServer = "FN="+escape(firstname)+"&SN="+escape(surname)+"&PN="+escape(phoneNumber)+"&PS="+escape(Newpassword)+"&DOB="+escape(bday)+"&MOB="+escape(bmonth)+"&YOB="+escape(byear)+"&SEX="+escape(gender);
                        console.log(sendToServer);
                        window.location = "sendAJAX.php?server="+escape(sendToServer);
                },     
         }
        }
        
        //http://localhost/fbook.html/sendAJAX.php?server=FN%3Dfdh%26SN%3Dessien%26PN%3D09063843098%26PS%3D5667%26DOB%3D15%26MOB%3DJan%26YOB%3D1993%26SEX%3Dmale
                                   
                        
                        

            

                
                          






               


                           
                           
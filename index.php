<?php
/**
 * Created by PhpStorm.
 * User: Ras Goal Gule
 * Date: 2/16/2017
 * Time: 12:37 PM
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>LISP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="lib/jquery-3.1.1.js"></script>

</head>
<body>
        <div class="first-padding w3-light-blue">
            <header class="w3-row">
                <div class="w3-col m1">
                    head-left
                </div>
                <div class="w3-col m10">
                    <ul class="w3-navbar ">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li  class="w3-right"><a href="#" onclick="document.getElementById('id01').style.display='block'">Sign In / Sign up</a></li>
                    </ul>
                </div>
                <div class="w3-col m1">
                    head-right
                </div>
            </header>
        </div>
        <div class="second-padding">
           <div class="w3-row">
               <div class="w3-col m2 w3-blue">
                   body-left
               </div>
                   <div class="w3-col m8">
                       <div class="w3-row">
                           body-main
                       </div>
                       <div class="w3-row">
                           catagories list
                       </div>
                       <div class="w3-row w3-card w3-light-gray">
                           <div class="w3-col m4 w3-card-4">popular list left</div>
                           <div class="w3-col m4 w3-card-4">popular list center</div>
                           <div class="w3-col m4 w3-card-4">popular list right</div>
                       </div>
                   </div>
               <div class="w3-col m2 w3-blue">
                   body-right
               </div>
           </div>
        </div>
        <div class="first-padding w3-light-blue">
           <footer class="w3-container">
               footer
           </footer>
        </div>

<!--model for login screen-->
         <div id="id01" class="w3-modal ">
             <input type="hidden" value="1" id="loginActive" class="loginActive">
             <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">×</span>
             <div class="w3-modal-content">
                 <div class="w3-card-4">
                     <header class="w3-container w3-blue">
                         <h1 id="page_name">LOG IN</h1>
                     </header>

                     <div class="w3-container w3-light-gray w3-padding-24 ">
                         <label id="label1">User Name/Email:</label>
                         <input id="userEmail" class="w3-input" type="text" placeholder="Enter name">

                         <label id="label2">Password:</label>
                         <input  class="w3-input" type="text" placeholder="how to change it in the java script">
                         <!--how to change the 'placeholder' value by using java script-->
                         <div class="login_option" id="login_option">
                             <input class="w3-check" type="checkbox" checked="checked">
                             <label class="w3-validate">Remember</label>
                             <br>
                             <span>Forget<a href="#">password?</a></span>
                         </div>
                     </div>

                     <footer class="w3-container w3-blue w3-padding-16">
                         <span><button class="w3-btn w3-lime" id="submit_button">LOG IN</button></span>
                         <span><button class="w3-btn w3-lime" onclick="document.getElementById('id01').style.display='none'" >Cancel</button></span>
                         <a class="w3-right" id="toggle_signup" href="#">Sign up</a>
                     </footer>
                 </div>
             </div>
        </div>

<script>
    $("#toggle_signup").click(function () {
        if($("#loginActive").val()=="1"){
            $("#loginActive").val("0");
            $("#page_name").html("SIGN UP");
            $("#label1").html("Organization Name:");
            $("#label2").html("Email:");
            $("#login_option").hide();
            $("#submit_button").html("SIGN UP");
            $("#toggle_signup").html("Log in");
        }else {
            $("#loginActive").val("1");
            $("#page_name").html("LOG IN");
            $("#label1").html("User name/Email:");
            $("#label2").html("Password:");
            $("#login_option").show();
            $("#submit_button").html("LOG IN");
            $("#toggle_signup").html("Sign up");
        }
    });
    $("#submit_button").click(function () {
       //alert("submited");
        alert($("#userEmail").val(),$("#"));
    });
</script>
</body>
</html>

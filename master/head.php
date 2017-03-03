<?php
   include '/pages/login.php';
?>
<!doctype hmtl>
<html>
  <head>
    <title>ILSP-finalproject</title>

<link rel="stylesheet" type="text/css" href="lib/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--the linking of the javasctipt is not working
  <script type="text/javascript" src="../js/script.js"></script>
-->
  <head>        

    <body>
      <div class="full_body w3-container w3-light-blue">
        <!--the page header-->
        <div class=" w3-row">
            <div class="w3-col m3">
              <div class="logo">
              </div>
            </div>

            <div class="w3-col m9 ">
              <div class="auth w3-right w3-khaki">
                <a href="#" >signup</a> /
                <a href="#" onclick="document.getElementById('id01').style.display='block'">signin</a>
              </div>
          </div>
        </div>

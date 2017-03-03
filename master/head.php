<?php
include $_SERVER['DOCUMENT_ROOT'] . '/ILSP-final-project/pages/login.php';
?>
<!doctype hmtl>
<html>
  <head>
    <title>ILSP-finalproject</title>

<link rel="stylesheet" type="text/css" href="/ILSP-final-project/lib/w3.css">
<link rel="stylesheet" type="text/css" href="/ILSP-final-project/css/style.css">
<!--the linking of the javasctipt is not working
  <script type="text/javascript" src="../js/script.js"></script>
-->
  <head>

    <body>
      <div class="full_body w3-container w3-light-blue">
        <!--the page header-->
        <div class="page_header w3-row">
            <div class="w3-col m3">
              <a href="/ILSP-final-project/">
                <div class="logo">
                </div>
              </a>
            </div>

            <div class="w3-col m9 ">
              <div class="auth w3-right w3-khaki">
                <a href="/ILSP-final-project/pages/signup.php" >signup</a> /
                <a href="#" onclick="document.getElementById('id01').style.display='block'">signin</a>
              </div>
          </div>
        </div>

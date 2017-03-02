<?php
/**
 * Created by PhpStorm.
 * User: Ras Goal Gule
 * Date: 2/16/2017
 * Time: 12:37 PM
 */
?>

<!doctype hmtl>
<html>
  <head>
    <title>ILSP-finalproject</title>

<link rel="stylesheet" type="text/css" href="lib/w3.css">
  <style>

    .full_body{
      height: 100%;
      width: 100%;
      padding:0px;
      background-image: url("img/background.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }
    .myimage{
      width: 100%;
      height: 100%;

    }
    .logo{
      background-color: red;
      height: 80px;
      width: 110px;
      margin-left: 120px;

    }
    .auth{
      margin-right: 120px;
      padding: 10px;
      border-bottom-left-radius: 14px;
      border-bottom-right-radius: 14px;

    }
    .search{
      margin: auto;
      text-align: center;
      margin-top:150px;
      background-color:#ffffff;
      width: 600px;
    }


  </style>
  <head>

    <body>
      <div class="full_body w3-container w3-light-blue">
        <div class=" w3-row">
            <div class="w3-col m3">
              <div class="logo">
              </div>
            </div>

            <div class="w3-col m9 ">
              <div class="auth w3-right w3-khaki">
                <a href="#">signup</a> /
                <a href="#">signin</a>
              </div>
          </div>
        </div>
        <div class="w3-row">
            <div class="search">
                search box here
            </div>
        </div>
      </div>
    </body>
</html>

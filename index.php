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
    .search_title{
      margin: auto;
      text-align: center;
      margin-top:100px;
      background-color:#ffffff;
      width: 150px;

    }
    .search{
      margin: auto;
      text-align: center;
      margin-top:30px;
      background-color:#ffffff;
      width: 600px;
    }
    .search_button{
      margin: auto;
      text-align: center;
      margin-top:10px;

      width: 600px;
    }

    .serch_form{
      padding: 20px;
    }
    .catagories{
    //margin-top: 20px;
      text-align: center;
      background-color: #3e3e3e;
      text-align: center;
      height: 40px;
    }
    .catagories_list{
      width: 1024px;
      align-items: center;
    }
    .catagories_list ul li{
      display: inline;
      text-decoration: none;
      padding: 5px;

    }
    .footer{
      margin-top: 5px;
      margin-bottom: 5px;
      margin-left: 120px;
      margin-right: 120px;
      overflow: auto;
    }
    .cards{

      margin: auto;
      height: 150px;
      padding: 10px;
    }
    .copyWright{
      background-color: black;
      margin-bottom: 0px;
      color: #ffffff;
      padding: 10px;

    }
      </style>
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
                <a href="#">signup</a> /
                <a href="#">signin</a>
              </div>
          </div>
        </div>

          <!--the serch_form-->
        <div class="w3-row">
          <div class="search_title">
              <p class="w3-xlarge">Search:<!--<img src="img/icon/logoname.png"/>--></p>
          </div>
            <div class="search">
              <ul class="w3-navbar">
                 <li><a href="#" onclick="openCity('sea_place')">place</a></li>
                 <li><a href="#" onclick="openCity('sea_name')">name</a></li>
                 <li><a href="#" onclick="openCity('sea_service')">service</a></li>
              </ul>
              <div id="sea_place" class="sea_input">
                <form class="serch_form">
                  <label>search: </label>
                  <input type="text" placeholder="enter the place name">
                  <label>near: </label>
                  <input type="text" placeholder="location">
                </form>
              </div>

              <div id="sea_name" class="sea_input">
                <form class="serch_form">
                  <label>search: </label>
                  <input type="text" placeholder="enter the name">
                  <label>near: </label>
                  <input type="text" placeholder="location">
                </form>
              </div>

              <div id="sea_service" class="sea_input">
                <form class="serch_form">
                  <label>search: </label>
                  <input type="text" placeholder="enter the service name">
                  <label>near: </label>
                  <input type="text" placeholder="location">
                </form>
            </div>
            <div class="search_button">
              <button class="w3-btn w3-round-large w3-right">Rounder</button>
            </div>
          </div>
        </div>
      <!--the catagories-->
      <div class="catagories">
        <div class="catagories_list">
            <ul >
              <li>Restorant</li>
              <li>Gas station</li>
              <li>hospital</li>
              <li>Bar</li>
            </ul>
        </div>
      </div>
    </div>
    <!--footer-->
<br>
    <div class="footer  w3-light-blue">
      <div class="w3-col m4 w3-card-3 cards">aa</div>
      <div class="w3-col m4 w3-card-4 cards">bb</div>
      <div class="w3-col m4 w3-card-3 cards">cc</div>

    </div>
    <div class="w3-row ">
      <p class="copyWright">&copy; WeGoTogeter Team Foundation. <i>year</i></div>
    </div>
      <script>
      openCity("sea_name");
      function openCity(search_input) {
        var i;
        var x = document.getElementsByClassName("sea_input");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(search_input).style.display = "block";
      }
      </script>
    </body>
</html>

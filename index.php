<?php
/**
 * Created by PhpStorm.
 * User: Ras Goal Gule
 * Date: 2/16/2017
 * Time: 12:37 PM
 */
 include 'master/head.php';

?>


          <!--the serch_form-->
        <div class="w3-row">
          <div class="search_title">
              <p class="w3-xlarge">Search:<!--<img src="img/icon/logoname.png"/>--></p>
          </div>
            <div class="search">
              <ul class="w3-navbar">
                 <li><a href="#" onclick="openSearch('sea_place')">place</a></li>
                 <li><a href="#" onclick="openSearch('sea_name')">name</a></li>
                 <li><a href="#" onclick="openSearch('sea_service')">service</a></li>
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
    <br>
    <div class="footer  w3-light-blue">
      <div class="w3-col m4 w3-card-3 cards">aa</div>
      <div class="w3-col m4 w3-card-4 cards">bb</div>
      <div class="w3-col m4 w3-card-3 cards">cc</div>

    </div>
<?php include 'master/footer.php' ?>
  </body>
  <script>
    openSearch("sea_name");
    function openSearch(search_input) {
      var i;
      var x = document.getElementsByClassName("sea_input");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      document.getElementById(search_input).style.display = "block";
    }
  </script>
</html>

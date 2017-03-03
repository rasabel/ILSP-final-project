<!--model for login screen-->
 <div id="id01" class="w3-modal ">
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
                 <input  class="w3-input" type="text" placeholder="Enter password">
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
             </footer>
         </div>
     </div>
</div>

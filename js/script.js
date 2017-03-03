
//search tabs maker
openSearch("sea_name");
function openSearch(search_input) {
  var i;
  var x = document.getElementsByClassName("sea_input");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  document.getElementById(search_input).style.display = "block";
}

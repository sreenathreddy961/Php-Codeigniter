<style type="text/css">
.dropbtn {
  background-color: white;
  color: black;
  padding: 2px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content button {
  color: black;
  padding: 2px 6px;
  text-decoration: none;
  display: block;
}
.dropdown:hover .dropdown-content {display: block;}
.dropdown-content button:hover {background-color: lightgreen;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>


<div style="display:none" id="od">
  <iframe style="width:25%;height:35%;outline:none" src="assets/Calculator"></iframe>
</div>

<button onclick="overDraw()" >Cal.Open</button>
<button onclick="overDrawClose()">Cal.Close</button>

<div class="dropdown">
  <button onclick="myThemeOpen()" class="dropbtn" style="float:right;margin-right:1%">Theme Changer</button>
  <div class="dropdown-content">
      <button onclick="myThemeRed()">Red</button>
      <button onclick="myThemeTomato()">Tomato</button>
      <button onclick="myThemeLightBlue()">LightBlue</button>
      <button onclick="myThemeMerunRed()">MerunRed</button>
  </div>
</div>


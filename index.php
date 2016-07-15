<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-family: "Raleway", sans-serif;}
</style>
<body class="w3-light-grey">
  <!-- Top container -->
  <div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
    <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open()">☰  Menu</button>
    <span class="w3-right">Logo</span>
  </div>

  <!-- Sidenav/menu -->
  <nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;"><br>
    <div class="w3-container">
      <h5>Dashboard</h5>
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="/home/harshitha/Desktop/input.jpg" class="w3-circle" height="106" width="106" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
    </div>
  </nav>


  <!-- Overlay effect when opening sidenav on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><b>My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
      <div class="w3-quarter">
        <div class="w3-container w3-red w3-padding-16">
          <div class="w3-left"><i class="fa fa-comment w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>52</h3></div>
          <div class="w3-clear"></div>
          <h4>Courses</h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-blue w3-padding-16">
          <div class="w3-left"><i class="fa fa-eye w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>99</h3></div>
          <div class="w3-clear"></div>
          <h4>Chapters</h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-teal w3-padding-16">
          <div class="w3-left"><i class="fa fa-share-alt w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>23</h3></div>
          <div class="w3-clear"></div>
          <h4>Assignments</h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-orange w3-text-white w3-padding-16">
          <div class="w3-left"><i class="fa fa-users w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>50</h3></div>
          <div class="w3-clear"></div>
          <h4>Students</h4>
        </div>
      </div>
    </div>

    <div class="w3-container w3-section">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-twothird">
          <h5>Feeds</h5>
          <table class="w3-table w3-striped w3-white">
            <tr>
              <td><i class="fa fa-user w3-blue w3-padding-tiny"></i></td>
              <td>New record, over 90 views.</td>
              <td><i>
              <div class="w3-progress-container w3-grey " style="width:80px">
                      <div id="myBar" class="w3-progressbar w3-green" style="width:25%">
                        <div class="w3-center w3-text-white">+25%</div>
                      </div>
                    </div>
              </i></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <hr>

   
    <div class="w3-container">
      <h5>Recent Users</h5>
      <ul class="w3-ul w3-card-4 w3-white">
        <li class="w3-padding-16">
          <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>
          <img src="img_avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
          <span class="w3-xlarge">Mike</span><br>
        </li>
        <li class="w3-padding-16">
          <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>
          <img src="img_avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
          <span class="w3-xlarge">Jill</span><br>
        </li>
        <li class="w3-padding-16">
          <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>
          <img src="img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
          <span class="w3-xlarge">Jane</span><br>
        </li>
      </ul>
    </div>
    <hr>

    <br>
    <div class="w3-container w3-dark-grey w3-padding-32">
      <div class="w3-row">
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-green">Demographic</h5>
          <p>Language</p>
          <p>Country</p>
          <p>City</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-red">System</h5>
          <p>Browser</p>
          <p>OS</p>
          <p>More</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-orange">Target</h5>
          <p>Users</p>
          <p>Active</p>
          <p>Geo</p>
          <p>Interests</p>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="w3-container w3-padding-16 w3-light-grey">
      <h4>FOOTER</h4>
      <p>Template by <a href="/w3css">w3.css</a></p>
    </footer>

  <!-- End page content -->
  </div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
 
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

</body>
</html>
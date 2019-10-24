<!DOCTYPE html>
<?
include 'connect.php';
include 'signup.php';
?>
<html>

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>





<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">E-learning</h1>
   <center>
   
    <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large ">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green ">Login</button>
        <hr class="w3-opacity">
          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green ">Sign Up</button>

       
     </div>
   
   
</center>
  </div
  <div class="w3-display-bottomleft w3-padding-large">
    <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a>
  </div>
</div>
<div class="w3-container">
 
 <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
      
      <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
       
      </div>

      <form class="w3-container" action='signup.php' method='post'>
        <div class="w3-section">
          
          <label><b>Email</b></label>
          <input class="w3-input w3-border" type="email" name='email' required/>
          <label><b>Enter Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"name='username' required/>
          <label><b>Enter Password</b></label>
          <input class="w3-input w3-border" type="password"  name='password' required/>
          
          ​ <label><b>DOB</b></label>
          <input class="w3-input w3-border" type="date" name='DOB' required>

<label><b>Gender</b></label>
      <br> 
<input type="radio" name='gender' value="male"> Male<br>
  <input type="radio" name='gender' value="female"> Female<br>
  <input type="radio" name='gender' value="other"> Other

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Sign Up</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        
      </div>

    </div>
  </div>

 
  
  
    
  
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
            
</body>
</html>

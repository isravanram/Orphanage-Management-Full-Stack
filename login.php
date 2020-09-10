<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>
    Login page
    </title>
    <link rel="stylesheet" href ="css/logstyle.css">
    </head>

    <style>
body {
  background-image: url('bck.jpg');
      background-repeat: repeat;
}
    </style>  
    <body>
   <div id="main-wrapper">
    <center><h1>Login form</h1>
       <img src="icon.jpg" class="icon">
        </center>
   
        <form class ="myform" action="index.php" method="post">
        <label><b>USERNAME </b></label>
            <input type="text" class="inputvalues" placeholder="Type your username"/><br>
            <label><b>PASSWORD </b></label>
            <input type="password" class="inputvalues" placeholder="****"/><br>
            <input type="submit" id="login_btn" value="Login"/><br>
            <input type="button" id="reg_btn" value="Register"/><br><br>
        </form>
     </div> 
</body>
</html>
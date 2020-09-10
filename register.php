<?php
require "dbconfig/config.php";
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style> 
body {

  background-color: azure;
    background-image: url('images/light.jpg');
      background-repeat: repeat;
    }
    </style>

<div class="container">
	<div class="row">
        <div class="col-md-4">
            <form action="" method="post" id="fileForm" role="form">
            
                <fieldset>
                <legend class="text-center">  REGISTRATION FORM <span class="req"></span></legend>
                
            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> First name: </label>
                    <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>

            <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label> 
                    <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder=" " required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>
                <div class="form-group">
                    <label for="birthDate" span class="col-sm-3 control-label"> Date of Birth :</label>
                    
                        <input type="date" id="birthDate" class="form-control">
                    
                </div>
                <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=" "/> 
            </div>
                <div class="form-group">
                    
            <label for="Country"><span class="req">* </span> Country: </label>
                    <input required type="text" name="Country" id="country" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=" "/> 
            </div>
                  <div class="form-group">
                    
            <label for="State"><span class="req">* </span> State : </label>
                    <input required type="text" name="State" id="state" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=" "/> 
            </div>
                   <div class="form-group">
                    
            <label for="State"><span class="req">* </span> Ocuupation : </label>
                    <input required type="text" name="State" id="state" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=" "/> 
            </div>
                   <div class="form-group">
                    
            <label for="State"><span class="req">* </span> Address : </label>
                    <input required type="text" name="State" id="state" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=" "/> 
            </div>
                   <div class="form-group">
                    
            <label for="State"><span class="req">* </span> Workplace : </label>
                    <input required type="text" name="State" id="state" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=" "/> 
            </div>

            <div class="form-group">
                <label for="username"><span class="req">* </span> User name:  <small>This will be your login user name</small> </label> 
                    <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 6 letters" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" />

                <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            
                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>

                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
            </div>
                    <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
                </fieldset>
            
            </form><!-- ends register form -->
    <?php

    if(isset($_POST['submit_reg']))
    {
        echo '<script type="text/javascript"> alert{"Sign up button clicked"} </script>';
    }
    ?>

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>

    </div>
	</div>
</div>
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
    registration form
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    
<body>
    <div class="container">
    <div class="header">
        <h2>Registartion Form</h2>
        <form class="form" id="form">
            
        <div class="form-control">
            
            <label>First name</label>
            <input type="text" name="" id="Firstname" placeholder="Enter your First name" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
        
            
            
            <div class="form-control">
            <label>Last name</label>
            <input type="text" name="" id="Lastname" placeholder="Enter your Last name" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
             <div class="form-control">
            
            <label>username</label>
            <input type="text" name="" id="username" placeholder=" " autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
        
            <div class="form-control">
            <label>Password</label>
            <input type="password" name="" id="password" placeholder="***" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            
            <div class="form-control">
            <label>Confirm Password</label>
            <input type="password" name="" id="confirmpassword" placeholder="***" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>Date of birth</label>
            <input type="date" name="" id="dateofbirth" placeholder=" " autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            
            <div class="form-control">
            <label>Occupation</label>
            <input type="text" name="" id="occupation" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>	Work place</label>
            <input type="text" name="" id="	Workplace" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>	State</label>
            <input type="text" name="" id="	state" placeholder=" " >
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>Country</label>
            <input type="text" name="" id="country" placeholder=" " autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <div class="form-control">
            <label>Address</label>
            <input type="text" name="" id="address" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <div class="form-control">
            <label>Email</label>
            <input type="text" name="" id="email" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <div class="form-control">
            <label>Phone</label>
            <input type="number" name="" id="phone" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <input type="submit" value="Submit" class="btn" name="">
            
        </form>
        </div>
     </div>
    </body>
    
    <!--javascrip -->
    <script type="text/javascript">
        const form=document.getElementById('form');
        const Firstname=document.getElementById('Firstname');
        const Lastname=document.getElementById('Lastname');
        const username=document.getElementById('username');
        const password=document.getElementById('password');
        const confirmpassword=document.getElementById('confirmpassword');
        const dateofbirth=document.getElementById('dateofbirth');
        const occupation=document.getElementById('occupation');
        const Workplace=document.getElementById('Workplace');
        const state=document.getElementById('state');
        const country=document.getElementById('country');
        const address=document.getElementById('address');
        const email=document.getElementById('email');
        const phone=document.getElementById('phone');
        
        //addevent
    
        form.addEventListener('submit',(event) =>{
            event.preventDefault();
            
            validate();
         })
        
        const isEmail=(emailVal)=> {
            var atSymbol = emailVal.indexOf("@");
            if(atSymbol < 1) return false;
            var dot=emailVal.indexOf('.');
            if(dot <= atSymbol + 2) return false;
            if(dot == emailVal.length-1) return false;
            return true;
            
        }
        
     //defne the validate function
        
        const validate=()=> {
            
            
        const FirstnameVal=Firstname.value.trim();
        const Lastname=Lastname.value.trim();
        const usernameVal=username.value.trim();
        const password=password.value.trim();
        const confirmpasswor=confirmpassword.value.trim();
        const dateofbirth=dateofbirth.value.trim();
        const occupation=occupation.value.trim();
        const Workplace=Workplace.value.trim();
        const state=state.value.trim();
        const country=country.value.trim();
        const address=address.value.trim();
        const emailVal=email.value.trim();
        const phone=phone.value.trim();
            
            if(FirstnameVal ==""){
                setErrorMsg(Firstname,'please fill this col);
                            
            }
                else if(FirstnameVal.length <=2)
                {
                    setErrorMsg(Firstname,'please fill this col');
                }else {
                                setSuccessMsg(Firstname);
                                }
            if(username ==""){
                setErrorMsg(username,'please fill this col);
                            
            }
                else if(usernameVal.length <=2)
                {
                    setErrorMsg(username,'please fill this col');
                }else {
                                setSuccessMsg(username);
                                }                
        if(emailVal == ""){
                setErrorMsg(email,'please fill this col);
                            
            }
                else if(!isEmail(emailVal))
                {
                    setErrorMsg(email,'please fill this col');
                }else {
                                setSuccessMsg(Lastname);
                                }                        
        }
        function setErrorMsg(input,errormsg)
                {
                    const formControl =input.parentElement;
                    const small = formControl.querySelector('small');
                    formControl.className="form-control error";
                    small.innerText= errormsg;
                    
                }
    </script>
    
    
    
    
</html>
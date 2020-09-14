<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
    registration form
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style1.css">

    </head>

<body>
    <div class="container">
    <div class="header">
    <form class="form" id="form" method="post" action="staffinsert.php">
            
        <div class="form-control">
            
            <label>Organization name :</label>
            <input type="text" name="Name" id="Name" placeholder="Enter the name of your organization" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
        
            
            
            <div class="form-control">
            <label>Description</label>
            <input type="text" name="Description" id="Description" placeholder="About your organization" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
             <div class="form-control">
            
            <label>Branch</label>
            <input type="text" name="Branch" id="Branch" placeholder="Enter the Branch name" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
        
            <div class="form-control">
            <label>Password</label>
            <input type="password" name="Password" id="password" placeholder="***" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            </div>
            
        
            <div class="form-control">
            <label>Confirm Password</label>
            <input type="password" name="Confirm" id="confirmpassword" placeholder="***" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>Year of Establishment</label>
            <input type="text" name="Year" id="Year" placeholder="Enter the year of establishment " autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            
            <div class="form-control">
            <label>Pincode</label>
            <input type="text" name="Pincode" id="Pincode" placeholder="Enter the pincode" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>Place</label>
            <input type="text" name="Place" id="Place" placeholder="Place" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>	State</label>
            <input type="text" name="State" id="state" placeholder=" " >
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            
            <div class="form-control">
            <label>Country</label>
            <input type="text" name="Country" id="Country" placeholder=" " autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <div class="form-control">
            <label>Address</label>
            <input type="text" name="Address" id="Address" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <div class="form-control">
            <label>Email</label>
            <input type="text" name="Email" id="Email" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <div class="form-control">
            <label>Phone</label>
            <input type="number" name="Phone" id="Phone" placeholder="" autocomplete="off">
            <i class="far fa-check-circle"></i> 
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            
            </div>
            <input type="submit" value="Submit" class="btn" name="">
            
        </form>
        </div>
    </div>
</body>

</html>
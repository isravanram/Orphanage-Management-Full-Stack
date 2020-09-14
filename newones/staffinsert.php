<?php

$Name=$_POST["Name"];
$Description=$_POST["Description"];
$Branch=$_POST["Branch"];
$Password=$_POST["Password"];
$Year=$_POST["Year"];
$Pincode=$_POST["Pincode"];
$Place=$_POST["Place"];
$State=$_POST["State"];
$Country=$_POST["Country"];
$Address=$_POST["Address"];
$Email=$_POST["Email"];
$Phone=$_POST["Phone"];


//SERVER SIDE SCRIPTING

if ( !empty($Name) && !empty($Description) && !empty($Branch) && !empty($Password) && 
   !empty($Year) && !empty($Pincode) && !empty($Place) && !empty($State) &&
   !empty($Country) && !empty($Address) && !empty($Email) && !empty($Phone) )
{
    $conn=new mysqli("localhost","root","","yourcare");
    
    if ( mysqli_connect_error() ) // if there is problem with MYSQL connection 
    {
        echo "Error";
        // die('Connect error ('.mysqli_connect_error().')'.mysqli_connect() );
        die();
    }
    
    else
    {
        $SELECT= "SELECT Email From users Where Email = ? Limit 1";
        $INSERT="INSERT Into orphanages(Name,Description,Branch,Password,Year,Pincode,Place,State,Country,Address,Email,Phone)values(?,?,?,?,?,?,?,?,?,?,?,?)";
        
        //Prepare statement for selecting query
//        $conn->prepare($SELECT)->bind_param("s",$email)->execute->bind_result($email)->store_res
        
        $stmt=$conn->prepare($SELECT);// preparing select query
        $stmt->bind_param("s",$Email);
        $stmt->execute();
        $stmt->bind_result($Email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        
        if($rnum == 0)
        {
            
            $stmt->close();
            
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssssisssssi",$Name,$Description,$Branch,$Password,$Year,$Pincode,$Place,$State,$Country,$Address,$Email,$Phone);
            $stmt->execute();
            echo "New records inserted successfully";
        }
        else
        {
            echo "Email ID is already taken";
        }
        $stmt->close();
        $conn->close();
    }
}
else
{
    echo "All fields are required";
    die();
}


?>
        
 

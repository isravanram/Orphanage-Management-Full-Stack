<?php

$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$email=$_POST["email"];

if ( !empty($username) && !empty($password) && !empty($gender) && !empty($email) )
{
    $conn=new mysqli("localhost","root","","yourcare");
    if ( mysqli_connect_error() ) // if there is problem with MYSQL connection 
    {
        echo "Error";
        die('Connect error ('.mysqli_connect_error().')'.mysqli_connect() );
    }
    
    else
    {
        $SELECT= "SELECT email From users Where email = ? Limit 1";
        $INSERT="INSERT Into users(username,password,gender,email) values(?,?,?,?)";
        
        //Prepare statement for selecting query
        
        $stmt=$conn->prepare($SELECT);// preparing select query
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        
        if($rnum == 0)
        {
            
            $stmt->close();
            
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssss",$username,$password,$gender,$email);
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
        
 

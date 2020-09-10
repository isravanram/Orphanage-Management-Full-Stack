<html>
<head>
    <title>
    Welcome
    </title>
</head>

<body>
    <form action="insert.php" method="post">
        
        <input type="text" name="username" required>Name<br>
        <input type="password" name="password" required>Password<br>
        <!--        Radio input-->
        <input type="radio" name="gender" required>Male<br>
        <input type="radio" name="gender" required>Female<br>
        <input type="radio" name="gender" required>Other<br>
        
        <input type="email" name="email" required>Email<br>
        <input type="submit" name="submit" value="Submit">Submit<br>
        
    
    </form>
    
</body>

</html>
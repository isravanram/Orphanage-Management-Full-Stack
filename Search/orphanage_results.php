<?php
        include("config.php");
        
        //We are referring to value of submit
    
    if (!isset($_POST['searchbar']))
        {
            
            
           header("Location : searchpage.html");
        }

        $query="SELECT * FROM orphanages WHERE State LIKE '%".$_POST['searchbar']."%' OR Place LIKE '%".$_POST['searchbar']."%'";
        $search_query=mysqli_query($con,$query);
        
        if(mysqli_num_rows($search_query) !=0 )
        {
            $result=mysqli_fetch_assoc($search_query); 
        }

 
?>


<html>
    <head>
        <title>Search results</title>
<!--        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="demostyle2.css">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Kufam&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Hind+Siliguri:wght@500&family=Kufam&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Hind+Siliguri:wght@500&family=Kufam&family=Prompt:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Hind+Siliguri:wght@500&family=Kufam&family=Prompt:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
        <script src="script.js"></script>
    </head>
    
    <body>
        
        <header>
              <img src="logo.jpg" class="mainIcon">
        </header>
        
        <div class="orphanages">
            
            
        
            
            <?php 
                if(mysqli_num_rows($search_query)!=0 )
                {
                    ?>

                
                        <p class="result"> ORPHANAGES FOUND </p>
                        <div class="container">
                    
                        <?php
                    
                            do 
                            {  $image=$result['Image_path']; ?> 
                        
            
                            <div class="box"><br><br><img src="<?php echo $image;?>" height="300px" width="500px">
                
                    <div class="text">
                    <h3>
                        <div class="name"><?php echo $result['Name']; ?></div>
                        <h3>Description </h3><?php echo $result['Description']; ?>
                    <br>
                        <h3>Place </h3><?php echo $result['Place']; ?>
                    <br>
                        <h3>State </h3><?php echo $result['State']; ?>
                    <br>
                        <h3>Country </h3><?php echo $result['Country']; ?>
                    <br>
                        <h3>Address</h3><?php echo $result['Address']; ?>
                    <br>
                        
                    </h3>
                    </div> 
            </div>
                
                    <?php }while($result=mysqli_fetch_assoc($search_query));
                      
                }
                else
                {
                    ?>
                </div>
            </div>
                <div class="orphanages">
                    <p class="result2"> No results found </p>
                    <style>
                        body{
                            background-image:url(background.jpg);
                            background-size: cover;
                            
                        }
                        .container
                        {
                            background-image: none;
                        }
                        .models
                        {
                            background-image: none;
                        }
                    
                    </style>
                    
                    
                    <div class="container">
        
                    </div>
                </div>
            
                <?php
                }
            ?>
                
    </body>
</html>
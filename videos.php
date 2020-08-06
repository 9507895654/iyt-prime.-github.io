

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> </div>
</head>
<body>
	<main>
		<div class="main">
		<div class="logo">
			<h2>VIDEO </h2>
		</div>
		<div class="search">
		<input type="search" name="search" placeholder="Search">
		</div>
		
			 <div class="icon"> <a href="upload.php"><i class="fa fa-upload" aria-hidden="true"></i></a></div>
		
		<div class="username">
			<h2>welcome:- </h2>
		</div>
		</div>

		<?php
     include 'connect.php';
     $query =  "SELECT * FROM `video` order by id ASC ";
     $queryfire = mysqli_query($con,$query);
     $num = mysqli_num_rows($queryfire);
     

     if($num>0){
         while($product = mysqli_fetch_array($queryfire)){
             ?>
              <div class="dd">
          
                <div class="card">
                    <video src="<?php echo $product['file'];?>" width="300px" height="300px"></video>
                
                    <div class="card_body">
                        <h3> <?php echo $product['Channel Name']; ?> </h3>
                        <h4> <?php echo $product['Title'] ?> </h4>
                       </div>
                </div>
                </div>

           
        </div>
 <?php

         } 
         
     } 

     ?>
	
     
</body>
</html>


 
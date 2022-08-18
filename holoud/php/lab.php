<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم المعمل</title>
</head>
<body>

<div class="container"> 
    <h2 class="text-center">المعمل</h2>
   

     <a href="../index.php">&#8592;</a>
<style>
    	.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
    </style>
     
   
     <?php 

     
                // conect with database
                $host ='localhost';
                $user ='root';
                $password ='';
                $dbName = 'holoud';
           
              $conn =   mysqli_connect($host, $user, $password, $dbName);

              $sql = "SELECT * FROM file_url ORDER BY id DESC";
              $result = mysqli_query($conn , $sql);


          if (mysqli_num_rows($result) > 0) {
          	while ($images = mysqli_fetch_assoc($result)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['file']?>">
             </div>
          		
    <?php } }?>
</body>
</html>

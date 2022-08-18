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
    <title>قسم المالية </title>
</head>
<body>
    
<div class="container"> 
    <h2 class="text-center">قسم المالية</h2>
<style>

        :root{
        --blue:#2980b9;
        --red:tomato;
        --orange:orange;
        --black:#333;
        --white:#fff;
        --bg-color:#eee;
        --dark-bg:rgba(0,0,0,.7);
        --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        --border:.1rem solid #999;
        }

                    
            .btn,
            .option-btn,
            .delete-btn{
            display: block;
            width: 100%;
            text-align: center;
            background-color: var(--blue);
            color:var(--white);
            font-size: 10px;
            padding:10px;
            border-radius: .5rem;
            cursor: pointer;
            margin-top: 1rem;
            }

            .btn:hover,
            .option-btn:hover,
            .delete-btn:hover{
            background-color: var(--black);
            }

            .option-btn i,
            .delete-btn i{
            padding-right:5px;
            }
            .option-btn{
              background-color: var(--orange);
        }

        .delete-btn{
            margin-top: 0;
            background-color: var(--red);
        }
        section{
            padding:2rem;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
        font-size: 20px;
        margin-top: 10px;
}

    </style>

    <section>

   <table>

      <thead>
         <th>ID</th>
         <th>Data Entry</th>
         <th>Customer Name</th>
         <th>Design</th>
         <th>Design Details</th>
         <th>The Final Price</th>
         <th>Paid price</th>
         <th>Remaining price</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         
         $host = 'localhost';
         $user = 'root';
         $password = '';
         $dbName = 'holoud';
 
       $conn =   mysqli_connect($host, $user, $password, $dbName);
   
     $query = "SELECT * FROM account  ";
     $result = mysqli_query($conn,$query);

           if($result){
               while($row = mysqli_fetch_assoc($result)){
         ?>

         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dataname']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['detail']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['priceup']; ?></td>
            <td><?php echo $row['priceresid']; ?></td>
            <td>
           
               <a href="delete.php" name="delete" class="delete-btn" > <i class="fas fa-trash"></i> Remove </a>
               <!-- <a href="design.php?edit= class="option-btn"> <i class="fas fa-edit"></i> update </a> -->
            </td>
         </tr>
                
                
         <?php
             };  
            }else{
               echo "<div class='empty'>no Older added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

   
<style>
    .btn {
        width:300px;
        font-size:22px;
    }
    </style>
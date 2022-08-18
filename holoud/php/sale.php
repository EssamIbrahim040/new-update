<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم المبيعات</title>
</head>
<body>
<div class="container">
    <form action="sale.php" class="mt-4"  method="post">
         <h2 class="text-center">قسم المبيعات</h2> 
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم العميل</label>
            <input class="form-control" type="text" name="name" placeholder="ادخل اسم العميل"><br>
        </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> التصميم</label>
                <input class="form-control" type="text" name="type" placeholder="ادخل اسم التصميم"><br>
        </div>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">تفاصيل التصميم</label>
                <input class="form-control" type="text" placeholder="ادخل تفاصيل التصميم" name="detail"><br>
        </div>
                <input class="btn btn-primary" type="submit" name="button" vaule="Send">

    <?php 
                 // connect with database 
     $host ='localhost';
     $user ='root';
     $password ='';
     $dbName = 'holoud';

   $conn =   mysqli_connect($host, $user, $password, $dbName);

//    if(isset($conn)){
//     echo "your connected with database";
//    }else {
//     echo "you not contnect with database";
//    }

   //send date with paitante to database
   $dName = $_POST['name'];
   $dType = $_POST['type'];
   $detail = $_POST['detail'];
   $dbutton = $_POST['button'];

   if($dbutton){
    $query = "INSERT INTO data(name,type,detail)VALUE('$dName','$dType','$detail')";
    $result = mysqli_query($conn,$query);
    header("location: ./design.php");
} else {
    echo " <p>iTs Not Done </p>";
}

    ?>
    <style>
        p {
            color:red;
            font-size:25px;
            text-align:center;
        }
        </style>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
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
    <form action="code.php" class="mt-4"  method="post">
         <h2 class="text-center">قسم المالية</h2> 
        
         <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم مدخل البيانات</label>
            <input class="form-control" type="text" name="dataname" placeholder="ادخل اسم الموظف"><br>
        </div>

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
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر النهائي</label>
                <input class="form-control" type="text" placeholder="ادخل السعر النهائي" name="price"><br>
        </div>

        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر المدفوع</label>
                <input class="form-control" type="text" placeholder="ادخل السعر المدفوع" name="priceup"><br>
        </div>

        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر المتبقي</label>
                <input class="form-control" type="text" placeholder="ادخل السعر المتبقي" name="priceresid"><br>
        </div>
                <input class="btn btn-primary" type="submit" name="button" vaule="Send">

</form>
                
    <?php 
                 // connect with database 
     $host ='localhost';
     $user ='root';
     $password ='';
     $dbName = 'holoud';

   $conn =   mysqli_connect($host, $user, $password, $dbName);

   $name = $_POST['name'];
   $dName = $_POST['dataname'];
   $dType = $_POST['type'];
   $detail = $_POST['detail'];
   $price = $_POST['price'];
   $priceup = $_POST['priceup'];
   $priceresid = $_POST['priceresid'];
   $dbutton = $_POST['button'];

   if($dbutton){
    $query = "INSERT INTO account(name,dataname,type,detail,price,priceup,priceresid)VALUE('$dName','$dType','$detail','$price','$priceup','$priceresid','$name')";
    $result = mysqli_query($conn,$query);
    header("location: salers.php");
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
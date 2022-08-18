<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم المالية</title>
</head>
<body>
    


<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>انشاء جديد</title>
</head>
<body dir="rtl">
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>اضافة بيانات العميل 
                            <a href="acount.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>مدخل البيانات</label>
                                <input type="text" name="dname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>اسم العميل</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>التصميم</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>تفاصيل التصميم</label>
                                <input type="text" name="detial" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>السعر النهائي</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>السعر المدفوع</label>
                                <input type="text" name="priceup" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>السعر المتبقي</label>
                                <input type="text" name="pricedon" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">ارسال البيانات </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</body>
</html>
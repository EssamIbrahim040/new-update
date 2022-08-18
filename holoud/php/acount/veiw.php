<?php
require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Acount View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Acount View Details 
                            <a href="create-acount.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>مدخل البيانات</label>
                                        <p class="form-control">
                                            <?=$student['dname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>اسم العميل</label>
                                        <p class="form-control">
                                            <?=$student['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>التصميم</label>
                                        <p class="form-control">
                                            <?=$student['type'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>تفاصيل التصميم</label>
                                        <p class="form-control">
                                            <?=$student['detail'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>السعر النهائي</label>
                                        <p class="form-control">
                                            <?=$student['price'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>السعر المدفوع</label>
                                        <p class="form-control">
                                            <?=$student['priceup'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>السعر المتبقي</label>
                                        <p class="form-control">
                                            <?=$student['pricedon'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
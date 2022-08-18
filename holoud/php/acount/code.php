<?php
session_start();
require 'db.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM account WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: acount.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: acount.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dname = mysqli_real_escape_string($conn, $_POST['dname']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $priceup = mysqli_real_escape_string($conn, $_POST['priceup']);
    $pricedon = mysqli_real_escape_string($conn, $_POST['pricedon']);

    $query = "UPDATE account SET name='$name', dataname='$dname', type='$type', detail='$detail' , price='$price', priceup='$priceup', priceresid='$pricedon' WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "تم تعديل البيانات بنجاح";
        header("Location: acount.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "حدث خطأ ما ";
        header("Location: acount.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dname = mysqli_real_escape_string($conn, $_POST['dname']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $priceup = mysqli_real_escape_string($conn, $_POST['priceup']);
    $pricedon = mysqli_real_escape_string($conn, $_POST['pricedon']);

    $query = "INSERT INTO account (name,dataname,type,detail,price,priceup,priceresid) VALUES ('$name','$dname','$type','$detail','$price','$priceup','$pricedon')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "";
        header("Location: ./salers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "حدث خطأ ما لم يتم انشاء ";
        header("Location: ./salers.php");
        exit(0);
    }
}

?>



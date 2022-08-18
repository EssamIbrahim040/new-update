<?php


$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'holoud';

$conn =   mysqli_connect($host, $user, $password, $dbName);


if($_GET){
  if(isset($_GET['delete'])){
      delete();
  }
}

  function delete()
  {
    $delete1 =("DELETE FROM `usrdata` WHERE id = '3'");
      $result = mysqli_query($conn,$delete1) or dieid(mysqli_error());
      
echo "record deleted";
 
 

  }



?>
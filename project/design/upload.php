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
    <title>قسم التصميم</title>
</head>
<body>

<div class="container"> 
    <h2 class="text-center">رفع ملفات التصميم </h2>
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upscript.php"  method="post" enctype="multipart/form-data">
           <input class="form-control" type="file"   name="my_image" id="fileToUpload"> 
           <input class="btn btn-primary mt-3" type="submit"  name="submit" value="Upload">
           <a href="../index.php">&#8592;</a>
     </form>
</div>

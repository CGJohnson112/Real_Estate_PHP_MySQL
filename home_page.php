<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Real Estate MySQL PHP Site display test</title>
<!-- Latest compiled and minified CSS -->
<link href="style.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>

<?php include 'db.php'?>

<div class="container">

<img src="home_images/re_logo.png" alt="">
<h1>This is the house of your dreams you just selected!</h1>
<?php

while ($row = $homeResult -> fetch_assoc())
{
  ?>
<h2>Id # is <?php echo $row['id']; ?></h2>
<h3><?php echo $row['address'];?><br><span><b>$<?php echo $row['cost'];?></b></span></h3>
<h4>Description:</h4>
<p><?php echo $row['description'];?></p>
<img src="./home_images/<?php echo $row['image'];?>"/>
<a href="./index.php"><button type="submit" class="btn btn-primary">Back to REALTOR select screen</button></a>
</div>

<?php
}
?>


<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
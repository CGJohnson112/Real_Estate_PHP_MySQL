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
<p>Today's total sales:<span> $ <b><?php echo number_format($resultTotSales) ; ?></span></b></p>


</b>
<p>Today's average sales: <span> $ <b><?php echo number_format($resultAvgSales); ?></span></b> </p></b>


<p>Today's total Agent sales: <span> $ <b><?php echo number_format($resultIndividSalesTotal); ?></span></b> </p></b>
<p>Today's average Agent sales: <span> $ <b><?php echo number_format($resultIndividSalesAvg); ?></span></b> </p></b>
<img src="home_images/re_logo.png" alt="">
<h1>Here is your real estate agent and their homes for sale!</h1>

<?php
while ($row = $resultImage -> fetch_assoc()) 
{
    ?>

<div><img src="agent_images/<?php echo $row['image']?>"></i></div>
<div class="name"><h3><?php echo $row['name'];?></h3></div>

<?php
}
?>
<table class="table table-dark table-striped">
  <thead>
    <tr>
    
      <th scope="col">Address</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
<?php

while ($row = $result -> fetch_assoc())
{
  ?>

    <tr>
      <td><a href ="home_page.php"><?php echo $row['address'];?></a></td>
      <td><?php echo $row['cost'];?></td>
    </tr>
<?php
}
?>

</tbody>
</table>
</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
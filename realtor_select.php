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

</b>
<p>Today's median sales: <span> $ <b><?php echo number_format($resultMedSales);?></span></b> </p></b>


<h1>Find your Home Today!</h1>
<hr>
<p>Today's total Agent sales: <span> $ <b><?php echo number_format($resultIndividSalesTotal); ?></span></b> </p></b>
<p>Today's average Agent sales: <span> $ <b><?php echo number_format($resultIndividSalesAvg); ?></span></b> </p></b>

<p>Today's Agent median sales: <span> $ <b><?php echo number_format($resultIndividMedSales);?></span></b> </p></b>
<img src="home_images/re_logo.png" alt="">
<?php
while ($row = $resultImage -> fetch_assoc()) 
{
    ?>

<!--'onerror' shows 'photo not available' image if agent doesn't have a photo in the DB-->
<div><img src="agent_images/<?php echo $row['image']?>" onerror="this.onerror=null;this.src='agent_images/no_img.jpg'"></i></div>
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

foreach ($result as $row)
{
  ?>

    <tr>

    <!--link to display this individual property on a separate page-->
      <td><a href ="./home_page.php?id=<?php echo $row['id'];?>"><?php echo $row['address'];?> <?php echo $row['id'];?> </a></td>
      <td> $ <?php echo number_format($row['cost']);?></td>
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
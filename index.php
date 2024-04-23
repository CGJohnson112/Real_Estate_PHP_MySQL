
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
    <h2>Select your REALTOR</h2>
<form action="./realtor_select.php" method="POST">
<select class="form-select" name="pid">

<?php
while ($row = $printAgents -> fetch_assoc()) 
{
    ?>
        
            <option type="text" name="pid" value=<?php echo $row['id'];?>><?php echo $row['name'];?></option>
        
            <?php
}
?>

</select>
    
<input type="submit" name="submit" value="submit" class="btn btn-primary">Select your Realtor</input>
</form>
    



</div>

<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$mysqli = new mysqli("localhost","root","root","real_estate");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//make JSON API FILE
$sqlJSON = "SELECT agents.id, agents.agent_id, agents.name, agents.image, homes.address, homes.description, homes.cost, homes.date_posted
FROM agents, homes 
WHERE agents.agent_id = homes.agent_id";
    $results = $mysqli->query($sqlJSON);
    while($product = $results->fetch_assoc()){   
        //can enter any category in your phpmyadmin SQL table you like,
        //only set up to enter entire array into data.json
        $products[] = $product;   
    }

    //this is the code that transfers the SQL data to the .json file 
    $file_name = 'json/data.json';
    $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    file_put_contents($file_name, $encoded_data);

//used to select the number of agent you want to pull up 
$queryNum = 3;


//make one query for one image of the agent you want to show
$sql ="SELECT agents.name, agents.image
FROM agents WHERE agents.agent_id = $queryNum";
$resultImage = $mysqli->query($sql);


//make a second query for just the properties under them
$sql2 ="SELECT agents.agent_id, homes.address, homes.cost
FROM agents, homes 
WHERE agents.agent_id = homes.agent_id AND agents.agent_id = $queryNum";
$result = $mysqli->query($sql2);


///these queries must be forced into strings **************************************
//make third query for amount of total sales of each agent
$sql3 = mysqli_query($mysqli, "SELECT SUM(homes.cost) as cost FROM agents, homes WHERE agents.agent_id = homes.agent_id AND agents.agent_id = $queryNum");
$resultIndividSalesTotal = mysqli_fetch_assoc($sql3);
$resultIndividSalesTotal = $resultIndividSalesTotal['cost'];

//make fourth query for average sales of each agent 
$sql4 = mysqli_query ($mysqli, "SELECT ROUND( AVG(homes.cost), 2) AS cost FROM agents, homes 
WHERE agents.agent_id = homes.agent_id AND agents.agent_id = $queryNum");
$resultIndividSalesAvg = mysqli_fetch_assoc($sql4);
$resultIndividSalesAvg = $resultIndividSalesAvg['cost'];

//make fifth query for total sales of entire company
$sql5 = mysqli_query($mysqli, "SELECT SUM(homes.cost) as cost FROM homes");
//converts data to string by fetch
$resultTotSales = mysqli_fetch_assoc($sql5);
$resultTotSales = $resultTotSales['cost'];


//make sixth query for average sales of entire company 
$sql6 = mysqli_query($mysqli, "SELECT ROUND (AVG(homes.cost), 2) as cost FROM homes");
//converts data to string by fetch
$resultAvgSales = mysqli_fetch_assoc($sql6);
$resultAvgSales = $resultAvgSales['cost'];

$mysqli->close();

?>
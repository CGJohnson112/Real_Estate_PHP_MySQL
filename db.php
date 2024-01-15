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


$queryNum = 1;
//make one query for one image of the agent you want to show
$sql ="SELECT agents.name, agents.image
FROM agents WHERE agents.agent_id = $queryNum";
$resultImage = $mysqli->query($sql);

//make a second query for just the properties under them
$sql2 ="SELECT agents.agent_id, homes.address, homes.cost
FROM agents, homes 
WHERE agents.agent_id = homes.agent_id AND agents.agent_id = $queryNum";
$result = $mysqli->query($sql2);
$mysqli->close();

?>
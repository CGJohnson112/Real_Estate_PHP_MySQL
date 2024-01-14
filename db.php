<?php
$mysqli = new mysqli("localhost","root","root","real_estate");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

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



  $mysqli->close();

?>
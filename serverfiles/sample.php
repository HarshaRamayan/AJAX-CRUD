<?php

$statesCapitals = [["state"=>"Telangana", "capital"=>"Hyderabad"], ["state"=>"Maharastra", "capital"=>"Mumbai"],
["state"=>"Tamilnadu", "capital"=>"Madras"], ["state"=>"Kerala", "capital"=>"Thiruvunanthapuram"],["state"=>"Karnataka", 
"capital"=>"Bangalore"]];

$jsonData = json_encode($statesCapitals);

echo $jsonData;


?>
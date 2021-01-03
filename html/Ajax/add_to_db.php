<?php

require("database.php");
$name=$_GET["name"];

if(strlen($name)==0){
    echo "sorry input invalid";
    exit();
}

if($db->query("insert into todo(name) values('$name')")){

    $result = $db->query("SELECT name FROM todo");

    if($result ->num_rows){
        echo "<table><tr><th>Name</th></tr>";
        while ($row = $result ->fetch_assoc()) {
            echo "<tr><td>".$row['name']."</td></tr>";
        }
        echo "</table>";
    }

    $db->close();
   
}






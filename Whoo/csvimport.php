<?php

//Connect to the database
require('connect.php');

if (!$connection) {
    echo "Could not connect to server\n";
    die(mysql_error());
} else {
    echo "Connection established\n"; 
}

if (!$select_db) {
    echo "Cannot select database\n";
    die(mysql_error()); 
} else {
    echo "Database selected\n";
}
if (($handle = fopen("albums.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $sql = "INSERT INTO albums ( id, album_name, artist, thumbnail_url, img_url, description) VALUES ( '".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','". addslashes($data[5])."')";
        $query = mysql_query($sql);
        if($query){
            echo "row inserted\n";
        }
        else{
            echo die(mysql_error());
        }
    }
    fclose($handle);
}
?>
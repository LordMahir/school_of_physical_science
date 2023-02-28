<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sps";
$filename = 'sps.sql';

$link = mysqli_connect($dbServername, $dbUsername, $dbPassword);
$link->query("DROP DATABASE IF EXISTS ".$dbName);
$link->query("CREATE DATABASE ".$dbName);
$link->query("USE ".$dbName);

$dump = '';
$dumpfile = file($filename);
foreach ($dumpfile as $line)
{
    // Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;
    
    // Add this line to the current segment
    $dump .= $line;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';')
    {
        // Perform the query
        $link->query($dump) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Reset temp variable to empty
        $dump = '';
    }
}

echo "Tables imported successfully";
$link->close();

?>
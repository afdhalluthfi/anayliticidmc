<?php  

function getConnection():PDO
{
    $host = 'sql312.main-hosting.eu';
    $port = 3306;
    $database = 'u814991654_tanahbumbu';
    $username = 'u814991654_tanahbumbu';
    $password = 'r4h4s14SAJA';
    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

?>
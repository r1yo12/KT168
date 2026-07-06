<?php
header("Content-Type:text/html; charset=utf-8");

$serverName = "DESKTOP-LG2V07F\SQLEXPRESS";
$connectionInfo = array(
    "Database" => "ANIME",
    "UID" => "CCU1",
    "PWD" => "41381ahqahq",
    "CharacterSet" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
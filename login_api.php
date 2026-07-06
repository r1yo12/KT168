<?php
header("Content-Type: application/json; charset=utf-8");

include("db_connect.php");

$username = $_POST["Username"] ?? '';
$password = $_POST["Password"] ?? '';

$sql = "SELECT Admin_ID, Admin_Name, Department
        FROM dbo.Administrator
        WHERE Username = ? AND Password = ?";

$params = array($username, $password);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    echo json_encode([
        "status" => "error",
        "message" => sqlsrv_errors()
    ]);
    exit();
}

$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($user) {
    echo json_encode([
        "status" => "success",
        "data" => $user
    ]);
} else {
    echo json_encode([
        "status" => "fail"
    ]);
}
?>
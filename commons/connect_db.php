<?php
// ket noi csdl
$host = DB_HOST;
$port = DB_PORT;
$dbname = DB_NAME;

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    // cai dat che do bao loi la xu ly ngoai le
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // cai dat che do tra du lieu
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    debug("Connection failed: " . $e->getMessage());
}
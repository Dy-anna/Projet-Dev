<?php
$db_name = 'mysql:host=localhost;dbname=amdl_bd';
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function unique_id($length = 20) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLength = strlen($chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, $charLength - 1)];
    }
    return $randomString;
}

echo unique_id();
?>

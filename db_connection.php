<?php 
$dsn = 'mysql:host=localhost; dbname=mib';
$user_name = 'root';
$user_password = '';



try{
    $conn = new PDO($dsn,$user_name,$user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'connected';
}catch(PDOException $e){
    echo 'error connection'. $e->getMessage();
}
?>
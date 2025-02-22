
<?php
$host = '127.0.0.1'; //数据库地址，默认127.0.0.1
$dbname = '填写数据库名';//数据库名
$username = '填写数据库用户名';//数据库用户名
$password = '填写密码';//数据库密码
$port = '3306';//数据库端口默认端口3306

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

function getPDO() {
    global $pdo;
    return $pdo;
}
?>

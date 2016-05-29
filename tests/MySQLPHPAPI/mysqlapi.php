<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/29
 * Time: 15:18
 */
//mysqli
//$mysqli = new mysqli('localhost', 'root', 'dell1950', 'laravelso');
//if($mysqli->connect_errno){
//    echo 'Failed to connect MySQL'.$mysqli->connect_errno.':'.$mysqli->connect_error;
//}
//echo $mysqli->host_info.PHP_EOL;
//
//$mysqli2 = new mysqli('127.0.0.1', 'root', 'dell1950', 'laravelso');
//if($mysqli2->connect_errno){
//    echo 'Failed to connect MySQL'.$mysqli2->connect_errno.':'.$mysqli2->connect_error;
//}
//echo $mysqli2->host_info.PHP_EOL;

$mysqli = new mysqli("localhost", "root", "dell1950", "laravelso");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/* Non-prepared statement */
if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
/* Prepared statement, stage 1: prepare */
if (!($stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?)"))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
/* Prepared statement, stage 2: bind and execute */
$id = 1;
if (!$stmt->bind_param("i", $id)) {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
}
if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}
/* Prepared statement: repeated execution, only data transferred from client to server */
for ($id = 2; $id < 5; $id++) {
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    } }
/* explicit close recommended */
$stmt->close();
/* Non-prepared statement */
$res = $mysqli->query("SELECT id FROM test");
var_dump($res->fetch_all());

/*
echo $mysqli->character_set_name().PHP_EOL;
if(! $mysqli->set_charset('utf8')){
    echo $mysqli->error.PHP_EOL;
    exit;
}
var_dump($mysqli->get_charset()->charset);*/
//echo .PHP_EOL;
//$result = $mysqli->query('select * from char_test', MYSQLI_USE_RESULT);
//if($result){
//    while($row = $result->fetch_assoc()){
//        echo $row['char_col'].PHP_EOL;
//    }
//}
//$result->close();
//$row    = $result->fetch_assoc();
//var_dump($row);
//var_dump(htmlentities($row['char_col']));

//mysql
//$mysql = mysql_connect('localhost', 'root', 'dell1950');
//mysql_select_db('laravelso');
//$resultMysql = mysql_query('select * from char_test');
//$rowMysql = mysql_fetch_assoc($resultMysql);
//var_dump($rowMysql);

//PDO
//$pdo = new PDO('mysql:host=localhost;dbname=laravelso', 'root', 'dell1950');
//$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
//$statement = $pdo->query('select * from char_test');
//if($statement){
//    while($rowPdo = $statement->fetch(PDO::FETCH_ASSOC)){
//        echo $rowPdo['char_col'].PHP_EOL;
//    }
//}
//$rowPdo = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($rowPdo);
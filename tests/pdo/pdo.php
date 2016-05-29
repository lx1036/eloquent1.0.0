<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/29
 * Time: 下午10:53
 */
//if($driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME)){
//    $stmt = $pdo->prepare('select * from db', [PDO::MYSQL_ATTR_USE_BUFFERED_QUERY=>true]);
//    $result = $pdo->exec($stmt);
//    if(! $result){
//        var_dump($stmt->errorInfo());
//    }
////    var_dump($result);
////    echo $driver.PHP_EOL;
//}else{
//    echo 'Other Drive';
//}
//$driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
//$availableDrivers = $pdo->getAvailableDrivers();
//$paramBool = $pdo->getAttribute(PDO::PARAM_BOOL);
//$paramNull = $pdo->getAttribute(PDO::PARAM_NULL);
//$paramInt = $pdo->getAttribute(PDO::PARAM_INT);
//$paramStr = $pdo->getAttribute(PDO::PARAM_STR);
//$paramLob = $pdo->getAttribute(PDO::PARAM_LOB);
//
//
//var_dump($driver, $paramBool, $paramNull, $paramInt, $paramStr, $paramLob);

try{
    $pdo = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'dell1950');
//    $result = $pdo->query('select * from db');
//    var_dump($result);
//    foreach ($pdo->query('select * from post') as $item) {
//        var_dump($item);
//    }
//    $pdo = null;
}catch (PDOException $e){
    echo 'Exception:'.$e->getMessage().PHP_EOL;
}
//$stmt = $pdo->prepare('insert into post (id, title) VALUES (:id, :title)');
//$stmt->bindParam(':id', $id);
//$stmt->bindParam(':title', $title);
//
//$id = 4;
//$title = 'mysql';
//$stmt->execute();
//
//$id = 5;
//$title = 'pdo';
//$stmt->execute();
$pdo->getAvailableDrivers();
$stmt = $pdo->prepare('select * from post WHERE id = ?');
if($stmt->execute([4])){
    while($row = $stmt->fetch()){
        var_dump($row);
    }
}
<?php
    try {
        $dsn = 'mysql:host=db;dbname=web_dev_db;';
        $db = new PDO($dsn, 'user', 'password');

        $sql = 'SELECT version();';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        echo "成功";
        var_dump($result);
    } catch (PDOException $e) {
        echo "失敗";
        echo $e->getMessage();
        exit;
    }
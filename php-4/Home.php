<?php
try {
    require_once 'sql-connection.php';
}
catch (PDOException $e){
    echo $e->getMessage();
}

<?php
$databaseName = 'JSDRISCO_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'jsdrisco_writer';
$password = '9n!-2Iec/-,<YmScrQU/';

$pdo = new PDO($dsn, $username, $password);
if($pdo)
    print '<!-- Connection complete -->';
?>
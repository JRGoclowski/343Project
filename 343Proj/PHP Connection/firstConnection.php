<?php
echo 'Got past DSN';
$host = 'ec2-54-83-192-245.compute-1.amazonaws.com';
$user = 'ffhkeklgjbsfho';
$password = '7c7b27ebc6323413b950f165bf9c85749a9f0dd90984abd970efd2f8dab37ab0';
$dbname = 'd5n17n37a8hp2f';
$port = '5432';

/*
Host
    ec2-54-83-192-245.compute-1.amazonaws.com
Database
    d5n17n37a8hp2f
User
    ffhkeklgjbsfho
Port
    5432
Password
    7c7b27ebc6323413b950f165bf9c85749a9f0dd90984abd970efd2f8dab37ab0
URI
    postgres://ffhkeklgjbsfho:7c7b27ebc6323413b950f165bf9c85749a9f0dd90984abd970efd2f8dab37ab0@ec2-54-83-192-245.compute-1.amazonaws.com:5432/d5n17n37a8hp2f
Heroku CLI
    heroku pg:psql postgresql-clear-09272 --app csulbpantrypro
 *  */
// SET DSN
$dsn = 'pqsql:host='. $host. ';port='. $port. ';dbname='. $dbname;

// Create a PDO instancea


try {
    $pdoConnection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
//PROD Query

$stmt = $pdoConnection->query('Select * FROM posts');

while ($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['Testname'];
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


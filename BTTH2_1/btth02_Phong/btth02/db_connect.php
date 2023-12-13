<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=btth02_cse485", "root", "");
    
}catch(PDOException $e){
    echo $e->getMessage();
}

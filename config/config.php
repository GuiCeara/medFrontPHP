<?php

define('HOST','localhost');
define('DB','medfront');
define('USER','root');
define('PASSW', '');


$cx = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSW);

// try{

    

//     $cx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo"CONECTADO!";
// } catch(PDOException $e) {
//     echo 'ERROR: ' . $e->getMessage();
// }


?>
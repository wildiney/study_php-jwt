<?php
require __DIR__ . '/vendor/autoload.php';

use \Firebase\JWT\JWT;

$secretKey = "secretKey";
$payload = array(
  "author"=>"Fernando Di Masi",
  "authorURL"=>"http://www.wildiney.com",
  "exp"=>time()+1000,
  "ID"=>"45",
  "data"=>"2018-08-10",
  "entrada"=>null,
  "almoco"=>null,
  "retorno"=>null,
  "saida"=>null,
  "last_update"=>"0000-00-00 00:00:00"
);

try {
    $jwt =JWT::encode($payload, $secretKey);
    print_r($jwt);
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}
print_r("<br />");
try {
    $decoded = JWT::decode($jwt, "teste", array('HS256'));
    print_r($decoded);
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}

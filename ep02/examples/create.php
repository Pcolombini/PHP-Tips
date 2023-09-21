<?php

require __DIR__ . '/../vendor/autoload.php' ;

use source\Models\User;
use source\Models\Address;

$user = new User();

$user->first_name = "João";
$user->last_name = "Nascimento";
$user->genre = "Masculino";
$user->save();

//$addr = new Address();
//$addr->add($user,"Nome da rua","22b");
//$addr->save();

echo "<pre>";

print_r($user);

echo "</pre>";

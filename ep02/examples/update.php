<?php

require __DIR__ . '/../vendor/autoload.php' ;

use source\Models\User;

$user = (new User())->findById(5);
$user->first_name = "Lucas";
$user->last_name = "Montano";
$user->save();

echo "<pre>";
print_r($user);
echo "</pre>";

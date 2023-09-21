<?php

require __DIR__ . '/../vendor/autoload.php' ;

use source\Models\User;

$user = (new User())->findById(7);

if ($user) {
    $user->destroy();
} else {
    echo "<pre>";
    print_r($user);
    echo "</pre>";
}

<?php
$var = 100;
$var1 = 50;
$var2 = ($var + $var1);
echo $var2;
$var3 = ($var % $var1);
echo $var3;
$user = ['user_id' => null, 'username' => "bijayalaxmi"];
$user1 = 123;
if (is_array($user) && $user['user_id'] != null) {
    $user_id = isset($user['user_id']) ? $user['user_id'] : '';
    $username = isset($user['username']) ? $user['username'] : '';
    echo $username;
    echo $user_id;
    print_r($user);
    // and more statements...
} elseif ($user1 == 123) {
    echo $user1;
} else {
    echo "this is not an array";
}
$color = "red";
switch ($color) {
    case "red":
        echo "this is red";
        break;
    case "blue":
        echo "this is blue";
        break;
    case "black":
        echo "this is black";
}

?>
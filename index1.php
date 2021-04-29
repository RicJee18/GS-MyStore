<?php

require_once('store.php');
$users = $mystore->getUsers();
print_r($users);
echo json_encode($users);

?>

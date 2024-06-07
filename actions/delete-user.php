<?php

include "../classes/User.php";

$user = new User;
$user->delete($_POST, $_FILES)

?>
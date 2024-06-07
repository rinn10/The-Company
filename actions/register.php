<?php

include "../classes/User.php";

// create an obj
$user = new User;

//Call the method
$user->store($_POST);

//$_POST  - holds the data from the views > register.php       

?>
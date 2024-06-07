<?php

include "../classes/User.php";

$user = new User;
$user->update($_POST, $_FILES)

?>
//$_FILES hols the info of the image or file such as name and the actual image or file  It is 2D Associative Array
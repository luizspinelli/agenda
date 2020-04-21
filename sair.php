<?php

require __DIR__. '/nav.php';

session_destroy();

header('location: ./login.php');

?>
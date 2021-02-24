<?php

require_once '../src/session.php';

session_destroy();
header('location: index.html');

?>
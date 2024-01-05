<?php
session_start();
session_destroy();

header('Location: /test/phpweb/session/login.php');
exit();
<?php
ini_set('display_errors', 1);
include_once("autoload.php");
jset_login::verify('../');

echo call_user_func(array(new report(), 'checksum'), $_REQUEST);

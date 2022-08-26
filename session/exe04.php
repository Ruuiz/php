<?php 

session_id('nd2gmv90vlr7fiac4g7c14urt1');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>
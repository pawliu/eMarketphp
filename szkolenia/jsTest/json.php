<?php
header ( 'Content-Type: application/json' );
require_once 'element.php';
echo json_encode (dajElementy(),JSON_PRETTY_PRINT);

?>
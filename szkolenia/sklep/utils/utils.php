<?php
// error_reporting(E_ERROR);
define ( 'KATALOG_BAZOWY', dirname ( dirname ( __FILE__ ) ) );
function metodaPost() {
	return $_SERVER ['REQUEST_METHOD'] === 'POST';
}
function metodaGet() {
	return $_SERVER ['REQUEST_METHOD'] === 'GET';
}
function serverError() {
	http_response_code ( 500 );
}
?>
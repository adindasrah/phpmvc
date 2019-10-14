<?php

if( !session_id() ) {
	session_start();
} 

require_once '../app/init.php'; // init untuk teknik bootstrapping (memanggil seluruh file yang dbutuhkan)

$app = new App;
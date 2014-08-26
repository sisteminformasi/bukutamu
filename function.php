<?php

error_reporting(0);

//library database
include "ezsql.php";
//koneksi
$db = new ezSQL_mysql('root','','bukutamu','localhost');

function save( $data )
{
	global $db;
	
	$db->insert('bukutamu', $data );
	
}
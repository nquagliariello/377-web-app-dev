<?php

include("library.php");

$connection = get_connection();

$delete =<<<SQL
delete lib
SELECT * 
FROM lib
SQL;

?>
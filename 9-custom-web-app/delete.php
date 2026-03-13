<?php

include("library.php");

$connection = get_connection();

$delete =<<<SQL
delete lib
SELECT * 
FROM lib
SQL;

header('Location: index.php?content=list');

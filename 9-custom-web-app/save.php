<?php

include("library.php");

$connection = get_connection();

$title = $connection->real_escape_string($title);
$album = $connection->real_escape_string($album);
$artist = $connection->real_escape_string($artist);
$duration = $connection->real_escape_string($duration);
$release_year = $connection->real_escape_string($release_year);
$plays = $connection->real_escape_string($plays);
$origin = $connection->real_escape_string($origin);
$lyrics = $connection->real_escape_string($lyrics);
$awards = $connection->real_escape_string($awards);
$release_date = $connection->real_escape_string($release_date);

$add =<<<SQL
INSERT INTO nq_lib
(lib_title, lib_album, lib_artist, lib_duration,lib_release_year, lib_plays, lib_origin, lib_awards, lib_lyrics, lib_release_date)
VALUES
('$title', '$album', '$artist', '$duration', $release_year, $plays, '$origin', '$awards', '$lyrics', '$release_date')

SQL;

$update =<<<SQL
UPDATE nq_lib
SET lib_title = '$title', 
lib_album = '$album',
lib_artist = '$artist',
lib_duration = '$duration',
lib_release_year = $release_year,
lib_plays = $plays, 
lib_origin = '$origin',
lib_awards = '$awards',
lib_lyrics = '$lyrics',
lib_release_date = '$release_date'
WHERE lib_id = $id
SQL;

$sql = "";

if($id == -1)
{
    $sql = $add;
}
else
{
    $sql = $update;
}

// echo $sql;

try 
{
    if ($connection->query($sql))
    {
        $id = $connection->insert_id;
        print("Success. Has id $id");
    }
    else
    {
        http_response_code(401);
    }

} 
catch(Exception $e)
{
        http_response_code(401);
}

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

$add =<<<SQL
INSERT INTO nq_lib
(lib_title, lib_album, lib_artist, lib_duration,lib_release_year, lib_plays, lib_origin, lib_awards, lib_lyrics)
VALUES
('$title', '$album', '$artist', '$duration', $release_year, $plays, '$origin', '$awards', '$lyrics')

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
lib_lyrics = '$lyrics'
WHERE lib_id = $id
SQL;

if($id == -1){
    $connection->query($add);
}else{
    $connection->query($update);
}

header('Location: index.php?content=list');
<?php

if($id == -1){
    $row["lib_id"] = -1;
    $row["lib_title"] = '';
    $row["lib_album"] = '';
    $row["lib_artist"] = '';
    $row["lib_duration"] = NULL;
    $row["lib_release_year"] = NULL;
    $row["lib_plays"] = NULL;
    $row["lib_origin"] = '';
    $row["lib_awards"] = '';
    $row["lib_lyrics"] = '';

    echo '<h2>New Input </h2>';

}else{

$sql =<<<SQL
SELECT *
FROM nq_lib
WHERE lib_id = $id
SQL;

$connection = get_connection();

$result = $connection->query($sql);

$row = $result->fetch_assoc();

echo '<h2>' . $row["lib_title"] . '</h2>';

}

?>

<form action ="save.php" method="post">
        <input type="hidden" class="form-control" name="id" value="<?php echo $row["lib_id"]; ?>">

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $row["lib_title"]; ?>">
    </div>

    <div class="mb-3">
        <label for="album" class="form-label">Album</label>
        <input type="text" class="form-control" name="album" value="<?php echo $row["lib_album"]; ?>">
    </div>

    <div class="mb-3">
        <label for="artist" class="form-label">Artist</label>
        <input type="text" class="form-control" name="artist" value="<?php echo $row["lib_artist"]; ?>">
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control" name="duration" value="<?php echo $row["lib_duration"]; ?>">
    </div>

    <div class="mb-3">
        <label for="release_year" class="form-label">Release Year</label>
        <input type="text" class="form-control" name="release_year" value="<?php echo $row["lib_release_year"]; ?>">
    </div>

    <div class="mb-3">
        <label for="plays" class="form-label">Plays</label>
        <input type="text" class="form-control" name="plays" value="<?php echo $row["lib_plays"]; ?>">
    </div>

    <div class="mb-3">
        <label for="origin" class="form-label">Origin</label>
        <input type="text" class="form-control" name="origin" value="<?php echo $row["lib_origin"]; ?>">
    </div>

    <div class="mb-3">
        <label for="awards" class="form-label">Awards</label>
        <input type="text" class="form-control" name="awards" value="<?php echo $row["lib_awards"]; ?>">
    </div>

    <div class="mb-3">
        <label for="lyrics" class="form-label">Lyrics</label>
        <input type="text" class="form-control" name="lyrics" value="<?php echo $row["lib_lyrics"]; ?>">
    </div>

    <a href="index.php?content=list" class="btn btn-secondary" role="button">Cancel</a>
    <a href="delete.php?id=<?php echo $row["lib_id"]; ?>" class="btn btn-secondary" role="Button">delete</a>
    <button type="submit" class="btn btn-primary">Save</button>

</form>
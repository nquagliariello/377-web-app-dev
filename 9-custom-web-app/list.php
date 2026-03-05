<?php

?>

<h2>Music <span id="record-count"></span></h2>

<a href='index.php?content=list'>All</a>

<?php


// for ($i = 1; $i < 10; $i++)
// {
//     echo "<a href='index.php?content=list&filter=$i'>$i</a> ";
// }

// for ($i = 0; $i < 26; $i++)
// {
//     $letter = chr($i + ord("A"));
//     echo "<a href='index.php?content=list&filter=$letter'>$letter</a> ";
// }

?>

<a href='index.php?content=detail&id=-1'class = 'btn btn-primary' role='button'>Add</a>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Album</th>
            <th>Artist</th>
            <th>Duration</th>
            <th>Release Year</th>
            <th>Plays</th>
            <th>Origin</th>
            <th>Awards</th>
            <th>Lyrics</th>
        </tr>
    </thead>
    <tbody>

<?php

$connection = get_connection();

if (!isset($filter))
{
    $filter = '';
}
else
{
    $filter = $connection->real_escape_string($filter);
}

$sql =<<<SQL
 SELECT *
   FROM nq_lib
  WHERE lib_title LIKE '$filter%'
  ORDER BY lib_title
SQL;

$recordCount = 0;
$result = $connection->query($sql);
while ($row = $result->fetch_assoc())
{
    echo "<tr>";
    echo "<td><a href='index.php?content=detail&id=". $row["lib_id"] . "'>" . $row["lib_title"] . "</a></td>";
    echo "<td>" . $row["lib_album"] . "</td>";
    echo "<td>" . $row["lib_artist"] . "</td>";
    echo "<td>" . $row["lib_duration"] . "</td>";
    echo "<td>" . $row["lib_release_year"] . "</td>";
    echo "<td>" . $row["lib_plays"] . "</td>";
    echo "<td>" . $row["lib_origin"] . "</td>";
    echo "<td>" . $row["lib_awards"] . "</td>";
    echo "<td>" . $row["lib_lyrics"] . "</td>";
    echo "</tr>";

    $recordCount++;
}

?>

    </tbody>
</table>

<?php

$code =<<<JS
<script>
document.getElementById('record-count').innerHTML = '(' + $recordCount + ' records)';
</script>
JS;

echo $code;

?>
<?php

?>

<h2>Music <span id="record-count"></span></h2>

<table id="main" class="stripe hover row-border compact">

<?php

$sql = <<<SQL
SELECT *
FROM nq_lib
ORDER BY lib_title
SQL;

$rows = [];
$connection = get_connection();
$result = $connection->query($sql);
while($row = $result->fetch_assoc())
{
    $rows[] = $row;
}
print('<script>');
print('var data = ' . json_encode($rows, JSON_PARTIAL_OUTPUT_ON_ERROR) . ';');
print('</script>');
?>

<script>
    var dataTable = $('#main').DataTable({
        data: data,
        columns: [
            { data: 'lib_title', title: 'Title', render: function(data, type, row) {
                return '<a href="index.php?content=detail&id=' + row.lib_id + '">' + data + '</a>';
            }},
            { data: 'lib_album', title: 'Album' },
            { data: 'lib_artist', title: 'Artist' },
            { data: 'lib_duration', title: 'Duration' },
            { data: 'lib_release_year', title: 'Release Year' },
            { data: 'lib_plays', title: 'Plays' },
            { data: 'lib_origin', title: 'Origin' },
            { data: 'lib_awards', title: 'Awards' },
            { data: 'lib_lyrics', title: 'Lyrics' },
            { data: 'lib_release_date', title: 'Release Date' }
        ]
    });
</script>
<hr>
<a href='index.php?content=list'>All</a>

<a href='index.php?content=detail&id=-1'class = 'btn btn-primary' role='button'>Add</a>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th><a href='index.php?content=list&sort=lib_title'>Title</a></th>
            <th><a href='index.php?content=list&sort=lib_album'>Album</a></th>
            <th><a href='index.php?content=list&sort=lib_artist'>Artist</a></th>
            <th><a href='index.php?content=list&sort=lib_duration'>Duration</a></th>
            <th><a href='index.php?content=list&sort=lib_release_year'>Release Year</a></th>
            <th><a href='index.php?content=list&sort=lib_plays'>Plays</a></th>
            <th><a href='index.php?content=list&sort=lib_origin'>Origin</a></th>
            <th><a href='index.php?content=list&sort=lib_awards'>Awards</a></th>
            <th><a href='index.php?content=list&sort=lib_lyrics'>Lyrics</a></th>
        </tr>
    </thead>
    <tbody>

<?php

$connection = get_connection();

if (!isset($sort))
{
    $sort = 'lib_title';
}

$sql =<<<SQL
 SELECT *
   FROM nq_lib
  ORDER BY $sort
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
<html>
    <head>
        <title>hMDB</title>
    </html>

    <body>
        <h1>hMDB: The hanover movie database</h1>   

        <h2>MOVIES</h2>

        list of movies here
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "hmdb";

$connection = new mysqli($servername, $username, $password, $dbname);
if($connection-> connect_error)
{
    die("Connection failed: " . $connection->connect_error);
}
?>
    </body>
</html>
<?php
function open_database_connection()
{
    $connection = mysqli_connect("localhost", "root", "", "dbs338121");

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

?>
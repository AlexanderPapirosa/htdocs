<?php
function open_database_connection()
{
    //$connection = mysqli_connect("localhost", "root", "", "dbs338121");
	
	$connection = mysqli_connect("db5000348113.hosting-data.io", "dbu294991", "Krasnojarsk%314#271", "dbs338121");

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

?>
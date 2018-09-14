<?php
echo 'hello world';

$dbname = 'db_name';
$dbuser = 'db_user';
$dbpass = 'db_pass';
$dbhost = 'db_host';

$connection = pg_connect ("host=$dbhost dbname=$dbname user=$dbpass password=$dbpass");
if($connection) {
    echo 'connected';
} else {
    echo 'there has been an error connecting';
}

?>

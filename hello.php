<?php
echo 'hello world\n\n';

$dbname = 'db_name';
$dbuser = 'db_user';
$dbpass = 'db_pass';
$dbhost = 'db_host';

$connection = pg_connect ("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");
if($connection) {
    echo 'connected to postgres\n';
} else {
    echo 'there has been an error connecting to postgres\n';
}

?>

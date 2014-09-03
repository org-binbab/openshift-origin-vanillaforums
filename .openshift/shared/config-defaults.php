<?php

$Configuration['Database']['Host']       = getenv('OPENSHIFT_MYSQL_DB_HOST');
$Configuration['Database']['Name']       = getenv('OPENSHIFT_APP_NAME');
$Configuration['Database']['User']       = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$Configuration['Database']['Password']   = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

// END of file

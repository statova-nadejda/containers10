<?php

$config = [];

$config['db']['host'] = getenv('MYSQL_HOST');
$config['db']['database'] = getenv('MYSQL_DATABASE');

$config['db']['username'] = trim(file_get_contents('/run/secrets/user'));
$config['db']['password'] = trim(file_get_contents('/run/secrets/secret'));
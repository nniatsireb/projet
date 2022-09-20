<?php

require 'helpers.php';

$db = getConnection();

$query = $db->prepare(
    'SELECT id, title, description, created_at, started_at
    FROM events'

);
var_dump($query);

$query->execute();
$events = $query->fetchAll();

$template = 'index.phtml';
require 'layout.phtml';
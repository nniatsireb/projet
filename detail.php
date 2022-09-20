<?php

require 'helpers.php';

$db = getConnection();

$query = $db->prepare('
    SELECT id, title, description, created_at, started_at
    FROM events
');

$query->execute([
    $_GET['id']
]);

$event = $query->fetch();

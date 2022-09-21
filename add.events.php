<?php

require 'helpers.php';


$db = getConnection();

if (empty($_POST)) {
    // Affichage du formulaire de création de l'article
    $query = $db->prepare('SELECT title, description, category FROM categories');
    $query->execute();
    $categories = $query->fetchAll();

    $template = 'add_events.phtml';
    require 'layout.phtml';
} else {
    // Enregistrement dans la base de données
    $query = $db->prepare(
        'INSERT INTO events (title, description, created_at) VALUES (?, ?, NOW()')
    );

    $query->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['category']

    ]);

    // Redirection vers la page d'accueil
    header('Location: index.php');
    exit();
}
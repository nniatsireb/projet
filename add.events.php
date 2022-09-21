<?php

require 'helpers.php';


$db = getConnection();

if (empty($_POST)) {
    // Affichage du formulaire de création de l'evenement
    $query = $db->prepare('SELECT id, name FROM categories
       
       ');
    $query->execute();
    $categories = $query->fetchAll();
var_dump($categories);
    $template = 'add.events.phtml';
    require 'layout.phtml';
} else {
    // Enregistrement dans la base de données
    $query = $db->prepare(
        'INSERT INTO events (title, description, categorie_id, user_id, created_at, started_at) VALUES (?, ?, ?, ?, NOW(),?)'
    );
    var_dump($_POST);
    $query->execute([
        
        $_POST['title'],
        $_POST['description'],
        $_POST['category'],
        1,
        $_POST['started_at']
        
        

    ]);

    // Redirection vers la page d'accueil
    header('Location: index.php');
    exit();
}
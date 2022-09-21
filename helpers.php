<?php

function getConnection(): PDO
{
    $host = 'db.3wa.io';
    $dbname = 'gloriaperez_projet';
    $user = 'gloriaperez';
    $password ='b3fa6e949e53b62c48d4ae383bcc5df7';
    
    return new PDO(
        "mysql:host=$host;dbname=$dbname;charset=UTF8", 
        $user, 
        $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
}
<?php

require_once 'vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
]);

$meta_tags = [
    [
        'charset'               => 'utf-8',
        'viewport'              => 'width=device-width, initial-scale=1',
        'description'           => 'im full with the jokes.',
        'author'                => 'Olcay',
        'title'                 => "JOKE"
    ]
];


echo $twig->render('head.html', ['meta_tags' => $meta_tags] );

echo $twig->render('homepage.html');
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

$author = 'Marine';
$contactEmail = 'contact@gmail.com';

$twig->addGlobal('author', $author);
$twig->addGlobal('contactEmail', $contactEmail);



<?php

// Инициализация DI Nette
require_once 'vendor/autoload.php';
$loader = new Nette\DI\ContainerLoader(__DIR__ . '/temp');
$nette_di_class = $loader->load(function ($compiler) {
    $compiler->addExtension('search', new Nette\DI\Extensions\SearchExtension(__DIR__ . '/temp'));
    $compiler->addExtension('decorator', new Nette\DI\Extensions\DecoratorExtension());
    $compiler->loadConfig(__DIR__ . '/config.neon');
});
$nette_container = new $nette_di_class;

// приложение
$nette_container
    ->getService('application')
    ->run($argv[1], $argv[2], $argv[3]);
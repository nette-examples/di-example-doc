<?php

require __DIR__ . '/vendor/autoload.php';


// create DI container
$loader = new Nette\DI\ContainerLoader(__DIR__ . '/temp', autoRebuild: true);
$class = $loader->load(function($compiler) {
	$compiler->loadConfig(__DIR__ . '/config.neon');
});
$container = new $class;

// let the container create an instance of the UserController
$controller = $container->getByType(UserController::class);

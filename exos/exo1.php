<?php

require_once '../inc/functions.php';
require '../vendor/autoload.php';

/*
 * Exo 1 : En voiture.
 *
 * Il est temps de prendre la route pour ne pas être en retard
 * au rendez-vous des joyeux Zikos.
 *
 * Un controller `ConcertController` possède une méthode `enVoiture`,
 * il faut définir une route pour appeller cette méthode
 * lorsque la racine de l'application `/` est appellée.
 *
 * Un outil est déjà prêt à recevoir les instructions : AltoRouter qui est instancié dans $router
 *
 * En route
 *
 * Par exemple :
 *      $router-> ...
 *      en passant "controller#methode"
 */

 // On instancie un nouvel objet de class AltoRouter
 $router = new AltoRouter();
 // Pour  l'URL de base, si le fichier .htaccess est présent alors
// Si $_SERVER['BASE_URI'] existe (grâce à la présence du fichier .htaccess),
// on récupère l'URL de base sinon,  "/"
 $basePath = isset($_SERVER['BASE_URI'])?$_SERVER['BASE_URI']:'/';
// On définit l'URL de base récupéré précédement
 $router->setBasePath($basePath);
 // ----------------
 // ROUTE = le chemin d'une URL à la méthode du controller
 // ----------------
 $router->map('GET', '/','ConcertController#enVoiture', 'home');
 $match = $router->match();
 // ----------------
 // DISPATCHER
 // ----------------
 // Si le chemin existe
 if($match !== false) {
   // On récupère le nom du controller et de sa method dans un tableau indexé
  $controllerParts = explode('#', $match['target']);
  // On affecte le nom du controller
  $controllerName = $controllerParts[0];
  // On affecte le nom de la method du controller
  $methodName = $controllerParts[1];
  // On instancie un nouvel objet de class concertController
  $controller = new $controllerName();
  // On appzllz la mzthod enVoiture de l'objet concertController
  $controller->$methodName($match['params']);
 }
 else { // Sinon...
  // ... on informe d'une erreur de type 404
  echo '404';
 }

/*
 * Tests
 * Pas touche !
 */
displayExo(1, (
    checkRoute($router)
));

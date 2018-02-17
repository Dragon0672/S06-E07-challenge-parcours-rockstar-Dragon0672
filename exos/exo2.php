<?php
require_once '../inc/functions.php';
require '../vendor/autoload.php';

/*
 * Exo 2 : Groupie
 *
 * Bon, vous êtes arrivés mais des groupies en pagaille
 * bloquent l'entrée de la salle.
 *
 * La signature d'autographes s'impose.
 *
 * Notre `ConcertController` possède une méthode `autographe`
 * qui signe automatiquement un autographe en passant le nom de la groupie
 *
 * public function autographe($name) {
 *    return 'Avec tout mon amour, pour ' . $name;
 * }
 *
 * L'application doit être capable d'utiliser
 * l'adresse : /groupies/signer/<nom de la groupie>
 * pour renvoyer l'autographe signé
 *
 * $router devrait aider !
 */

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
 $router->map('GET', '/groupies/signer/[a:name]','ConcertController#autographe');
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
  // On appelle la method autographe de l'objet concertController
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
displayExo(2, checkSign($router));

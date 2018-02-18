<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Loges
 *
 * On se prépare pour le concert, un dernier tour des partoches,
 * quelques médiators dans la poche,
 * les baguettes porte-bonheur,
 * Sans oublier le petit rituel de la bande avant d'y aller ...
 *
 * Un petit Pierre Papier Ciseaux pour connaître l'ordre d'entrée en scène
 *
 * Les valeurs acceptées sont
 * - rock
 * - paper
 * - scissors
 *
 * Le choix du joueur est placé en paramètre GET 'choice'
 *
 * Par exemple :
 *   rockPaperScissors() doit renvoyer un tableau associatif sous la forme
 *  [
 *    'user' => 'paper',
 *    'ia' => 'rock',
 *    'win' => true
 *  ]
 *
 */

$userChoice = $_GET['choice'];

$winCase = [
  'rock' => [
    'scissors' => true,
  ],
  'paper' => [
    'rock' => true,
  ],
  'scissors' => [
    'rock' => false,
  ]
];

function rockPaperScissors($user) {
    global $winCase;
    // On définie les 3 coups possibles dans un tableau indéxé
    $choices = ['rock', 'paper', 'scissors'];
    // On vérifie que le coup est valide
    if (!in_array($user, $choices)) {
      return false;
    }

    do { // Au moins une fois :
      // On effectue un choix aléatoire pour l'adversaire
      $ia = $choices[array_rand($choices, 1)];
      // On recommence tant qu'il y a égalité
    } while ($user === $ia);
    // On teste la validité au sein du tableau associatif
    $win = isset($winCase[$user][$ia]) ? $winCase[$user][$ia] : false;
    // On renvoie un tableau associatif
    return [
      'user' => $user, // Choix de l'utilisateur
      'ia' => $ia, // Choix aléatoire
      'win' => $win // L'utilisateur gagne ?
    ];
}


/*
 * Tests
 * Pas touche !
 */
displayExo(3, checkShifumi(rockPaperScissors($userChoice)));

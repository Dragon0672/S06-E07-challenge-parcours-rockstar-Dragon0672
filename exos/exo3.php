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

    $choices = ['rock', 'paper', 'scissors'];

    return [
      'user' => '', // Choix de l'utilisateur
      'ia' => '', // Choix aléatoire
      'win' => '', // L'utilisateur gagne ?
    ];
}


/*
 * Tests
 * Pas touche !
 */
displayExo(3, checkShifumi(rockPaperScissors($userChoice)));

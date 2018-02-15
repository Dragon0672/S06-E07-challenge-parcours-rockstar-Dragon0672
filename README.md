# RockStar Tour

*Yeahhh*

![](https://giphy.com/gifs/rocker-100aWG8Q9cZbJS)

Salut les jeunes, nous on est des rockeurs, des vrais !

Va falloir nous filer un coup de main pour les préparatifs du concert de ce soir.

Jouer on sait faire; PHP c'est pas notre rayon.

---

Bref.

On a quelques soucis de logistique pour la tournée et pour les préparatifs,

à l'aide

---

PS : Venez pas tout me casser, ne modifiez uniquement le code des fonctions, pas touche au reste, sinon vous allez recevoir un coup de gibson sur la truffe !  
Au boulot !

![](https://giphy.com/gifs/animation-cute-lol-l1J9BcdrS1tnmmNUs)


## Avant de commencer

* Si vous bloquez, n'hésitez pas à passez à l'exercice suivant. Vous risquez juste d'avoir une chanson 'discutable' à votre propos.

* La fonction `displayExo` affiche du HTML avec des tests sur votre fonction. Si vous souhaitez tester tranquillement votre fonction avant, n'hésitez pas à utiliser `die` pour arrêter PHP :

```php
function calculPlage() {
    return 10;
}

// Je teste ma fonction
echo calculPlage();

// J'arrête PHP, pour ne pas que ça m'affiche le HTML
die();


/*
 * Tests
 * Pas touche !
 */
displayExo(1, (
    calculPlage(10, 10, 10) === 40
    && calculPlage(1, 2, 3) === 9
    && calculPlage(27.90, 59.00, 6.50) === 99.90
));
```

---

Good Luck & Have Fun !

# TP 02 PHP - Programmation Web 2 - 2026/2027
* **Nom :** ZAHRAOUI
* **Prenom :** Khadija
* **Groupe :** G4
---
## Liste des exercices
* **Exercice 1 :** Notions de base, balises et commentaires
* **Exercice 2 :** Variables et concatenation
* **Exercice 3 :** Operation arithmethique 
* **Exercice 4 :** Structures conditionnelles
* **Exercice 5 :** Boucles 
* **Exercice 6 :** Tableaux indexes
* **Exercice 7 :** Tableaux associatifs 
* **Exercice 8 :** Fonctions 
* **Exercice 9 :** Traitement des chaines 
* **Exercice 10 :** Formulaires GET et POST 

## Exercice 2:
* **Casse des variables :** En PHP, les noms de variables sont sensibles a la casse.
* **Analyse de la validite des noms de variables :**
* '$a' : **Valide**
* '$_a' : **Valide**
* '$a_a' : **Valide**
* '$AAA' : **Valide**
* '$a!' : **Valide**
* '$1a' : **Valide**
* '$a1' : **Valide**

## Exercice 4: 
* 'echo' convetit automatiquement la donnee en chaine de caracteres ('string') avant de l'imprimer. En PHP, EN PHP.la valeur booleene 'false' est convertie en une chaine vide'""', donc 'echo false;' n'affiche rien a l'ecran.
* 'var_dump()' affiche directement le type brut et la valeur exacte de la variable sans conversion textuelle prealable. Ainsi, 'var_dump(false);' affiche clairement 'bool(false)'.

## Exercice 5: 
* '-1' : Note invalide
* '9' : Note valide
* '10' :Passable
* '12' : Assez bien
* '14' : bien
* '16' : Tres bien
* '21' : Note invalide

## Exercice 10:
* **Methode GET ('ex10_get.html' -> 'ex10_get.php') :** les donnees  transmises par le formulaire sont ajoutees directement a la fin de l'URL dans la barre d'adresse du navigateur. Elles sont donc vidibles et adaptes a la transmission de parametres non sensibles.
* **Methode POST ('ex10_post.html' -> 'ex10_post.php') :** les donnees tranmises sont integree dans le corps de la requeste HTTP. L'URL reste propre sans affivher les parametres saisies, ce qui est preferable pour la confidentialite ou l'envoi de donnees valumineuses.
 
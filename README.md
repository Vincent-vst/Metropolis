## About     

School project that can {display, add, remove} films.   
It's also using IMDBApi in order to fill the description field.  


## Usage 

Password to delete films is `1234`.  


## Installation   

__installation :__
```
> composer install
> npm install 
```

__usage :__   
```` 
> symfony server:start -d 
> npm run dev  # or npm run watch 
````


## Consignes     
  
Ce qu’il faut réaliser: Il nous faut une BDD avec un seule table, donc une seule entité : Movie : id, name, description, score (1..10), votersNumber
1 Une hompepage qui affiche la liste des films, par ordre de notation + ordre alphabétique,Nom film | description | Note | nombre de votants* une page d'ajout d'un film, donc un formulaire qui permet de saisir le nom d'un film, une note, email de l'utilisateur,* lorsque l'utilisateur saisie le nom d'un film, il faut chercher sa description dans l'api  http://www.omdbapi.com/Si on trouve le film c'est bon, sinon on affiche un message d'erreur à l'utilisateur,
(l’appel à l’api et la récupération de la description du film doit être faite dans un service)* Une page Film, elle affiche le nom du film, sa note actuelle de 1 à 10, sa description  * dans la page film, ajouter un bouton de suppression, cette action  ne peut être faite que par la saisie d'un code admin, le code est à ajouter comme un parameter symfony,
* Une page qui nous permet de faire un import en masse, c’est à dire importer un fichier csv / excel  (upload) et sauvegarder tout son contenu,le fichier contient un ensemble de film (Nom film | description | Note)* bonus : une page statistique, qui permet d'afficher un camembert représentant les différentes notes de 1 à 10 de tous les films,* bonus : ajout de la possibilité d’upload de photo pour un film et l’afficher dans la liste et dans la fiche film,


## TODO    

- [ ] change all `{}`  
- [ ] change file name.  
- [ ] fix search bug with blank space  
- [ ] add error when film not found 
- [ ] add .sql to this repo 
- [ ] move API in a service
- [ ] order film display
- [ ] add user email to the form
- [ ] admin button should be in a symfony parameter



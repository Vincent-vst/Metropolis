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
  
Gestion de bibliothèques de films 

Ils faut une BDD avec une seule table : ex : 
Movie : id, name, description, score(1..10)

Une homepage qui affiche la liste des films, listés par ordre de notation + ordre alphabétique. 

Nom film | description | note 

* une page d'ajout d'un film, donc un formulaire qui perset de saisire le nom d'un film, une note,
* lorsque l'utilisateur saisie le nom d'un film, il faut chercher sa description dans l'API : www.omdbapi.com 
		si on trouve le film, on l'ajoute, sinon, on met un message d'erreur 
* Une page film, elle affiche le nom du film, sa note actuelle (de 1 à 10 ) une descriptino à récupérer depuis l'API. (omdbapi.com)  
* dans la page film, ajouter un bouton de suppression, cette action    ne peut être faite que par la saisie d'un code admin.
* Une page qui nous permet de faire un import en masse, c'est à dire d'importer un fichier csv, exel (upload) et sauvegarder tout son contenu. 
		le fichier continer un ensemble de film (nom film | description | Note)  
* Optionelle, une page statistique qui permet d'afficher un camembert représentant les stats  


> savoir comment créer des routes 
> utiliser des controllers 
> utilisation de formulaires 



## TODO    

Change all 
```php 
	function {

	}
```
to 
```php 
function 
{

}
```

Also change the name of the files 

Correct bug of Film with spaces in it. i.e : "pulpfiction" works but "pulp fiction" doesn't

Si on trouve le film c'est bon, sinon on affiche un message d'erreur à l'utilisateur,
(l’appel à l’api et la récupération de la description du film doit être faite dans un service)

Before submit, add the .sql file to the git... 


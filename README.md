# Webové technologie
### Cvičení provedl Aleksandr Shabelnikov v Symfony 6.1

N.B. All twig templates code are stored in templates folder. 

## Bootstrap
* Bootrap support was realized from the beginning.
* assets/styles/global.scss 
* don't forget to enable Sass support in webpack.config.js and point it to global.scc - .addStyleEntry('global', './assets/styles/global.scss')
* yarn watch to build/rebuild assets

## Cv 07
http://mrmidi.net:8000
First route, simple page. Realized thru src/Controllers/HelloworldController.php

## Cv 08
GET queries. src/Controllers/GetterController.php
http://mrmidi.net:8000/getter

## Cv 09
Passing an arrays to twig templates. CSS styles (assets/styles/app.css)
Controller: src/Controllers/SendarrayController.php

## Cv 10
CRUD, Doctrine databases.
Here i'm using 2 entities: Games and Platforms (one-to-one relationship) to display and modify list of games that I own.
Controller: src/Controllers/MygamesController.php
Entities: src/Entity/Games.php, src/Entity/Platforms.php
http://mrmidi.net:8000/mygames (also CRUD admin link on that page)
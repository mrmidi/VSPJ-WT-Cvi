# Webové technologie (Web technologies)
A class tought by ***PaedDr. František Smrčka, Ph.D.*** . 
Made by Aleksandr Shabelnikov in Symfony 6.1 

N.B. All twig templates code are stored in templates folder.  

## Bootstrap
* Bootrap support was realized from the beginning.
* assets/styles/global.scss 
* don't forget to enable Sass support in webpack.config.js and point it to global.scc - .addStyleEntry('global', './assets/styles/global.scss')
* `yarn watch` to build/rebuild assets

## Menu (navbar)
* Was realized from the beggining (templates/base.html.twig)

## Ex 07
First route, simple page. Realized thru src/Controllers/HelloworldController.php  
http://mrmidi.net:8000

## Ex 08
GET queries. src/Controllers/GetterController.php  
http://mrmidi.net:8000/getter

## Ex 09
Passing an arrays to twig templates. CSS styles (assets/styles/app.css)  
Controller: src/Controllers/SendarrayController.php  
http://mrmidi.net:8000/sendarray

## Ex 10
CRUD, Doctrine databases.  
Here i'm using 2 entities: Games and Platforms (one-to-one relationship) to display and modify list of games that I own.  
** PDF Download realized here ** — it's nice content to make it.  
Controller: src/Controllers/MygamesController.php  
Entities: src/Entity/Games.php, src/Entity/Platforms.php  
http://mrmidi.net:8000/mygames (also CRUD admin link on that page)

## Ex 11
Security bundle.
* Registration form
* Login form
* Logout
* Message for only registred users
Controller: src/Controllers/SecurityexController.php
Entity: src/Entity/Usewr.php
http://mrmidi.net:8000/securityex
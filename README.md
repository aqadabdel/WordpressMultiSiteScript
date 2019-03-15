# Wordpress MultiSite Scripts
Wordpress Scripts pour créer des multisites à partir du fichier CSV input.csv
Ce script crée les slugs et utilisateurs avec le rôle d'auteur our d'administrateur.


This is a simple script to create multiple users and sub websites in Worpress 
from a student list in CSV.


The input.csv is an example of how the data must be formated.

The main script generate_script_genusers.sh.php generate a bash script with all the requested commands
to generate users and multisites by lot.

Before use you need to install php, wordpress with multisite activated in conf file and wp cli.

To install wp cli</br>
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

This script use commands: </br>
<b>wp site create</b></br>
<b>wp user create</b></br>
<b>wp user update</b></br>

if a user already exist, it will update it instead. 

The index.php is designed to show the list in a webpage before using the script to generate users.

TODO:
Mettre des tests de vérification de variables en input (mail is mail? ect...)
Faire un formulaire d'upload pour l'envoi.
Choix des Roles pour l'utilisateur à ajouter dans le csv.




<h3> Author: AQAD ABDEL </h3>
<h3> IUTA VILLENEUVE D'ASCQ </h3>
<h3> Université de Lille </h3>
<h3><i>abdelaziz.aqad(at)univ-lille.fr</i></h3>

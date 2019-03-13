# Wordpress MultiSite Scripts
Wordpress Scripts pour créer des multisites à partir d'un fichier CSV ect...
This is a simple script to create multiple users and sub websites in Worpress 
from a student list in CSV.


The input.csv is an example of how the data must be formated.

The main script generate_script_genusers.sh.php generate a bash script with all the requested commands
to generate users and multisites by lot.

Before use you need to install php, wordpress with multisite activated in conf file and wp cli.

To install wp cli
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

This script use <br>
<b>wp site create</b>
<b>wp user create</b>
<b>wp user update</b>

if a user already exist, it will update it instead. 

The index.php is designed to show the list in a webpage before using the script to generate users.
 

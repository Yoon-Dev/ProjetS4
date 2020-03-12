Les dossiers Backoffice, bddManagement; class, src, utils sont utilisés pour le backend
Pour le front commencer à la racine du dossier
Depot git si vous voulez
https://github.com/Yoon-Dev/ProjetS4
dite moi votre nom si vous voulez être en collaborateur(c'est pierre)
    Mon pseudo c'est MatPic
    Le pseudo de Louis c'est ldefaut
    killianguilland

Pour charger les informations de la base de données, il faut:
require '../utils/conn.php';
! le "../" est à moduler en fonction d'où vous vous trouvez dans le site

ensuite il faut 
chargerclass("../class/", "Manager"), pareil le "../" est à changer en fonction du besoin

ensuite il faut 
$manager = new Manager($conn);

Cela créée un objet manager qui va ensuite charger les modèles.

Pour charger un modèle il faut faire
$manager->getModelModel()
Le premier "Model" correspond au nom de la table de la base de données

Exemple si je veux charger les informations de la table "Page" je fais
$page = $manager->getPageModel();




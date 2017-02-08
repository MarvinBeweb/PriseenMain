PriseenMain
===========
## Prise en Main de synfony

### Commprendre certains aspects de son fonctionnement. 
* .htaccess: Il est utilisé pour la redirection:
    * HTTP_Host
    * REQUEST_URI
    * ENV:BASE
* Explication de la relation Route -URI (Ressources)
* Prise en main des Routes
* Découverte de la fonction twig parent
* Découverte de l'architecture de Symfony

# Procédure d'iinstallation (Linux)
Sur Netbeans:
1. Projet clique droit , Composer,Install dev
2. Faire un chmod -R a+rwx à la racine du dossier
3. Configurer la base de donnée dans la parameter.yml
4. Terminal : php bin/console doctrine:databse:create
5. php bin/console doctrine:schema:create update --force
# wordpress-project 
 this project is a app wordpress bliuid in class 

### identity card


pour ajouter un logo il faut cre la fonction theme_setup() dans fonction.php


get blog_info && nget_loogo 

une fonction naitve 


add Icone 

creation de fonction geticone qui renvoie le markup correspondant  dans la fonction getIcon()

### Page 
definire dans php la page d'accuiel 


Reglage >lecture 

Par defaut la page affiche les dernier article 
du coup on change to accueil
et aussi la page d'aticle 


utilses is_front_page()


# Page creation de single.php 
pour afficher un article Nous avons besoin de cette page 

ad un suport de fiiture image 

'post-thumbnails'
get_the_title () recuper le title 

the_title() affiche le titre    = $post->post_title ene brutre 

En worldpreess nous avons de type de hook
des filtre et le brute 

add the filtre pour title   function esgi_custom_title($title) 

# Page creation de pluggin 
creation de pluggin qui vas nous permettre dadd un lien 
## Étape 1: Création du dossier et du fichier principal
il prend deux paramettre les actions et le post 
faire un vardump d e    action pour voir les elements

Créez un dossier nommé ESGI-plugin dans le répertoire wp-content/ESGI-plugin/ de votre installation WordPress
Dans ce dossier, créez un fichier nommé ESGI-plugin.php

## Étape 2: Ajout des entêtes du plugin
Ouvrez le fichier ESGI-plugin.php et ajoutez les entêtes pour identifier votre plugin:

## Étape 3: Ajout des liens de duplication dans la liste des posts
Ajoutez le callback pour les hooks post_row_actions et page_row_actions:
## Étape 4: Création de la fonction de duplication


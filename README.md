# Blog Riquart Simon

Bonjour, les identifiants que j'ai créé par défaut sont

Mail: jp.lannoy@nilsine.fr
Password: nilsine

# INDEX

C'est la page d'accueil, elle renvoie les articles déjà créés, et donne accès au menu pour se connecter, s'inscrire ou effectuer 
une recherche.
Lorsque l'utilisateur est connecté, il obtient alors les droits pour modifier ou supprimer les articles présents sur la page d'accueil.
Il peut aussi se déconnecter s'il le souhaite.

# INSCRIPTION

Page d'inscription, accessible depuis l'accueil pour les utilisateurs non connectés, elle comporte 5 champs qui doivent être remplis,
le nom, le prénom, le mail, le mot de passe et la confirmation de mot de passe. Si l'utilisateur a bien rempli les champs, il est
redirigé vers la page d'accueil et peut alors se connecter. Sinon, des erreurs s'affichent.

# CONNEXION

La page de connexion permet de se connecter au blog afin de pouvoir accéder aux droits d'écriture et de modification d'articles. 
L'utilisateur peut se connecter grâce au lien dans le menu, où il sera redirigé vers une page lui demandant son mail et son mot de passe.
Une fois connecté, il peut ensuite modifier et supprimer les articles, mais aussi en écrire d'autres. Le lien de connexion se change
en lien de déconnexion.

# DECONNEXION

La déconnexion va simplement servir à détruire les informations de connexion sauvegardées lors de la connexion pour ainsi déconnecter
l'utilisateur et le renvoyer à la page d'accueil.

# REDACTION D'ARTICLE

La page de rédaction d'un nouvel article est disponible pour les utilisateurs connectés seulement, ils peuvent y accéder sur le menu
de droite s'ils sont connectés et les renvoie sur une page contenant 2 champs, le titre et le contenu, ainsi que la possibilité
d'insérer une image avec l'article.

# MODIFICATION D'ARTICLE

Cette fonction est accessible aux utilisateurs connectés, tout comme l'ajout d'article, et permet de revenir sur la page de redaction
d'article en gardant les valeurs du titre et du contenu, afin de faciliter la modification.

# RECHERCHE D'ARTICLE

Cette fonction permet d'afficher les articles recherchés grâce aux mots clés, en utilisant une barre de recherche en haut à droite du 
blog. Si la recherche n'aboutit pas, elle ne renvoie aucun article.

# NEWSLETTER

Fonction permettant de s'inscrire dynamiquement à la newsletter, avec confirmation, qui vérifie si le mail est valide et s'il est inexistant dans la base de données.

# SLIDER

Fonction permettant d'afficher un diaporama des trois articles les plus récents avec JQuery, en haut de la page index.

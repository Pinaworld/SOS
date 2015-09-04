# SOS
Introduction
Dans le cadre de la création d'un nouveau service, le présent cahier des charges détaille les
différentes fonctionnalités qui doivent être mises en place.
La Maison des Ligues de Lorraine souhaite créer un site internet proposant un service permettant de
trouver des partenaires de sport dans la région et du même niveau que l'utilisateur. Ce site permet la
mise en contacte de sportifs qui peuvent, au choix, donner le adresse email et / ou leur numéro de
téléphone pour être contacté par d'autres utilisateurs.
Le site doit disposer d'un design propre, désolidarisé de celui de la Maison des Ligues de Lorraine.
Liste des pages et fonctionnalités
Disposition générale des pages
Sur toutes les pages, le titre du site : « SOS Partenaires » est affiché en grand, tout en haut.
Dans les pages où l'utilisateur est connecté, un menu apparaît sous le titre du site. Ce menu dispose
de quatre liens :
• « Partenaires disponibles » à gauche
• « Mes sports » à droite
• « Mon compte » à droite
• « Déconnexion » à droite : déconnecte l'utilisateur et le redirige vers la page d'accueil avec
un message de succès.
De plus, toujours dans les pages où l'utilisateur est connecté, un message d'information apparaît et
indique à l'utilisateur s'il n'a renseigné ni numéro de téléphone ni email et l'encourage à aller les
renseigner. Le message informe également que l'utilisateur ne peut apparaître dans la liste s'il ne
donne aucune de ses deux informations.
Dans le bas de la page, sur la droite, se trouvent les trois liens « Plan du site », « Mentions légales »
et « CGU ».
Accueil
La page d'accueil permet uniquement la connexion ou l'inscription. La consultation du site n'est
disponible que pour les membres connectés.
Sur cette page, deux formulaires permettent :
• La connexion :
◦ Rendu :
Un champ « Identifiant » et un champ « Mot de passe ». Un bouton « Connexion »
permet de valider le formulaire.
◦ Fonctionnalité :
Un message d'erreur indique qu'il faut compléter les deux champs du formulaire si
celui-ci est envoyé alors que au moins un des deux champs est vide.
Un message d'erreur indique que l'identifiant ou le mot de passe sont erroné au cas où
2/5
aucune correspondance n'est trouvée en base de données.
Un message de succès indique que la connexion a réussi si l'identifiant est reconnu et
que le mot de passe est bon. L'utilisateur est alors redirigé vers la page « Partenaires
disponibles »
• L'inscription :
◦ Rendu :
Un champ « Identifiant », un champ « Mot de passe » et un champ « Confirmation du
mot de passe ». Un bouton « Inscription » permet de valider le formulaire.
◦ Fonctionnalité :
Un message d'erreur indique qu'il faut compléter les trois champs du formulaire si
celui-ci est envoyé alors que au moins un des trois champs est vide.
Un message d'erreur indique si les deux mots de passes ne sont pas identiques.
Un message d'erreur indique si l'identifiant est déjà pris par un autre utilisateur.
Un message de succès indique que l'inscription a réussi et l'utilisateur est connecté
automatiquement est redirigé vers la page « Partenaires disponibles ».
Partenaires disponibles
Cette page permet de rechercher des partenaires. La recherche se présente sous la forme d'un
formulaire dans lequel on trouve un sélecteur où est listé les sports auxquels l'utilisateur est inscrit
et d'un bouton de recherche. Ce sélecteur est enrichi d'un champ de recherche grâce à la librairie
Select2 permettant de trouver plus facilement le sport voulu si la liste est trop longue.
Au cas où l'utilisateur n'est inscrit à aucun sport, un message d'information le notifie.
Un message d'erreur est également envoyé si l'utilisateur valide le formulaire sans avoir sélectionné
de sport.
Une fois la recherche lancée, les résultats s'affichent dans un tableau à quatre colonnes :
« Identifiant », « Lieu », « Email » et « Téléphone ».
Dans ce tableau sont listés les utilisateurs trouvés. S'il n'y en a aucun, « Aucun partenaire trouvé
pour le moment... » apparaît à la place des résultats.
Mes sports
Cette page permet de gérer les sports auxquels l'utilisateur est inscrit. Elle est séparé en deux
parties ; une liste des sports auquel l'utilisateur est inscrit sous forme d'un tableau en trois colonne :
« Sport », « Niveau » et « Lieu » et un formulaire pour ajouter un nouveau sport aux sports
pratiqués par l'utilisateur.
Dans le tableau, si l'utilisateur n'est inscrit à aucun sport, « Aucun sport pour le moment... »
apparaît. A côté de chaque sport, un lien pour supprimer ce sport sous forme d'un logo rond barré.
Le formulaire est constitué de trois champs :
• « Sport » : un sélecteur enrichi d'un champ de recherche grâce à la librairie Select2
permettant de trouver plus facilement le sport voulu si la liste est trop longue. Les sports
listés sont issus de la base de données et excluent les sports auxquels l'utilisateur est déjà
inscrit.
3/5
• « Niveau » : un sélecteur enrichi d'un champ de recherche grâce à la librairie Select2
permettant de trouver plus facilement le niveau voulu si la liste est trop longue. Les niveaux
listés sont issus de la base de données.
• « Lieu » : un champ de texte libre dans lequel l'utilisateur peut mettre ce qu'il veut (Ville,
Région, Stade, etc.).
Un bouton « Ajouter » permet de valider ce formulaire.
Mon compte
Cette page permet de modifier individuellement son Téléphone, son Email ou son Mot de passe.
Si, lors de la modification du Téléphone ou de l'Email, le champ est laissé vide, alors cette
information est supprimé de la base de données. En cas de format de Téléphone ou d'Email
incorrecte, un message d'erreur est retourné.
La modification du mot de passe, quant à elle, nécessite une confirmation du nouveau mot de passe.
En cas de deux mots de passe différents, un message d'erreur est retourné.
Plan du site
Le plan du site liste les différentes pages du site :
• « Partenaires disponibles »
• « Mes sports »
• « Mon compte »
• « Mentions légales »
• « Conditions Générales d'Utilisation »
Conditions générales d'utilisation
Cette page est le "contrat" qui lie les gestionnaires du site avec l'utilisateur. Il y est détaillé les règles
que l'utilisateur doit suivre ainsi que les engagement du gestionnaire du site. Le contenu de cette
page sera fourni directement par le client.
Mentions légales
Cette page est une page d'information dans laquelle sont données les informations sur :
• la déclaration à la CNIL
• l'hébergeur
• le développeur du site
• le gestionnaire de contenu du site
Design
Framework CSS
Pour démarrer le projet avec un design et une intégration propre à moindre coût, le framework CSS
4/5
bootstrap de Twitter dans sa version 3.0.1 sera utilisé.
Police de caractères
La police à utiliser sera sport-center. Cette police sera appliqué sur tous les titres et labels des
boutons.
Pour les icônes, une police spéciale, font awesome, sera utilisée à la place d'images.

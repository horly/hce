# Historique du projet HCE

Dernière mise à jour : 26 août 2026

## 1. Présentation

Le projet HCE est le site vitrine bilingue de **Hightech Computing Evolution**. Il présente l’entreprise, ses services IT, ses solutions de sécurité électronique, ses formations, ses réalisations et ses ressources. Il permet également aux visiteurs de contacter directement l’équipe HCE.

Le projet se trouve dans `D:\App\Codex\hce` et utilise principalement :

- Laravel 12 et PHP 8.2 ou supérieur ;
- Blade pour les vues ;
- Tailwind CSS 4 pour l’interface ;
- Vite 7 pour la compilation des ressources ;
- JavaScript natif pour les interactions ;
- Pest 3 pour les tests automatisés.

## 2. Pages réalisées

Le site comprend les pages publiques suivantes, disponibles en français et en anglais :

| Page | Route |
| --- | --- |
| Accueil | `/{locale}` |
| L’entreprise | `/{locale}/entreprise` |
| Services | `/{locale}/services` |
| Sécurité électronique | `/{locale}/solutions/securite-electronique` |
| Formations / HCE Academy | `/{locale}/formations` |
| Réalisations | `/{locale}/realisations` |
| Ressources | `/{locale}/ressources` |
| Contact | `/{locale}/contact` |
| Politique de confidentialité | `/{locale}/politique-de-confidentialite` |
| Politique de cookies | `/{locale}/politique-de-cookies` |
| Mentions légales | `/{locale}/mentions-legales` |

La racine `/` redirige automatiquement vers la version française `/fr`.

## 3. Fonctionnalités livrées

### Site bilingue

- Contenus français et anglais centralisés dans `lang/fr/site.php` et `lang/en/site.php`.
- Préfixes d’URL `/fr` et `/en`.
- Middleware `SetLocale` chargé d’activer la langue demandée.
- Sélecteur de langue conservant la page actuellement visitée.
- Correction du chemin de redirection initial afin que le site fonctionne correctement lorsqu’il est déployé dans un sous-domaine.

### Page d’accueil

- Hero sous forme de carrousel présentant les services managés, la sécurité électronique et HCE Academy.
- Appels à l’action vers les pages importantes.
- Chiffres clés de HCE.
- Grille des technologies maîtrisées.
- Présentation des expertises et services.
- Carrousel des projets réalisés.
- Section différenciation et valeurs HCE.
- Présentation de l’équipe dirigeante.
- Bloc de contact final.

### Présentation de l’entreprise

- Histoire, positionnement et vision de HCE.
- Méthode de travail et indicateurs clés.
- Valeurs et engagements.
- Présentation de l’équipe dirigeante avec les photos d’Orden BADIBANGA et Ruth HOKIEL.

### Services et solutions

- Services managés.
- Infrastructure et réseaux.
- Cybersécurité.
- Sécurité électronique.
- Solutions métiers.
- Ressources et assistance IT.
- Navigation vers les différentes expertises et appels à l’action contextualisés.

### HCE Academy

- Présentation des parcours de formation professionnelle.
- Mise en avant de la méthode pédagogique.
- Étapes d’accompagnement et résultats attendus.
- Appels à l’action vers la prise de contact.

### Formulaire de contact

- Formulaire Blade réutilisable avec affichage compact ou complet.
- Validation côté serveur au moyen de `StoreContactRequest`.
- Messages de validation en français et en anglais.
- Champs : nom, entreprise, e-mail, téléphone, sujet et message.
- Champ invisible anti-robot (`website`).
- Limitation à cinq soumissions par minute avec le middleware de throttling.
- Envoi d’un e-mail à l’adresse configurée dans `HCE_CONTACT_RECIPIENT`.
- E-mail HTML dédié avec les informations du prospect.
- Message de confirmation après un envoi réussi.

### Navigation et composants partagés

- En-tête fixe et adaptatif.
- Menu de bureau et menu mobile.
- Bouton de contact et numéro de téléphone visibles dans la navigation.
- Pied de page complet avec coordonnées, liens utiles, expertises et réseaux sociaux.
- Composants Blade réutilisables pour les icônes, liens de navigation, titres de section, héros de page et formulaire de contact.
- Bouton de retour en haut de page.
- Barre de progression de lecture.

### Expérience visuelle et interactions

- Refonte graphique moderne conforme à l’identité HCE.
- Mise en page responsive pour mobile, tablette et ordinateur.
- Palette HCE bleu, orange et bleu nuit.
- Animations d’apparition au défilement.
- Carrousels pour les contenus de la page d’accueil.
- Bandeau défilant des technologies.
- États interactifs du menu, des boutons et des cartes.
- Prise en charge de `prefers-reduced-motion` pour réduire les animations lorsque l’utilisateur le demande.
- Écran de chargement aux couleurs de HCE avec logo, orbite animée et barre de progression.
- Mécanisme de secours masquant automatiquement l’écran de chargement si l’événement de fin de chargement tarde à arriver.

### Cookies et conformité

- Bandeau d’information sur les cookies.
- Choix d’acceptation ou de refus conservé dans le navigateur.
- Pages dédiées à la confidentialité, aux cookies et aux mentions légales.
- Aucun cookie publicitaire ou outil tiers de mesure d’audience déclaré à ce stade.

### Référencement et partage

- Titres et descriptions propres aux pages.
- Métadonnées Open Graph.
- URL canonique.
- Liens alternatifs `hreflang` pour le français et l’anglais.
- `robots.txt` et `sitemap.xml` publics.
- Favicon et image de partage HCE.

### Ressources et médias

- Logos HCE avec et sans fond.
- Visuels dédiés au hero, aux infrastructures, à la sécurité, aux formations, à la transformation métier et aux projets de ville connectée.
- Logos de vingt technologies, notamment Microsoft, Cisco, Fortinet, Laravel, Docker, Odoo, Proxmox, MikroTik, MySQL, PostgreSQL, VMware, Veeam, WordPress, ESET et Yeastar.
- Présentation institutionnelle HCE 2026 disponible dans `public/documents/presentation-hce-2026.pdf`.

## 4. Modernisation réalisée le 21 août 2026

Une refonte visuelle importante a été appliquée après la première version :

- modernisation générale de la page d’accueil ;
- enrichissement de la page entreprise ;
- amélioration des pages services, contact et formations ;
- ajout des photos de l’équipe dirigeante ;
- amélioration des composants de formulaire ;
- ajout et ajustement d’animations, de cartes, de sections et de comportements responsive ;
- mise à jour de la configuration de l’application et des variables d’environnement d’exemple.

Cette refonte représente plus de 800 lignes ajoutées ou retravaillées dans les vues et les styles.

## 5. Corrections techniques réalisées

### Routage multilingue

La redirection de `/` vers la version française a été rendue relative. Cette correction évite les erreurs d’URL lorsque l’application est installée derrière un sous-domaine ou dans un environnement dont le domaine diffère de celui configuré localement.

### Écran de chargement

Un écran de chargement HCE a été ajouté au layout principal :

- préchargement prioritaire du logo ;
- texte traduit en français et en anglais ;
- disparition après le chargement complet de la page ;
- durée minimale d’affichage pour éviter un clignotement ;
- fermeture forcée après cinq secondes côté JavaScript et huit secondes côté CSS ;
- retrait du composant du DOM après sa transition.

## 6. Retours du client traités

### Première remarque — 26 août 2026

Sur la page d’accueil, le troisième chiffre clé affichait :

- avant : `30+ Sites web réalisés` ;
- après : `30+ Projets réalisés`.

La traduction anglaise a également été harmonisée :

- avant : `30+ Websites delivered` ;
- après : `30+ Projects delivered`.

Cette modification concerne uniquement les statistiques de la page d’accueil.

### Deuxième remarque — 26 août 2026

Le grand bloc d’appel à l’action placé au-dessus des colonnes du pied de page a été retiré de toutes les pages afin d’éviter une répétition avec les appels à l’action déjà présents dans le contenu.

Le nettoyage comprend :

- la suppression du bloc dans le layout partagé ;
- la réduction de l’espace supérieur du pied de page ;
- la suppression des styles CSS et des traductions qui n’étaient plus utilisés.

### Troisième remarque — 26 août 2026

La longue description affichée sous le logo dans le pied de page a été remplacée par le slogan officiel `Your Trusted MSP Partner`. Le même slogan est utilisé dans les versions française et anglaise du site.

### Quatrième remarque — 26 août 2026

Le lien de l’icône LinkedIn du pied de page a été remplacé par l’adresse officielle de la page **Hightech Computing Evolution** :

`https://www.linkedin.com/company/hightech-computing-evolution/?viewAsMember=true`

Les liens Facebook, Instagram et YouTube seront mis à jour ultérieurement, dès réception de leurs adresses officielles.

### Essai visuel — bleu du logo — 26 août 2026

Un essai local et réversible a été préparé pour renforcer le bleu du logo dans l’ensemble du thème.

- bleu dominant relevé directement dans le logo : `#0370F7` ;
- bleu nuit principal de l’essai : `#032D6B` ;
- bleu nuit profond : `#021B42` ;
- bleu nuit clair : `#064AA8` ;
- échelle Tailwind `blue-*` réalignée sur le bleu exact du logo ;
- fonds du header, du hero, des sections sombres, des cartes et du footer rendus plus bleus ;
- orange `#FF8300` conservé comme couleur d’accent ;
- contraste blanc sur bleu du logo : `4,50:1` ;
- contraste blanc sur bleu nuit : `13,19:1`.

Cet essai a été déployé sur Prestavice le 26 août 2026. Pour revenir à la palette précédente, il faut restaurer `#0875ED` comme bleu HCE, `#061936` comme bleu nuit, supprimer l’échelle `blue-*` personnalisée et rétablir le `theme-color` précédent dans le layout.

Sauvegarde dédiée au rollback du thème :

`/home/<utilisateur-ssh>/backups/hce-before-blue-theme-20260826-132749.tar.gz`

La mise en ligne a été validée avec les pages française et anglaise en HTTP 200, le nouveau fichier CSS en HTTP 200 et la présence des couleurs `#0370F7` et `#032D6B` dans l’asset compilé servi au public.

### Cinquième remarque — 26 août 2026

Les noms de famille des deux membres de la direction ont été mis en majuscules sur la page d’accueil et la page entreprise, dans les versions française et anglaise :

- `Orden BADIBANGA` ;
- `Ruth HOKIEL`.

Cette correction a été déployée sur Prestavice le 26 août 2026. Les pages d’accueil et entreprise, en français et en anglais, ont été vérifiées en HTTP 200 avec les deux noms corrigés.

Sauvegarde dédiée au rollback :

`/home/<utilisateur-ssh>/backups/hce-before-uppercase-names-20260826-133725.tar.gz`

Les archives temporaires locale et distante ont été supprimées après validation.

## 7. Tests automatisés

La suite actuelle contient des tests unitaires et fonctionnels couvrant notamment :

- le rendu de toutes les pages publiques en français ;
- le rendu de toutes les pages publiques en anglais ;
- le changement de langue en conservant la page courante ;
- la présence de la grille de technologies et de l’adresse du bureau ;
- l’acceptation et l’envoi d’une demande de contact valide ;
- le rejet d’un formulaire de contact incomplet.

État au 26 août 2026 : **28 tests réussis, 69 assertions**.

Commande de vérification :

```powershell
php artisan test
```

## 8. Principaux fichiers du projet

| Élément | Emplacement |
| --- | --- |
| Routes publiques | `routes/web.php` |
| Traductions françaises | `lang/fr/site.php` |
| Traductions anglaises | `lang/en/site.php` |
| Layout principal | `resources/views/components/layouts/app.blade.php` |
| Page d’accueil | `resources/views/home.blade.php` |
| Styles principaux | `resources/css/app.css` |
| Interactions JavaScript | `resources/js/app.js` |
| Formulaire réutilisable | `resources/views/components/contact-form.blade.php` |
| Validation du contact | `app/Http/Requests/StoreContactRequest.php` |
| Traitement du contact | `app/Http/Controllers/ContactController.php` |
| E-mail de contact | `app/Mail/ContactMessage.php` |
| Tests publics | `tests/Feature/PublicPagesTest.php` |
| Tests du contact | `tests/Feature/ContactFormTest.php` |

## 9. Configuration utile

Les variables importantes sont documentées dans `.env.example`. Pour la production, il faut notamment vérifier :

- `APP_URL` et les paramètres généraux de Laravel ;
- les paramètres `MAIL_*` du serveur d’envoi ;
- `HCE_CONTACT_RECIPIENT`, qui définit le destinataire du formulaire ;
- la configuration de cache, session et file d’attente selon l’hébergement.

Commandes courantes :

```powershell
composer install
npm.cmd install
npm.cmd run build
php artisan test
```

## 10. État actuel et suite du travail

- Les quatre premiers retours du client ont été appliqués localement et déployés en production.
- La documentation présente a été ajoutée dans `docs/`.
- Les autres retours du client restent à recevoir et à traiter un par un.
- Chaque nouvelle série de retours devra être validée par les tests et le build frontend avant son déploiement.

## 11. Déploiement du 26 août 2026

Les retours client ont été déployés sur `https://hce.prestavice.com/fr` via l’hébergement Hostinger.

### Informations du serveur

| Paramètre | Valeur documentée |
| --- | --- |
| Hébergeur | Hostinger |
| URL de production | `https://hce.prestavice.com/fr` |
| Hôte SSH | `147.93.92.142` |
| Port SSH | `65002` |
| Utilisateur SSH | `u336848046` |
| Dossier du projet | `/home/<utilisateur-ssh>/domains/prestavice.com/public_html/hce` |
| Empreinte de la clé du serveur | `SHA256:5WtQN6AWIoL9n7hmh62vxH4rs39R+wKFN6de/drNNFI` |
| Authentification | Mot de passe — jamais stocké en clair dans cette documentation |
| Empreinte du mot de passe | `SHA-256:4e0f12ec9a150afbd4be5a93cca3edaeaa9391978cb3b2cde6e8095ea3c80c3f` |
| Transport des e-mails | `sendmail` |
| Expéditeur | `noreply@hce.cd` |
| Destinataire du formulaire | `contact@hce.cd` |

L’empreinte SHA-256 du mot de passe sert uniquement à reconnaître la version du secret utilisée lors du déploiement. Elle ne permet pas de se connecter et ne doit jamais être fournie à la place du mot de passe. Aucun mot de passe SMTP, jeton, clé privée ou autre secret réversible n’est conservé dans ce fichier.

### Résultat du déploiement

- sauvegarde préalable : `/home/<utilisateur-ssh>/backups/hce-before-20260826-130720.tar.gz` ;
- caches Laravel nettoyés puis reconstruits ;
- versions française et anglaise vérifiées en HTTP 200 ;
- asset CSS de production vérifié en HTTP 200 ;
- présence des nouveaux contenus et absence du bandeau retiré confirmées en production.

Les archives temporaires de transfert ont été supprimées après validation. La sauvegarde de 46 Mo a été conservée pour permettre un retour arrière.

## 12. Historique Git synthétique

| Date | Commit | Travail |
| --- | --- | --- |
| 21 août 2026 | `c532225` | Création du projet et première version complète du site HCE |
| 21 août 2026 | `07477f6` | Modernisation du site vitrine HCE |
| 21 août 2026 | `17ec2db` | Correction de la redirection de langue pour le déploiement en sous-domaine |
| 21 août 2026 | `2bc846e` | Ajout de l’expérience de chargement aux couleurs de HCE |

# Hébergement cPanel de HCE

## Organisation

| Élément | Emplacement |
| --- | --- |
| Site principal | `https://hce.cd` |
| cPanel | `https://cp01.hce.cd:2083/` |
| Compte | `hcecd` |
| Application Laravel | `/home/hcecd/hce` |
| Racine publique | `/home/hcecd/public_html` |
| Configuration privée | `/home/hcecd/hce/.env` |
| Base SQLite dédiée | `/home/hcecd/hce/database/database.sqlite` |
| Journaux Laravel | `/home/hcecd/hce/storage/logs` |
| PHP Laravel | `/opt/cpanel/ea-php82/root/usr/bin/php` |
| Portail d’hébergement existant | `/home/hcecd/public_html/hosting`, domaine `host.hce.cd`, PHP 8.1 |

Le dossier `public_html` reçoit les ressources de `public` et un point d’entrée adapté : `index.php` charge `/home/hcecd/hce/vendor/autoload.php` et `/home/hcecd/hce/bootstrap/app.php`, puis appelle `$app->usePublicPath(__DIR__)` avant de traiter la requête.

Le fichier `.env`, les dépendances et le code Laravel restent hors de la racine publique. Le fichier `public/index.php` du dépôt conserve son fonctionnement local standard.

## Configuration de production

- `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://hce.cd`.
- Clé Laravel générée sur le serveur ; `.env` et SQLite avec permissions `0600`.
- Sessions et cache sur fichiers ; file d’attente synchrone.
- Base SQLite neuve pour cette application ; aucune reprise de la base locale.
- Transport `sendmail`, expéditeur `noreply@hce.cd`, destinataire `contact@hce.cd`.
- Cookies de session sécurisés pour HTTPS.
- Caches Laravel reconstruits sur le serveur, sans réutiliser les chemins Windows.

Aucun identifiant secret cPanel ni aucune clé d’application ne doit être ajouté au dépôt.

## Procédure

1. Exécuter `php artisan test` et `npm.cmd run build`.
2. Préparer une copie isolée du projet, puis installer les dépendances avec `composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-scripts`.
3. Exclure `.env`, la base locale, les caches PHP générés, les journaux, `node_modules`, les tests du projet et les outils temporaires de l’archive.
4. Transférer l’archive dans le dossier privé du compte et vérifier son empreinte SHA-256.
5. Sauvegarder l’ancien site avant remplacement. Le portail `hosting` est exclu de cette sauvegarde et du déploiement.
6. Préparer l’application privée, générer la clé lors de la première installation, exécuter les migrations et reconstruire les caches.
7. Vérifier Laravel sur le serveur, puis activer PHP 8.2 uniquement pour `hce.cd` et installer les fichiers publics.
8. Vérifier les pages, ressources, redirections HTTPS, protections des fichiers privés et disponibilité du portail `host.hce.cd`.
9. Retirer les tâches temporaires et fichiers de transfert. Conserver la sauvegarde.

Le compte n’a pas de shell SSH. Les commandes de préparation passent par des scripts privés exécutés par des tâches cPanel temporaires, protégées contre une exécution répétée. La tâche WHMCS existante doit être conservée.

Pour les mises à jour suivantes, conserver impérativement le `.env`, la clé Laravel, la base SQLite et les données de stockage déjà présents sur le serveur.

## Sauvegarde du premier déploiement

Sauvegarde créée : `/home/hcecd/backups/hce-before-20260906.tar.gz` (174 354 612 octets, permissions `0600`, dossier parent `0700`).

Empreinte SHA-256 : `440034287938ec642e7d08635af87cfc39bd56e1d52c4eee701dff4d238cb3ae`.

L’ancien site utilisait `public_html/index.php` et l’application située dans `public_html/cgi-bin`. Un retour à cette version nécessite de restaurer les fichiers remplacés depuis la sauvegarde et de remettre PHP 8.1 pour `hce.cd`. Ne pas remplacer le dossier `hosting` ni sa tâche planifiée.

## Résultat du 6 septembre 2026

Déploiement effectué sur `https://hce.cd` avec PHP **8.2.33**. Le portail `host.hce.cd` reste sous PHP 8.1 et sa tâche WHMCS est inchangée.

- 35 tests locaux réussis, 90 assertions ; compilation Vite réussie.
- Archive de production vérifiée par SHA-256 avant extraction.
- Migrations appliquées à la nouvelle base SQLite et caches Laravel reconstruits.
- 86 contrôles HTTP réussis : 24 pages bilingues, 51 ressources et 11 contrôles complémentaires.
- Redirections HTTP vers HTTPS et accès via `www` vérifiés.
- Fichiers privés testés inaccessibles ; soumission sans jeton CSRF rejetée en HTTP 419.
- Sitemap corrigé et vérifié avec 24 URL bilingues.
- Aucune erreur Laravel générée pendant les contrôles.
- Transport mail configuré ; aucun message réel envoyé lors de la validation. La réception des e-mails reste à confirmer avec une demande réelle.
- Tâches temporaires supprimées, fichiers de transfert et scripts temporaires placés dans la corbeille cPanel, journaux de déploiement conservés dans `backups`.

Les autres répertoires préexistants de `public_html` ont été conservés. Le déploiement remplace le point d’entrée du site principal et ajoute les nouvelles ressources publiques.

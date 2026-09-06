# Destinations de déploiement du projet HCE

Règle enregistrée à la demande de l’utilisateur le 6 septembre 2026, applicable uniquement au projet `D:\App\Codex\hce`.

| Demande | Destination |
| --- | --- |
| « Déploie sur Prestavice » | HCE chez Hostinger : `https://hce.prestavice.com` |
| « Déploie sur cPanel » ou « déploie sur cpnel » | Serveur cPanel HCE : `https://hce.cd` |

## Prestavice

| Paramètre | Valeur |
| --- | --- |
| Hébergeur | Hostinger |
| Hôte SSH | `147.93.92.142` |
| Port SSH | `65002` |
| Utilisateur SSH | `u336848046` |
| Dossier du projet | `/home/u336848046/domains/prestavice.com/public_html/hce` |
| Empreinte du serveur SSH | `SHA256:5WtQN6AWIoL9n7hmh62vxH4rs39R+wKFN6de/drNNFI` |
| URL de vérification | `https://hce.prestavice.com/fr` et `/en` |

Ces paramètres proviennent du déploiement documenté dans [HISTORIQUE_PROJET.md](HISTORIQUE_PROJET.md), section 11. Vérifier la structure distante existante avant mise à jour et conserver sa configuration de production.

Le mot de passe Prestavice n’est pas disponible sous une forme utilisable dans les fichiers actuels du projet. Son empreinte historique n’est pas un identifiant de connexion. Utiliser un accès déjà autorisé s’il est disponible dans la session ; sinon, demander uniquement le secret manquant au moment d’un déploiement Prestavice. Ne jamais utiliser le mot de passe cPanel pour Prestavice par supposition.

## cPanel HCE

| Paramètre | Valeur |
| --- | --- |
| Interface cPanel | `https://cp01.hce.cd:2083/` |
| Utilisateur | `hcecd` |
| Site | `https://hce.cd` |
| Application privée | `/home/hcecd/hce` |
| Racine publique | `/home/hcecd/public_html` |
| PHP | `/opt/cpanel/ea-php82/root/usr/bin/php` |
| Secret local chiffré | `.hce-secrets/cpanel.credential.xml` |

Le secret fourni par l’utilisateur est conservé localement sous forme de `PSCredential` chiffré par Windows DPAPI. Il peut être relu par le même compte Windows sur cette machine avec `Import-Clixml`. Il est exclu du dépôt et des transferts. Ne pas afficher l’objet déchiffré, le mot de passe, les cookies ou les jetons de session.

Lors du déploiement du 6 septembre, la connexion cURL avec cookies a fonctionné : ouverture de session sur `/login/?login_only=1`, puis appels cPanel avec le chemin de session retourné et le fichier de cookies. Les premiers essais d’authentification Basic et de session .NET n’ont pas permis d’accéder aux API. Utiliser des fichiers de session temporaires privés, puis fermer la session et supprimer ces fichiers après utilisation.

Le compte n’a pas de shell SSH. La préparation et l’activation ont utilisé des scripts privés et des tâches cPanel temporaires. Détails dans [DEPLOIEMENT_CPANEL.md](DEPLOIEMENT_CPANEL.md).

## Portée de cette mémorisation

Ces profils servent à sélectionner la destination lors d’une future demande explicite de déploiement HCE. L’enregistrement de cette règle ne déclenche aucun nouveau déploiement et ne s’applique à aucun autre projet.

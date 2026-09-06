# Consignes propres au projet HCE

Ces instructions s’appliquent uniquement à ce dépôt, `D:\App\Codex\hce`, et à ses déploiements. Elles ne définissent aucune destination pour les autres projets.

## Choix du serveur de déploiement

Règle explicitement demandée par l’utilisateur le 6 septembre 2026 :

- « Déploie sur Prestavice » : déployer HCE sur l’hébergement Hostinger Prestavice, site `https://hce.prestavice.com`.
- « Déploie sur cPanel », « déploie sur cpnel » et variantes de casse ou d’accent : déployer HCE sur le compte cPanel HCE, site `https://hce.cd`.
- Ne pas substituer une destination à l’autre. Une demande visant un serveur ne demande pas de synchroniser les deux.
- Une demande de déploiement nommant la destination autorise la préparation, la sauvegarde, le transfert, l’activation et la validation sur cette destination. Ne pas redemander les informations déjà disponibles ni une confirmation de destination déjà explicite.
- Si une future demande ne précise aucune destination et que le contexte ne permet pas de la déterminer, demander uniquement laquelle utiliser.

Lire [docs/DEPLOIEMENTS.md](docs/DEPLOIEMENTS.md) pour les profils des deux serveurs et les modalités d’accès. Pour cPanel, lire également [docs/DEPLOIEMENT_CPANEL.md](docs/DEPLOIEMENT_CPANEL.md).

## Préservation des installations

- Sauvegarder les fichiers remplacés et vérifier les tests et la compilation avant activation.
- Conserver le `.env`, la clé Laravel, la base de données et le stockage de chaque installation existante. Ne pas réexécuter une procédure de première installation qui les remplacerait.
- Sur cPanel, préserver `/home/hcecd/public_html/hosting`, sa configuration PHP et sa tâche WHMCS.
- Vérifier les pages françaises et anglaises et les ressources publiques après déploiement.
- Les secrets locaux chiffrés dans `.hce-secrets/` sont exclus de Git et des archives de déploiement. Ne pas les afficher, les transférer ni les supprimer lors du nettoyage des fichiers temporaires.

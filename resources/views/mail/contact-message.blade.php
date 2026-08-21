<x-mail::message>
# Nouvelle demande via hce.cd

**Nom :** {{ $contact['name'] }}  
**Entreprise :** {{ $contact['company'] ?? 'Non renseignée' }}  
**E-mail :** {{ $contact['email'] }}  
**Téléphone :** {{ $contact['phone'] ?? 'Non renseigné' }}  
**Objet :** {{ $contact['subject'] }}

## Message

{{ $contact['message'] }}

Ce message a été envoyé depuis le formulaire de contact du site HCE.
</x-mail::message>

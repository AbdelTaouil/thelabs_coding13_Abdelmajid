@component('mail::message')
# Bienvenue {{ $user->name}}

Merci de votre confiance avec l'adresse {{ $user->email }}
@endcomponent

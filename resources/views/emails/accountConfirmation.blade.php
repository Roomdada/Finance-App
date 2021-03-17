@component('mail::message')
# Confirmation de compte

Hello {{$user->firstname.' '.$user->lastname}} veuillez confirmer la creation de votre compte payyed en cliquant sur le lien ci-dessous:<br>

@component('mail::button', ['url' =>  route('confirm.account',$user->token) ])
Confirmer maintenant
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

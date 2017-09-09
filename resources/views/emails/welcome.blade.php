@component('mail::message')
# Hello {{$user->name}}

Thank you for the registration. Please verify your email by clicking the button below:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Verify account
@endcomponent

Thanks,<br>
# Mido
@endcomponent
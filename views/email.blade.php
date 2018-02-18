@component('mail::message')
# Test Email

Your email has been successfully delivered!

@component('mail::button', ['url' => url('/')])
Return to Home Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

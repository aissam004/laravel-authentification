@component('mail::message')
# Introduction

Hello 

@component('mail::button', ['url' => $url])
Clickez ici
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

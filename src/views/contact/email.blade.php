@component('mail::message')
# Introduction
This new Message from {{ $name }}
<br>
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

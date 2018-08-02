@component('mail::message')
# Introduction
New contact message from {{ $name }}<br>
Message:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
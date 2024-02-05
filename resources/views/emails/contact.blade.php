<x-mail::message>
@component ('mail::message')
#Contact from {{ $name }}
{{ $content }}

<x-mail::button :url="'adum.test'">
Visit Us
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

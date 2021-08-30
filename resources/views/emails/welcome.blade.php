@component('mail::message')
# {{$title}}

 {!! nl2br( $content )!!}


@component('mail::button', ['url' => 'http://127.0.0.1/'])
الذهاب للموقع
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

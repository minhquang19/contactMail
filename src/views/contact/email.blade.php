
@component('mail::message')
    From {{$email}}
    <br>
    Hi I'm {{$name}}
    <br>
    {{$mess}}
    Thanks,<br>
    {{$name}}
@endcomponent


@component('mail::message')
salut l'Admin

- {{ $name }}
- {{ $email }}
    @component('mail::panel')
    {{ $msg }}
    @endcomponent

Thanks,<br>
Kenly
@endcomponent

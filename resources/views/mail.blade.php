@component('mail::message')
    Contact name: {{$comment->name}} <br>
    Contact last name: {{$comment->lastname}} <br>
    Contact email: {{$comment->email}} <br>
    Contact message: {{$comment->text}} <br>
    @component('mail::button', ['url' => 'http://www.proauto.me/'])
        Visit ProAuto.me
    @endcomponent

    Thank you for using our services , you will be contacted as soon as possible
    Best regards,
    ProAuto Team.
@endcomponent

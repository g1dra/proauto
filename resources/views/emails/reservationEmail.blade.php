@component('mail::message')
# Your Booking information:
@component('message2', ['reservation'=>$reservation])
@endcomponent
@component('mail::table', ['reservation'=>$reservation])
@endcomponent

@component('mail::button', ['url' => 'http://www.proauto.me/'])
Visit ProAuto.me
@endcomponent

Thank you for using our services ,<br>
Best regards,<br>
ProAuto Team.
@endcomponent

@component('mail::message')
#{{ trans('subscription::lang.greeting', ['shop' => $receiver ]) }}

{{ trans('subscription::lang.notifications.expire.message') }}
<br/>
{{ trans('subscription::lang.notifications.expire.expire_date', ['date' => date('d-m-Y', strtotime($expire_date))]) }}
<br/>

@component('mail::button', ['url' => $url, 'color' => 'blue'])
{{ trans('subscription::lang.button_text') }}
@endcomponent

{{ trans('subscription::lang.thanks') }},<br>
{{ get_platform_title() }}
@endcomponent

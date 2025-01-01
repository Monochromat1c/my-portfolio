@component('mail::message')
# {{ $data['subject'] }}

**From:** {{ $data['name'] }} ({{ $data['email'] }})

**Message:**
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent 
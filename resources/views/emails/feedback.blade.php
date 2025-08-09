{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
@component('mail::message')
    # New Feedback Submission

    @if (!empty($data['anonymous_check']))
        **Submission Type:** Anonymous
        **Feedback:**
        {{ $data['anonymous_feedback'] }}
    @endif

    @if (!empty($data['recognized_check']))
        **Submission Type:** Recognized
        **Feedback:**
        {{ $data['recognized_feedback'] }}

        **Name:** {{ $data['name'] }}
        **Email:** {{ $data['email'] }}
        **Mobile:** {{ $data['mobile'] }}
    @endif

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

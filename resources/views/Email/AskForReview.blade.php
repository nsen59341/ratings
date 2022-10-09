@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $mailData['url']])
Please provide us a review
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

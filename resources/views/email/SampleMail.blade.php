@component('mail::message')
# Introduction

The body of your message.
<h2>Hello</h2>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 1 is      | Centered      | $10      |
| Col 2 is      | Right-Aligned | $20      |
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent

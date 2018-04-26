@extends('templates.email')

@section('content')
    Dear TESC member,
    <br>
    <br>
    Someone tried to contact <b>{{ $contactMessage->to  }}</b> via <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>.
    <br>
    Here are the details:
    <ul style="margin: 0;">
        <li>sender address: <a href="mailto:{{ $contactMessage->from }}?Subject=TESC%20response" target="_top">{{ $contactMessage->from }}</a></li>
        <li>sender message: <i>{{ $contactMessage->content  }}</i></li>
    </ul>
    <br>
    <span style="font-size: .8rem; color: indianred"><b>Please do not reply to this message.</b></span>
    <br>
    <br>
    Best wishes,
    <br>
    TESC Team
@endsection

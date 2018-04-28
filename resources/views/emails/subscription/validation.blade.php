@extends('templates.email')

@section('content')
    <p style="margin: 0 0 1rem 0;">
        Please confirm your Tilburg Experience Sampling Center newsletter subscription by clicking the button below.
    </p>

    <a href="{{ route('subscription.subscribe', ['token' => $token]) }}"
       style="
            padding: 1rem;
            border-radius: 1rem;
            background-color: #3F51B5;
            color: #FAFAFA;
            text-decoration: none;
            line-height: 1;
       "
    >Yes, subscribe me to the list!</a>

    <p style="margin: 1rem 0 0 0;">
        You can find out more information about us at <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>.
    </p>
@endsection
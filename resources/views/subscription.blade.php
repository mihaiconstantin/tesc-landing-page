@extends('templates.subscription')


@section('content')

	<!-- Subscription action title. -->
	<div class="bk subscription-action_title col-md-10 m-auto text-center">
		@if($action == 'subscribe')
			<h1 class="display-4">Thank you!</h1>
		@elseif($action == 'unsubscribe')
			<h1 class="display-4">We are sad to see you go...</h1>
		@elseif($action == 'stop')
			<h1 class="display-4 text-danger">Action not allowed!</h1>
		@endif
	</div>


	<!-- Subscription action message. -->
	<div class="bk subscription-action_message col-md-10 m-auto text-center lead">
		@if($action == 'subscribe')
			You have successfully subscribed to our newsletter.<br>We will send you occasional updates.
		@elseif($action == 'unsubscribe')
			You have successfully unsubscribed from our newsletter.<br>You will no longer receive occasional updates.
		@elseif($action == 'stop')
			<span class="text-danger">Based on your current subscription status we determined<br>that this action cannot be performed.</span>
		@endif
	</div>


	<!-- Subscription action home button. -->
	<div class="bk subscription-action_button col-md-10 m-auto text-center">
		<a class="btn" href="/">Go to landing page</a>
	</div>


	<!-- Subscription action ps. -->
	<div class="bk subscription-action_ps col-md-10 m-auto text-center small text-muted">
		@if($action == 'subscribe')
			P.S. If you like what you see, feel free to spread the word about Tilburg Experience Sampling Center.<br><span class="subscription-action_ps_heart">&hearts;</span><br>Your email address is safe with us.
		@elseif($action == 'unsubscribe')
			P.S. If you enjoyed your stay, feel free to spread the word about Tilburg Experience Sampling Center.<br>Hope to see you again soon.
		@elseif($action == 'stop')
			P.S. If you think this message is a mistake, please use the contact form on the<br>landing page to let us know.
		@endif
	</div>

@endsection

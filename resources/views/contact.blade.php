@extends('layouts.app')
@section('title')
contact
@endsection
@section('content')

<div class="container">
	<!-- Contact Form -->
	<div class="contact-form">
		@include('common.errors')
		<form method="POST" action="/contact">
			@csrf
			<div class="form-group">
				<label for="contact-email">Email address</label>
				<input type="email" class="form-control" id="contact-email" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="contactFormControlTextarea">Message</label>
				<textarea class="form-control" id="contactFormControlTextarea" rows="7"></textarea>
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input form-control-lg" id="newsletter-subscription">
				<label class="form-check-label" for="newsletter-subscription">Newsletter</label>
			</div>
			<div class="form-group send-button">
				<button type="submit" class="contact-send">Send</button>
			</div>
		</form>
	</div>
</div>

@endsection

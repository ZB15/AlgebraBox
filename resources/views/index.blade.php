
@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
	
		<div class="login-row">
			<div class="login">
				<img src="{!!asset('images/algebra-logo.svg')!!}"/>
				<h1>AlgebraBox</h1>
				<h2>The greatest cloud storage</h2>
				<h3>You must login or create account to continue.</h3>
				<p class="login-btn flat-btn">
				  <a class="btn background-green" href="{{ route('auth.login.form') }}" role="button">Log In</a>
				</p>
				<p class="login-btn flat-btn">
				  <a class="btn background-blue" href="{{ route('auth.register.form') }}" role="button">Create account</a>
				</p>
		  </div>
		</div>
		
@stop

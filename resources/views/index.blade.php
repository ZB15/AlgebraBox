@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
<div class="row">
    <div class="jumbotron" style="text-align: center;
">
<img src="{!!asset('images/algebra-box-logo.png')!!}"/>
        <h1>AlgebraBox</h1>
        <h2>The greatest cloud storage</h2>
        <p>You must login or create account to continue.</p>
        <p>
          <a class="btn btn-primary btn-lg" href="{{ route('auth.login.form') }}" role="button">Log In</a>
          <a class="btn btn-primary btn-lg" href="{{ route('auth.register.form') }}" role="button">Create account</a>
        </p>
  </div>
</div>
@stop

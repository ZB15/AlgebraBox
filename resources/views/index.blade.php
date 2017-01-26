@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
<div class="row">
    <div class="jumbotron" style="text-align: center;
">
<img src="{!!asset('images/Algebra-BOX-logo.png')!!}"/>
        <h1>AlgebraBox</h1>
        <h2>The greatest cloud storage</h2>
        <p>You must login or create account to continue.</p>
        <p class="login-btn">
          <a class="btn background-green" href="{{ route('auth.login.form') }}" role="button">Log In</a>
          <a class="btn background-blue" href="{{ route('auth.register.form') }}" role="button">Create account</a>
        </p>
  </div>
</div>




  
  
@stop

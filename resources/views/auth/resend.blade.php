@extends('layouts.index')

@section('title', 'Resend Activation Instructions')

@section('content')
<div class="login-row">
    <div>
        <div class="login">
            <div class="login-logo">
                <img src="{!!asset('images/algebra-logo.svg')!!}"/>
				<h2>Resend Activation Instructions</h2>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.activation.resend') }}">
                <fieldset>
                    <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}">
                        {!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                    <input class="btn login-btn-box background-green" type="submit" value="Send">
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

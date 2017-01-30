@extends('layouts.index')

@section('title', 'Login')

@section('content')
<div class="login-row">
    <div>
        <div class="login">
            <div class="login-logo">
				
                <img src="{!!asset('images/algebra-logo.svg')!!}"/>
				<h2>Login</h2>
				
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.login.attempt') }}">
					<fieldset>
						<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
							<input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}">
							{!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
						</div>
						<div class="form-group  {{ ($errors->has('password')) ? 'has-error' : '' }}">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
							{!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="true" {{ old('remember') == 'true' ? 'checked' : ''}}> Remember Me
							</label>
						</div>
						<input name="_token" value="{{ csrf_token() }}" type="hidden">
						<input class="btn login-btn-box background-green" type="submit" value="Login">
						<div class="login-bottom">
							<p class="btn login-btn-box background-orange flat-btn"><a class="color-ff" href="{{ route('auth.password.request.form') }}" type="submit">Forgot your password?</a></p>
							<p class="btn login-btn-box background-blue flat-btn"><a class="color-ff" href="{{ route('auth.register.form') }}" type="submit">Register</a></p>
						</div>
					</fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


@stop

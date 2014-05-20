@extends('layout')

@section('content')
{{ Form::open(array('url' => 'login/login', 'class' => 'form-signin',  'id' => 'login-form')) }}
<h2 class="form-signin-heading">Please sign in</h2>
{{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>"Enter email")); }}
{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>"Password")); }}
<label class="checkbox"> Remeber me
    {{ Form::checkbox('remember-me', 'remember-me'); }}
</label>
{{ Form::submit('Sign in', array('class'=>'btn btn-lg btn-primary btn-block')) }}
<a onclick="showRegister()" class="link-register">Don't have an account?</a>
{{ Form::close() }}

<div class="register">
    {{ Form::open(array('url' => 'login/register', 'class'=> 'form-register', 'id' => 'register-form')) }}
    <h2>Register</h2>

    <div class="form-group">
        {{ Form::label('email', 'Email Address'); }}
        {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>"Enter email")); }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>"Password")); }}
    </div>
    <div class="form-group">
        {{ Form::label('passwordRepeat', 'Password'); }}
        {{ Form::password('passwordRepeat', array('class'=>'form-control', 'placeholder'=>"Password")); }}
    </div>
    {{ Form::submit('Register', array('class'=>'btn btn-lg btn-primary btn-block')) }}
    <a onclick="showLogin()" class="link-signin">Sign in with existing account</a>
    {{ Form::close() }}
</div>

<script>
    function showRegister() {
        $('#register-form').slideDown();
        $('#login-form').slideUp();
    }

    function showLogin() {
        $('#register-form').slideUp();
        $('#login-form').slideDown();
    }
</script>
@stop
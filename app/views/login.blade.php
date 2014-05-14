@extends('layout')

@section('content')
{{ Form::open(array('url' => 'foo/bar', 'class' => 'form-signin',  'id' => 'login-form')) }}
<h2 class="form-signin-heading">Please sign in</h2>
<input type="email" class="form-control" placeholder="Email address" required autofocus>
<input type="password" class="form-control" placeholder="Password" required>
<label class="checkbox">
    <input type="checkbox" value="remember-me"> Remember me
</label>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<a onclick="showRegister()" class="link-register">Don't have an account?</a>
{{ Form::close() }}
<div class="register">
    {{ Form::open(array('url' => 'foo/bar', 'class'=> 'form-register', 'id' => 'register-form')) }}
    <h2>Register</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Repeat password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <a onclick="showLogin()" class="link-signin">Sign in with existing account</a>
    {{ Form::close() }}
</div>

<script>
    function showRegister(){
        $('#register-form').slideDown();
        $('#login-form').slideUp();
    }
    
    function showLogin(){
        $('#register-form').slideUp();
        $('#login-form').slideDown();
    }
</script>
@stop
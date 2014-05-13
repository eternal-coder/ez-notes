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
{{ Form::close() }}
<div class="register">
    <a onclick="showRegister()">Register an account</a>
    {{ Form::open(array('url' => 'foo/bar', 'class'=> 'form-register', 'id' => 'register-form')) }}
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
    {{ Form::close() }}
</div>

<script>
    function showRegister(){
        $('#register-form').show();
    }
</script>
@stop
<?php

class LoginController extends BaseController{
    public function index() {
        return View::make('login')->with('registerForm');
    }
    
    public function register() {
        $input = Input::all();
        if($input['password'] === $input['passwordRepeat']){
            $user = new User();
            $user->email = $input['email'];
            $user->password = Hash::make($input['password']);
            $user->save();
        }
        return "User created";
    }
    
    public function login(){
        $input = Input::all();
        return "";
    }
}

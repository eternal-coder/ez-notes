<?php

class LoginController extends BaseController{
    public function index() {
        return View::make('login')->with('registerForm');
    }
    
    public function register() {
        $input = Input::all();
        return "";
    }
    
    public function login(){
        $input = Input::all();
        return "";
    }
}

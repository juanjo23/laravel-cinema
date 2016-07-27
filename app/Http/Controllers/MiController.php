<?php

namespace Cinema\Http\Controllers;

use Cinema\User;
use Validator;
use Cinema\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class MiController extends Controller
{
  public function index(){
    return "Hola";
  }
  public function saludo($name='Juan')
  {
    return "Hola ". $name;
  }
}

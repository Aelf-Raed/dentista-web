<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function inicio(){
    return view('welcome');
  }

  public function nosotros(){
    return view('nosotros');
  }

  public function servicios(){
    return view('servicios');
  }

  public function contacto(){
    return view('contacto');
  }

  public function login(){
    return view('login');
  }

  public function dashboard(){
    return view('dashboard');
  }

}

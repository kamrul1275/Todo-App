<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
  function index(){
      return view('home');
  }
}

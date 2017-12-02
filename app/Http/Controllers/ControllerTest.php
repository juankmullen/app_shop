<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTest extends Controller
{
      function ir_home()
      {
      	return view('welcome');
      }
}

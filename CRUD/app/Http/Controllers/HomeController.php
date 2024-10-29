<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('carwash.home');  // Garanta que a view 'home.blade.php' existe
    }
    public function pesquisa()
    {
        return view('home.pesquisa');  // Certifique-se de que esta view exista
    }

}

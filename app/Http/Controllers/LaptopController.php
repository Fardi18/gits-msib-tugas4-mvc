<?php

namespace App\Http\Controllers;

use App\Models\Laptop;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        $laptop = Laptop::all();
        return view('laptop', ['laptopList' => $laptop]);
    }
}

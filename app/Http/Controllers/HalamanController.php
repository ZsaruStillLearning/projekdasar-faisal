<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HalamanController extends \Illuminate\Routing\Controller
{
    public function selamatDatang()
    {
        return view('welcome');
    }
}

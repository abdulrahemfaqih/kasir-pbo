<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    public function menu() {
        return view("menu");
    }

    public function kategori_menu() {
        return view("kategori_menu");
    }
}

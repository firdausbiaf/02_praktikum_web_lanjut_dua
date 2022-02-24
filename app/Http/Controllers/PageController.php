<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return ('Selamat datang');
    }
    public function about(){
        return ('2041720255-Firdaus Bia Firmansyah');
    }
    public function article($id){
        return ('Halaman Artikel dengan ID '.$id);
    }
}



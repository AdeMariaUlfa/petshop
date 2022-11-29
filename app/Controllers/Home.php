<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout');
    }
    public function kucing()
    {
        return view('produk-kucing');
    }
    public function anjing()
    {
        return view('produk-anjing');
    }
    public function ikan()
    {
        return view('produk-ikan');
    }
    public function reptil()
    {
        return view('produk-reptil');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        echo "ini adalah halaman News";
    }
    public function details($id)
    {
        echo "ini adalah halaman news dengan detail ". $id;
    }
}

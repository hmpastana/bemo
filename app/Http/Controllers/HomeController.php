<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;

class HomeController extends Controller
{
    public function index()
    {
        $index = new HomePage();
        $list = $index->list();

        return view('index',[
            'list' => $list
        ]);
    }

}

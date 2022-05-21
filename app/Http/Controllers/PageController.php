<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curse;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function course(Curse $course)
    {
        return view('course', compact('course'));
    }
}

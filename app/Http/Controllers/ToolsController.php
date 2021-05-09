<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Tools;

class ToolsController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

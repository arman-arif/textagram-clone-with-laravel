<?php

namespace App\Http\Controllers;

use App\Helpers\TextTools;
use Illuminate\Http\Request;
use App\Helpers\Tools;

class ToolsController extends Controller
{
    public function index() {
        return view('index');
    }
}

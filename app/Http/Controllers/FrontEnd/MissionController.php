<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MissionController extends Controller
{

    public function index()
    {
        return redirect()->to('/'.'#mission');
    }

}

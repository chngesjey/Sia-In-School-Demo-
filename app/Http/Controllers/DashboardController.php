<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('home', compact('siswa'));
    }
}

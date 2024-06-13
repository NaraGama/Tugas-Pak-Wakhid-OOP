<?php

namespace App\Http\Controllers;

use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $prodi = ProgramStudi::all();
        return view ('program_studi/index', compact('prodi'));
    }
}

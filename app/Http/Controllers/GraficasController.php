<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class GraficasController extends Controller
{
    public function graficarPeliculas(){
        $movies= Movies::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at',
        date('Y'))->groupBy(\DB::raw("Month(created_at"))->pluck('count');
        return view('graficas.graficarPeliculas',compact('movies'));
    }
    }


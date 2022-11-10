<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Perfume;

class PerfumeController extends Controller{

    public function index(){
        return view('index', [
            'pagetitle' => 'Our Products',
            'perfumes' => Perfume::index()
        ]);
    }

    public function show($id){
        return view('show', [
            'pagetitle' => 'Product Details',
            'perfumes' => Perfume::showPerfume($id)
        ]);
    }
}

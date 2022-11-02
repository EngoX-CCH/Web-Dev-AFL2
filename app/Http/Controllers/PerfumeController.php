<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Perfume;

class PerfumeController extends Controller{

    public function index(){
        return view('index', [
            'pagetitle' => 'Our Products',
            'perfumes' => Perfume::All()
        ]);
    }

    public function show(Perfume $perfume){

        // $writer = Writer::find($id);

        return view('show', [
            'pagetitle' => 'Product Details',
            //'maintitle' => 'The writer',
            'perfumes' => $perfume
        ]);
    }
}
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model{

    protected $fillable = [
        "name",
        "description",
        "image"
    ];

    private static $perfumes = [
        [
            'id' => '1',
            'name' => 'Missing Elf Black',
            'description' => 'Blend of Charcoal and sweet aroma. Elegant, charming, reminding, and best used with those close to you.',
            'image' => 'images/cover_perfume_black.jpg'
        ],
        [
            'id' => '2',
            'name' => 'Missing Elf Pink',
            'description' => 'Blend of vanilla and sweet aroma. Calming, fun, reminding, and best used with those close to you.',
            'image' => 'images/cover_perfume_pink.jpg'
        ]
        ];

        public static function index()
    {
        return collect(self::$perfumes);
    }

    public static function showPerfume($id){
        return self::index()->firstWhere('id', $id);
        
    }
}
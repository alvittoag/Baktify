<?php

namespace App\Models;


class Product
{
    private static $products_list = [
        [
            'img' => 'https://static.republika.co.id/uploads/images/inpicture_slide/cover-album-nevermind-milik_210825182249-773.jpg',
            "title" => "Nirvana",
            "price" => '5000000',
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing   elit. Eum quae assumenda exercitationem ducimus architecto ullam? Beatae obcaecati commodi perferendis ratione facere provident quaerat sapiente rem.",
            'stock' => '20',
            'category' => 'metal',
            "slug" => 'nirvana',
        ],
        [

            'img' => 'https://s.kaskus.id/r540x540/images/2015/03/10/1998435_20150310081546.jpg',
            "title" => "Gun n Roses",
            "price" => '8000000',
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing   elit. Eum quae assumenda exercitationem ducimus architecto ullam? Beatae obcaecati commodi perferendis ratione facere provident quaerat sapiente rem.",
            'stock' => '25',
            'category' => 'dubstep',
            "price" => '8000000',
            "slug" => 'gun-n-roses',
        ]
    ];


    public static function all()
    {
        return collect(self::$products_list);
    }

    public static function find($slug)
    {
        $products = static::all();

        return $products->firstWhere('slug', $slug);
    }
}
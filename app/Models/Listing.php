<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [

            [
                'id' => 1,
                'text' => "Hello World"
            ],
            [
                'id' => 2,
                'text' => "Hello World 2"
            ]
        ];
    }
}

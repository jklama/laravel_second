<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    public static function lists(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'This is listing one'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'This is listing two'
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'This is listing three'
            ],
            [
                'id' => 4,
                'title' => 'Listing Four',
                'description' => 'This is listing four'
            ],
        ];
    }
}

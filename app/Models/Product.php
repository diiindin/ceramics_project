<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this -> id,
            'name' => $this -> name,
            'description' => $this -> description
        ];
    }
}

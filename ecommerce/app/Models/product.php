<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $guarded = [];

    protected function status():Attribute{
        return Attribute::make(
            get:fn(string $value) => ($this->$value ==1) ? "Active" : "Inactive",

        );
    }


    protected function isfavorate():Attribute{
        return Attribute::make(
            get:fn(string $value) => ($this->$value ==1) ? "yes" : "no",

        );
    }


}

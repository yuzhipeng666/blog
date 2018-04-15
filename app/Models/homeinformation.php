<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homeinformation extends Model
{
    protected $table = 'tb_homeinformation';

    protected $fillable = [
        'keywords',
        'description',
        'address',
        'phone',
        'url',
        'bf',
        'homes',
        'updated_at',
        'created_at'
    ];

    public function homedata()
    {
        $homedata = self::select("*")->where("id","=",1)->first();
        return $homedata;
    }

}

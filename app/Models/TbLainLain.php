<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbLainLain extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'gambar', 'deskripsi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    
    ];
    
    protected $table = "tb_lain_lains";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    
    protected $primaryKey = 'idtagihan';
    protected $fillable = [
        'idtagihan',
        'nis',
        'nama',
        'keterangan',
        'tunggakan',
        'jatuhtempo',
    ];


    public $timestamps = false;

    // Relationship with other models if needed
    // public function user() {
    //     return $this->belongsTo(User::class, 'nis', 'nis');
    // }
}

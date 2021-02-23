<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkesH extends Model
{
    //
    protected $table = 'kegiatan_promkes_dinkes_h';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'id_header',
        'bentuk_kebijakan',
        'nomor',
        'tanggal',
        'perihal',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

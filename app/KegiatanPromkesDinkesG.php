<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkesG extends Model
{
    //
    protected $table = 'kegiatan_promkes_dinkes_g';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'id_header',
        'jenis_lembaga',
        'jumlah_yang_ada',
        'jumlah_yang_bermitra',
        'nama_lembaga_yang_kemitraan',
        'bentuk_kemitraan',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

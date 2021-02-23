<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkes extends Model
{
    //
	protected $table='kegiatan_promkes_dinkes';
    public $incrementing = false;
    protected $fillable=[
        'id',
        'periode',
        'bidang',
        'seksisubag',
        'nama_pelaksana',
        'lokasi_kegiatan',
        'sumber_dana',
        'sumber_dana_nama',
        'jumlah_biaya',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',

    ];

}
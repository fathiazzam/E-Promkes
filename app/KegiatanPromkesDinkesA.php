<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkesA extends Model
{
    //
	protected $table='kegiatan_promkes_dinkes_a';
    public $incrementing = false;
    protected $fillable=[
        'id',
        'id_header',
        'tgl_kegiatan',
        'nama',
        'sasaran',
        'jumlah_sasaran',
        'lokasi',
        'sumber_dana',
        'jumlah_dana',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];

}
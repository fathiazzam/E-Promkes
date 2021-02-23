<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkesF extends Model
{
    //
    protected $table = 'kegiatan_promkes_dinkes_f';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'id_header',
        'f1_jumlah',
        'f1_topik',
        'f2_jumlah',
        'f2_topik',
        'f3_jumlah',
        'f3_topik',
        'f4_jumlah',
        'f4_topik',
        'f5_jumlah',
        'f5_topik',
        'f6_jumlah',
        'f6_topik',
        'f7_jumlah',
        'f7_topik',
        'f8_jumlah',
        'f8_topik',
        'f9_jumlah',
        'f9_topik',
        'f10_jumlah',
        'f10_topik',
        'f11_jumlah',
        'f11_topik',
        'f12_jumlah',
        'f12_topik',
        'f13_jumlah',
        'f13_topik',
        'f14_jumlah',
        'f14_topik',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

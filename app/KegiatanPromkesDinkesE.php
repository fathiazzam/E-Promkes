<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkesE extends Model
{
    //
    protected $table = 'kegiatan_promkes_dinkes_e';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'id_header',
        'e1_jumlah_yang_ada',
        'e1_frekuensi',
        'e1_materi',
        'e2_jumlah_yang_ada',
        'e2_frekuensi',
        'e2_materi',
        'e3_jumlah_yang_ada',
        'e3_frekuensi',
        'e3_materi',
        'e4_jumlah_yang_ada',
        'e4_frekuensi',
        'e4_materi',
        'e5_jumlah_yang_ada',
        'e5_frekuensi',
        'e5_materi',
        'e6_jumlah_yang_ada',
        'e6_frekuensi',
        'e6_materi',
        'e7_jumlah_yang_ada',
        'e7_frekuensi',
        'e7_materi',
        'e8_jumlah_yang_ada',
        'e8_frekuensi',
        'e8_materi',
        'e9_jumlah_yang_ada',
        'e9_frekuensi',
        'e9_materi',
        'e10_jumlah_yang_ada',
        'e10_frekuensi',
        'e10_materi',
        'e11_jumlah_yang_ada',
        'e11_frekuensi',
        'e11_materi',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

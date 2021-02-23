<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPromkesDinkesD extends Model
{
    //
    protected $table = 'kegiatan_promkes_dinkes_d';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'id_header',
        'd1a_jumlah_yang_ada',
        'd1a_frekuensi',
        'd1a_materi',
        'd1b_jumlah_yang_ada',
        'd1b_frekuensi',
        'd1b_materi',
        'd2a_jumlah_yang_ada',
        'd2a_frekuensi',
        'd2a_materi',
        'd2b_jumlah_yang_ada',
        'd2b_frekuensi',
        'd2b_materi',
        'd3a_jumlah_yang_ada',
        'd3a_frekuensi',
        'd3a_materi',
        'd3b_jumlah_yang_ada',
        'd3b_frekuensi',
        'd3b_materi',
        'd3c_jumlah_yang_ada',
        'd3c_frekuensi',
        'd3c_materi',
        'd3d_jumlah_yang_ada',
        'd3d_frekuensi',
        'd3d_materi',
        'd3e_name',
        'd3e_jumlah_yang_ada',
        'd3e_frekuensi',
        'd3e_materi',
        'd4_jumlah_yang_ada',
        'd4_frekuensi',
        'd4_materi',
        'd5_jumlah_yang_ada',
        'd5_frekuensi',
        'd5_materi',
        'd6_jumlah_yang_ada',
        'd6_frekuensi',
        'd6_materi',
        'd7a_jumlah_yang_ada',
        'd7a_frekuensi',
        'd7a_materi',
        'd7b_jumlah_yang_ada',
        'd7b_frekuensi',
        'd7b_materi',
        'd7c_jumlah_yang_ada',
        'd7c_frekuensi',
        'd7c_materi',
        'd7d_jumlah_yang_ada',
        'd7d_frekuensi',
        'd7d_materi',
        'd7e_jumlah_yang_ada',
        'd7e_frekuensi',
        'd7e_materi',
        'd8_name',
        'd8_jumlah_yang_ada',
        'd8_frekuensi',
        'd8_materi',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

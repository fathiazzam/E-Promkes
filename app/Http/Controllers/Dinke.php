<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KegiatanPromkesDinkes;
use App\KegiatanPromkesDinkesA;
use App\KegiatanPromkesDinkesB;


class Dinke extends Controller
{
    public function index()
    {
        // $dinkesa = DB::select('select * from kegiatan_promkes_dinkes_a where id_header = id_header', ['id_header'=>'4088bb7a-f601-4b60-b92f-5ed20eea9b7']);
        // $dinkesb = DB::select('select Year(tgl_kegiatan) from kegiatan_promkes_dinkes_a' );
        // $dinkesc = DB::select('select month(tgl_kegiatan) from kegiatan_promkes_dinkes_a ' );
        // $dinkesd = DB::select('select kegiatan_promkes_dinkes_a.tgl_kegiatan, kegiatan_promkes_dinkes_a.nama, kegiatan_promkes_dinkes_a.sasaran,
        //                         kegiatan_promkes_dinkes_a.jumlah_sasaran, kegiatan_promkes_dinkes_a.lokasi,
        //                         kegiatan_promkes_dinkes_a.sumber_dana, kegiatan_promkes_dinkes_a.jumlah_dana
        //                         from kegiatan_promkes_dinkes join kegiatan_promkes_dinkes_a
        //                         on kegiatan_promkes_dinkes.periode = kegiatan_promkes_dinkes_a.id_header');
        // $dinkese = DB::select('select *
        //                         from kegiatan_promkes_dinkes join kegiatan_promkes_dinkes_a
        //                         on kegiatan_promkes_dinkes.periode = kegiatan_promkes_dinkes_a.id_header');
       //dd($dinkese);

        return view('blog.dinkesa');
    }
    public function lihat($tahun, $periode)
    {
        $toto = DB::table('kegiatan_promkes_dinkes')
                ->join('kegiatan_promkes_dinkes_b', 'kegiatan_promkes_dinkes.id', '=', 'kegiatan_promkes_dinkes_b.id_header')
                ->select('kegiatan_promkes_dinkes.*', 'kegiatan_promkes_dinkes_b.*')
                ->whereYear('periode', $tahun)
                ->whereMonth('periode', date("m", strtotime(strval($periode))))
                ->get();
         return view('blog.dinkesb',['toto'=>$toto,'periode'=>$periode,'tahun'=>$tahun]);  
    }
    public function pilih_periode($tahun,$periode)
    {
      $data = DB::table('kegiatan_promkes_dinkes')
            ->join('kegiatan_promkes_dinkes_a', 'kegiatan_promkes_dinkes.id', '=', 'kegiatan_promkes_dinkes_a.id_header')
            ->select('kegiatan_promkes_dinkes.*', 'kegiatan_promkes_dinkes_a.*')
            ->whereYear('periode', $tahun)
            ->whereMonth('periode', date("m", strtotime(strval($periode))))
            ->get();
      return view('blog.dinkesa',['data'=>$data,'periode'=>$periode,'tahun'=>$tahun]);
    }
}

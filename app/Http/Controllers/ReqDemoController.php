<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KegiatanPromkesDinkes;
use App\KegiatanPromkesDinkesA;

class ReqDemoController extends Controller
{
    public function getData(){
        // $url = $request->url();
        // return $url;
        //$email = $request->input('mail');
        $dinkesd = DB::select('select * 
        from kegiatan_promkes_dinkes join kegiatan_promkes_dinkes_a 
        on kegiatan_promkes_dinkes.id = kegiatan_promkes_dinkes_a.id_header');
        dd($dinkesd);
        //$email = $request->mail;
    }
}

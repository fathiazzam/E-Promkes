@extends('layouts.master')

@section('content')
<h1 style="text-align:center;">REKAPITULASI HASIL KEGIATAN INTERVENSI/PENYULUHAN INDIVIDU (KONSELING) </h1><hr>
    <h3>Tahun: {{date("Y", strtotime($tahun))}} </h3>
    <h3>Bulan: {{date("Y-m", strtotime($periode))}} </h3>
    <h3>Kabupaten: Probolinggo  </h3>
    <table border="1" cellpadding="8">
        <tr>
            <th rowspan="3" bgcolor="yellow">No</th>
            <th rowspan="3" bgcolor="yellow">Nama RS</th>
            <th rowspan="3" bgcolor="yellow">Periode</th>
            <th colspan="4" bgcolor="#00ff80">KIA-KB</th>
            <th colspan="4" bgcolor="#00ff80">Gizi</th>
            <th colspan="4" bgcolor="#00ff80">Imunisasi</th>
            <th colspan="4" bgcolor="#00ff80">Penyakit Menular</th>
            <th colspan="4" bgcolor="#00ff80">Penyakit Tidak Menular</th>
            <th colspan="4" bgcolor="#00ff80">Kesehatan Lingkungan</th>
            <th colspan="4" bgcolor="#00ff80">Narkoba, Napza dan HIV-AIDS</th>
            <th colspan="4" bgcolor="#00ff80">Kesehatan Reproduksi Remaja</th>
            <th colspan="4" bgcolor="#00ff80">Kesehatan Usila</th>
            <th colspan="4" bgcolor="#00ff80">Kesehatan Gilut</th>
            <th colspan="4" bgcolor="#00ff80">Kesehatan Jiwa</th>
            <th colspan="4" bgcolor="#00ff80">Kesehatan Kerja</th>
            <th colspan="4" bgcolor="#00ff80">PHBS</th>
            <th colspan="4" bgcolor="#00ff80">Lainnya</th>
        </tr>
        <tr>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
            <th colspan="2">DI DALAM GEDUNG </th>
            <th colspan="2">DI LUAR GEDUNG</th>
        </tr>
        <tr>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
            <th>Frek</th>
            <th>∑Sasaran</th>
        </tr>
        @foreach ($toto as $dinkes)
        <tr>
            <td>1</td>
            <td>{{ $dinkes->nama_pelaksana }}</td>
            <td>{{ $dinkes->periode }}</td>
            <td>{{ $dinkes->b1_dalam_f }}</td>
            <td>{{ $dinkes->b1_dalam_jml }}</td>
            <td>{{ $dinkes->b1_luar_f }}</td>
            <td>{{ $dinkes->b1_luar_jml }}</td>
            <td>{{ $dinkes->b2_dalam_f }}</td>
            <td>{{ $dinkes->b2_dalam_jml }}</td>
            <td>{{ $dinkes->b2_luar_f }}</td>
            <td>{{ $dinkes->b2_luar_jml }}</td>
            <td>{{ $dinkes->b3_dalam_f }}</td>
            <td>{{ $dinkes->b3_dalam_jml }}</td>
            <td>{{ $dinkes->b3_luar_f }}</td>
            <td>{{ $dinkes->b3_luar_jml }}</td>
            <td>{{ $dinkes->b4_dalam_f }}</td>
            <td>{{ $dinkes->b4_dalam_jml }}</td>
            <td>{{ $dinkes->b4_luar_f }}</td>
            <td>{{ $dinkes->b4_luar_jml }}</td>
            <td>{{ $dinkes->b5_dalam_f }}</td>
            <td>{{ $dinkes->b5_dalam_jml }}</td>
            <td>{{ $dinkes->b5_luar_f }}</td>
            <td>{{ $dinkes->b5_luar_jml }}</td>
            <td>{{ $dinkes->b6_dalam_f }}</td>
            <td>{{ $dinkes->b6_dalam_jml }}</td>
            <td>{{ $dinkes->b6_luar_f }}</td>
            <td>{{ $dinkes->b6_luar_jml }}</td>
            <td>{{ $dinkes->b7_dalam_f }}</td>
            <td>{{ $dinkes->b7_dalam_jml }}</td>
            <td>{{ $dinkes->b7_luar_f }}</td>
            <td>{{ $dinkes->b7_luar_jml }}</td>
            <td>{{ $dinkes->b8_dalam_f }}</td>
            <td>{{ $dinkes->b8_dalam_jml }}</td>
            <td>{{ $dinkes->b8_luar_f }}</td>
            <td>{{ $dinkes->b8_luar_jml }}</td>
            <td>{{ $dinkes->b9_dalam_f }}</td>
            <td>{{ $dinkes->b9_dalam_jml }}</td>
            <td>{{ $dinkes->b9_luar_f }}</td>
            <td>{{ $dinkes->b9_luar_jml }}</td>
            <td>{{ $dinkes->b10_dalam_f }}</td>
            <td>{{ $dinkes->b10_dalam_jml }}</td>
            <td>{{ $dinkes->b10_luar_f }}</td>
            <td>{{ $dinkes->b10_luar_jml }}</td>
            <td>{{ $dinkes->b11_dalam_f }}</td>
            <td>{{ $dinkes->b11_dalam_jml }}</td>
            <td>{{ $dinkes->b11_luar_f }}</td>
            <td>{{ $dinkes->b11_luar_jml }}</td>
            <td>{{ $dinkes->b12_dalam_f }}</td>
            <td>{{ $dinkes->b12_dalam_jml }}</td>
            <td>{{ $dinkes->b12_luar_f }}</td>
            <td>{{ $dinkes->b12_luar_jml }}</td>
            <td>{{ $dinkes->b13_dalam_f }}</td>
            <td>{{ $dinkes->b13_dalam_jml }}</td>
            <td>{{ $dinkes->b13_luar_f }}</td>
            <td>{{ $dinkes->b13_luar_jml }}</td>
            <td>{{ $dinkes->b14_dalam_f }}</td>
            <td>{{ $dinkes->b14_dalam_jml }}</td>
            <td>{{ $dinkes->b14_luar_f }}</td>
            <td>{{ $dinkes->b14_luar_jml }}</td>
        </tr>
        @endforeach
    </table>
@endsection
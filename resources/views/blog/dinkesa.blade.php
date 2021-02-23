
@extends('layouts.master')

@section('content')

<h1>REKAPITULASI HASIL KEGIATAN PENINGKATAN KAPASITAS SDM </h1><hr>
  <h2>Tahun: {{date("Y", strtotime($tahun))}} </h2>
  <h2>Bulan: {{date("Y-m", strtotime($periode))}} </h2>

  <table border="1" cellpadding="8">
  <tr>
    <th>No</th>
    <th>Tanggal Kegiatan</th>
    <th>Nama Kegiatan</th>
    <th>Sasaran</th>
    <th>Jumlah Sasaran</th>
    <th>Lokasi</th>
    <th>Sumber Dana</th>
    <th>Jumlah Dana</th>
  </tr>

  @foreach ($data as $dinkes)
  <tr>
      <td>1</td>
      <td>{{ $dinkes->tgl_kegiatan }}</td>
      <td>{{ $dinkes->nama }}</td>
      <td>{{ $dinkes->sasaran }}</td>
      <td>{{ $dinkes->jumlah_sasaran }}</td>
      <td>{{ $dinkes->lokasi }}</td>
      <td>{{ $dinkes->sumber_dana }}</td>
      <td>{{ $dinkes->jumlah_dana }}</td>
  </tr>
  @endforeach

  </table>

  @endsection

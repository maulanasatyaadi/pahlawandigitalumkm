@extends('adminlte::page')

@section('title', 'Daftar Pendaftaran')

@section('content_header')
  <h1>Data Pendaftaran</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      <div style="overflow-x: auto;">
        <table class="table is-bordered is-hovered is-compact" style="white-space: nowrap;">
          <thead>
            <tr>
              <th>Perusahaan</th>
              <th>Email</th>
              <th>No. Telepon</th>
              <th>Alamat</th>
              <th>Website</th>
              <th>PIC</th>
              <th>Kriteria</th>
              <th>Nama Produk</th>
              <th>Usia Produk</th>
              <th>Pelanggan</th>
              <th>Sektor industri</th>
              <th>Bidang operasi produk</th>
              <th>Bidang produk lain</th>
              <th>Proposal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registrationList as $item)
                <tr>
                  <td>{{$item->title}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->address}}</td>
                  <td>{{$item->website}}</td>
                  <td>{{$item->PIC}}</td>
                  <td>{{$item->startup_criteria}}</td>
                  <td>{{$item->product_title}}</td>
                  <td>{{$item->product_age}}</td>
                  <td>{{$item->active_customer}}</td>
                  <td>{{$item->industry_sector}}</td>
                  <td>{{$item->product_operation_field}}</td>
                  <td>{{$item->other_production_operation_field}}</td>
                  <td></td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop
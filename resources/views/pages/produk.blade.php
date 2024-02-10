@extends('layouts.master')

@section('title','Produk')

@section('content')
<div class="card">
  <h5 class="card-header">
      Daftar Produk
  </h5>
  <div class="card-body">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">
      Tambah Produk
      </button>
      <table class="table table-bordered table-striped table-hover">
        <thead class="">
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga Beli</th>
          <th scope="col">Harga Jual</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
        </thead>
        <tr>
          <td>B0001</td>
          <td>Bakso</td>
          <td>Rp. 10.000</td>
          <td>Rp. 15.000</td>
          <td>50</td>
          <td class="text-center">
            <a class="btn btn-primary btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#modalEditNama1">Edit</a>
            <a class="btn btn-success btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#modalEdit1">
            Rubah Harga Jual
            </a>
          </td>
        </tr>       
      </table>
  </div>
</div>
@endsection
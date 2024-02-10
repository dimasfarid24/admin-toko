@extends('layouts.master')

@section('title', 'Transaksi Penjualan')

@section('content')

<div class="">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <h5 class="card-header">List Barang</h5>
                <div class="card-body">
                    <div class="col-sm">
                        <div class="text-center fs-4">
                                    <strong>Total Item : Rp.</strong>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover mt-3">
                            <thead class="">
                                <th scope="col">No.</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Banyak</th>
                                <th scope="col">Jumlah Harga</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tr class="table">
                                <th scope="col">1</th>
                                <th scope="col">B0001</th>
                                <th scope="col">Bakso</th>
                                <th scope="col">Rp. 15.000</th>
                                <th scope="col">1</th>
                                <th scope="col">Rp. 15.000</th>
                                <th scope="col">
                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    <a href="" class="btn btn-sm btn-success">Edit</a>
                                </th>
                            </tr>
                            <tr class="table">
                                <th scope="col">2</th>
                                <th scope="col">B0002</th>
                                <th scope="col">Mie Ayam</th>
                                <th scope="col">Rp. 30.000</th>
                                <th scope="col">2</th>
                                <th scope="col">Rp. 60.000</th>
                                <th scope="col">
                                  <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                  <a href="" class="btn btn-sm btn-success">Edit</a>
                                </th>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="sticky-top">
            {{-- Card Tambah List Barang --}}
            <div class="card">
              <h5 class="card-header">Tambahkan Barang</h5>
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">
                      <div class="col-sm-8">
                          <label for="" class="">Barang</label>
                          <select name="barang" class="col-sm form-control">
                              <option selected></option>
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                          </select>
                      </div>
                      <div class="col-sm-4">
                          <label for="" class="">Jumlah</label>
                          <input type="number" class="col-sm form-control" name="banyak">
                      </div>
                      <div class="col-sm-12 text-end">
                          <button class="btn btn-primary btn-sm mt-3" type="submit" name="tambahBarang">Tambah</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
            {{-- Card Form Pembayaran --}}
            <div class="card">
              <h5 class="card-header">Pembayaran</h5>
              <div class="card-body">
                <form action="" method="post" id="paymentForm">
                  <div class="row">
                      <div class="col-sm-12 mb-2">
                          <label for="">Total Harga</label>
                          <input type="number" class="form-control" id="total" name="total" value="" disabled>
                      </div>
                      <div class="col-sm-12">
                          <div class="row">
                              <div class="col-sm-8">
                                  <label for="bayar">Bayar</label>
                                  <input type="number" name="bayar" id="bayar" value="0" class="form-control" required>
                              </div>
                              <div class="col-sm-4">
                                  <label for="diskon">Diskon (%)</label>
                                  <input type="number" name="diskon" id="diskon" value="0" class="form-control" required>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12 mt-3">
                          <h3 class="text-center">Pembayaran</h3>
                          <div>
                              <h5 class="" id="potongan"></h5>
                          </div>
                          <div>
                              <h5 class="" id="hasil"></h5>
                          </div>
                          <div>
                              <h5 class="" id="majer"></h5>
                          </div>
                          <div>
                              <h5 class="" id="kembali"></h5>
                          </div>
                          
                      </div>
                      <div class="col-sm-10 mt-3">
                          <button type="button" name="cekPay" class="btn btn-primary btn-sm" onclick="hitungPembayaran()">Hitung Pembayaran</button>
                      </div>
                      <div class="col-sm-2 mt-3">
                          <button type="submit" name="pay"  class="btn btn-success btn-sm">Bayar</button>
                      </div>
                  </div>
                </form>
                <script>
                  function hitungPembayaran() {
                      // Dapatkan nilai total dan diskon dari formulir
                      var total = parseFloat(document.getElementById('total').value);
                      var bayar = parseFloat(document.getElementById('bayar').value);
                      var discount = parseFloat(document.getElementById('diskon').value);
                      // Hitung hasil pembayaran setelah diskon
                      var totalDiskon = total * discount/100;
                      var paymentResult = total - totalDiskon;
                      var totalKembalian = bayar - paymentResult;
                      // Tampilkan hasil pembayaran pada elemen HTML
                      var majer = bayar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                      var potongan = totalDiskon.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                      var pembayaran = paymentResult.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                      var kembalian = totalKembalian.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                      document.getElementById('hasil').innerHTML = "Total Belanja : Rp. " + pembayaran;
                      document.getElementById('majer').innerHTML = "Total Bayar : Rp. " + majer;
                      document.getElementById('kembali').innerHTML = "Total Kembali : Rp. " + kembalian;
                      document.getElementById('potongan').innerHTML = "Total Diskon : Rp. " + potongan;
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
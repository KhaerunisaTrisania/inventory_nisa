@extends('layouts.app2') 
 {{-- untuk mengambil tampilan yg ada di folder layout file app --}}

 {{-- untuk menampilkan array --}}
@section('content') 
<a class="btn btn-success mt-3" href="/barang/add">Tambah Transaksi</a>
<table class="table mt-3">
  <thead class="bg-dark text-light">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    @php
    $i=1;
      @endphp
      @foreach($data as $datas)
        <tr class="text-center">
            <th>{{$i}}</th>
            <td>{{$datas['code']}}</td>
            <td>{{$datas['name']}}</td>
            <td>Rp.{{$datas['price']}}</td>
            <td>{{$datas['qty']}}</td>
        </tr>
       @php $i++; @endphp
    @endforeach

   
  </tbody>
</table>
@endsection

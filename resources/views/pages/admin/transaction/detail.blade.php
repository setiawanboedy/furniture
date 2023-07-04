@extends('layouts.admin')
@section('title','Admin - Edit Transaksi')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content"style="margin-left:-60px">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->user->name }}</h1>
      </div>

      <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                     <tr>
                        <th>ID</th>
                        <th>Gambar</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                    </tr>
                    @foreach($item->details as $detail)
                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>
                                <img src="{{Storage::url($detail->image)}}" alt="" style="width: 150px; height:150px" class="img-thumbnail">
                            </td>
                            <td>{{ $detail->name }}</td>
                            <td>{{ $detail->price }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>{{ $detail->total }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

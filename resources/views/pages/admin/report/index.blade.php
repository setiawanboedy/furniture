@extends('layouts.admin')
@section('title', 'Admin - Produk')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content" style="margin-left:-60px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Ke Suplier</h1>
            <a href="{{ route('suplier-admin.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fa fa-plus fa-sm text-white-50"></i> Kirim Laporan
            </a>
        </div>

        <div class="card shadow">
            <div class="card card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Suplier</th>
                            <th>Tanggal</th>
                            <th>Catatan</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($supliers as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user_suplier->name }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>{{ $item->note }}</td>
                                <td>
                                    <a href="{{Storage::url($item->file)}}" class="btn btn-info">Unduh Laporan</a>
                                </td>
                                <td>
                                    <a href="{{ route('suplier-admin.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <form action="{{route('suplier-admin.destroy', $item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <!-- /.container-fluid -->



@endsection

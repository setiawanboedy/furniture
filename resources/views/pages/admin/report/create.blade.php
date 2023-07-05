@extends('layouts.admin')
@section('title','Admin - Tambah Mebel')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content" style="margin-left:-60px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kirim Laporan</h1>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{route('suplier-admin.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="suplier_id">Nama Suplier</label>
                        <select name="suplier_id" required class="form-control">
                            <option value="">Pilih Suplier</option>
                            @foreach ($userSupliers as $suplier)
                            <option value="{{$suplier->id}}">
                                {{$suplier->name}}
                            </option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="note">Catatan</label>
                        <textarea name="note" rows="5" class="d-block w-100 form-control">{{old('note')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Upload File</label>
                        <input type="file" name="file" placeholder="File Laporan" class="form-control" value="{{old('file')}}">
                    </div>


                    <button class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

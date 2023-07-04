@extends('layouts.admin')
@section('title', 'Tambah Gambar Mebel')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content"style="margin-left:-60px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Gambar Mebel</h1>

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
                <form action="{{route('gallery.store')}}" method="post", enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_id">Produk Mebel</label>
                        <select name="product_id" required class="form-control">
                            <option value="">Pilih Mebel</option>
                            @foreach ($products as $product)
                            <option value="{{$product->id}}">
                                {{$product->name}}
                            </option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" placeholder="Image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@extends('layouts.admin')
@section('title', 'Admin - Tambah Mebel')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content" style="margin-left:-60px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Mebel</h1>

        </div>

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
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <label for="product_id">Tambah Kategori</label>
                    <div class="row">

                        <div class="col">
                            <input type="text" class="form-control mb-lg-3" name="category" placeholder="Kategori"
                                value="{{ old('category') }}">
                        </div>
                        <div class="col col-lg-auto">
                            <button class="btn btn-info">Tambah</button>
                        </div>

                    </div>
                </form>
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input type="text" class="form-control" name="name" placeholder="Name"
                            value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" name="price" placeholder="Harga" class="form-control"
                            value="{{ old('price') }}">
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select name="category" required class="form-control">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->category }}">
                                    {{ $category->category }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" placeholder="Image" class="form-control"
                            value="{{ old('image') }}">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" rows="10" class="d-block w-100 form-control">{{ old('desc') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

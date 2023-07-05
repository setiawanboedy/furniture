@extends('layouts.admin')
@section('title','Admin - Edit Mebel')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content"style="margin-left:-60px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Mebel {{$item->title}}</h1>

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
                <form action="{{route('product.update', $item->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input type="text" class="form-control" name="name" placeholder="Toko" value="{{$item->name}}">
                    </div>

                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" name="price" placeholder="Harga" value="{{$item->price}}">

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
                        <input type="file" name="image" placeholder="Gambar" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" rows="10" class="d-block w-100 form-control">{{$item->desc}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

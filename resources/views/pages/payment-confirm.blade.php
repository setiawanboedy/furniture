@extends('layouts.app')
@section('title', 'Upload Bukti Pembayaran')
@section('content')
    <div class="h-25"></div>
    <div class="col text-center">
        <h4>Selangkah lagi nih!</h4>
        <h5>Barang ini akan menjadi milik Anda</h5>

        <div class="file-upload">
            <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                    <h3>Upload bukti pembayaran</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                    <a onclick="removeUpload()" href="#" style="text-decoration: underline; color: #333333;">Upload
                        ulang
                    </a>
                </div>
            </div>
        </div>

        <Button class="btn"style="background-color: #333333; color: white;">Kirim Bukti</Button>
    </div>
    <div class="h-25"></div>

@endsection

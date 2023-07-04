@extends('layouts.app')
@section('title', 'Upload Bukti Pembayaran')
@section('content')
    <div class="h-25"></div>
    <div class="col text-center">
        <h4>Selangkah lagi nih!</h4>
        <h5>Barang ini akan menjadi milik Anda</h5>

        <form action="{{route('payment.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="file-upload">
                <div class="image-upload-wrap">
                    <input class="file-upload-input" name="prove" type='file' onchange="readURL(this);" accept="image/*" />
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
            <input type="hidden" name="trans_id" value="{{$trans_id}}">
            <Button class="btn" style="background-color: #333333; color: white;">Kirim Bukti</Button>
        </form>
    </div>
    <div class="h-25"></div>

@endsection

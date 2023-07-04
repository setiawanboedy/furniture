@extends('layouts.app')
@section('title', 'Review Mebel')

@section('content')

<div class="container section-success mt-100" style="max-width: 650px; margin-bottom: 150px;">
    <div class="col text-center">
        <h1>Selamat! Pembelian Berhasil</h1>
        <p>
            Silahkan menunggu, barang akan segera diantarkan ke alamat Anda <br>
            mohon berikan feedback untuk layanan lebih baik :)
        </p>

        {{-- <h6 class="d-flex justify-content-start mt-4">Informasi Perjalanan</h6> --}}


        <div class="text-center">
            <form action="{{route('review.store')}}" method="POST">
                @csrf
                <div class="d-flex justify-content-center">
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class="full"
                            for="star5" title="Awesome - 5 stars"></label>

                        <input type="radio" id="star4" name="rating" value="4" /><label class="full"
                            for="star4" title="Pretty good - 4 stars"></label>

                        <input type="radio" id="star3" name="rating" value="3" /><label class="full"
                            for="star3" title="Meh - 3 stars"></label>

                        <input type="radio" id="star2" name="rating" value="2" /><label class="full"
                            for="star2" title="Kinda bad - 2 stars"></label>

                        <input type="radio" id="star1" name="rating" value="1" /><label class="full"
                            for="star1" title="Sucks big time - 1 star"></label>

                        <input type="radio" class="reset-option" name="rating" value="reset" />
                    </fieldset>
                </div>

                <div class="d-flex justify-content-start">
                    <label for="about">Apa yang membuatmu puas?</label>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <textarea name="comment" rows="6" class="d-block w50 form-control"></textarea>
                </div>
                <input type="hidden" name="product_id" value="{{$product_id}}">
                <button class="btn btn-home-page mt-3 px-5">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection

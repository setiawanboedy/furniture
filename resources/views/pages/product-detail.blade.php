@extends('layouts.app')
@section('title', $product->name)
@section('content')

    <div style="min-height: 8em"></div>
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-20 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $product->name }}
            </span>
        </div>
    </div>


    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-35 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="{{ Storage::url($product->image) }}">
                                    <div class="wrap-pic-w pos-relative">
                                        <div style="height: 40em; width: 100%;">
                                            <img style="object-fit: cover;" class="d-block w-100 h-100 img-fluid"
                                                src="{{ Storage::url($product->image) }}" alt="IMG-PRODUCT">
                                        </div>

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                            href="{{ Storage::url($product->image) }}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                @foreach ($product->product_galleries as $item)
                                    <div class="item-slick3" data-thumb="{{ Storage::url($item->image) }}">
                                        <div class="wrap-pic-w pos-relative">
                                            <div style="height: 40em; width: 100%;">
                                                <img style="object-fit: cover;" class="d-block w-100 h-100 img-fluid"
                                                    src="{{ Storage::url($item->image) }}" alt="IMG-PRODUCT">
                                            </div>

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                href="{{ Storage::url($item->image) }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $product->name }}
                        </h4>

                        <span class="mtext-106 cl2">
                            {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{ $product->desc }}
                        </p>

                        <!--  -->
                        <div class="p-t-33">


                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data"
                                        class="flex justify-end">
                                        @csrf
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                id="qty" name="quantity" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>


                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ $product->image }}" name="image">

                                        <button type="submit"
                                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-10 trans-04 js-addcart-detail mt-lg-4">
                                            <i class="fa fa-shopping-cart pr-2" aria-hidden="true"></i> Keranjang
                                        </button>
                                    </form>


                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#"
                                    class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
                                    data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Ulasan ({{$product->ratings->count()}})</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->


                        <!-- - -->
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <!-- Review -->
                                        @forelse ($product->ratings as $rating)
                                        <div class="flex-w flex-t p-b-68">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                <img src="https://ui-avatars.com/api/?name={{$rating->username}}" alt="AVATAR">
                                            </div>

                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-17">
                                                    <span class="mtext-107 cl2 p-r-20">
                                                        {{$rating->username}}
                                                    </span>

                                                    @php
                                                        $res_rating = 5 - $rating->rating;
                                                    @endphp

                                                    <span class="fs-18 cl11">
                                                        @for ($i = 0; $i < $rating->rating; $i++)
                                                        <i class="zmdi zmdi-star"></i>
                                                        @endfor
                                                        @for ($i = 0; $i < $res_rating; $i++)
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        @endfor

                                                    </span>
                                                </div>

                                                <p class="stext-102 cl6">
                                                    {{$rating->comment}}
                                                </p>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="text-center">
                                            <h5>Belum ada ulasan</h5>
                                        </div>
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

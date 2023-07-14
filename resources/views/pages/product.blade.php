@extends('layouts.app')

@section('title')
    Produk Kekalik Mebel
@endsection

@section('content')
    <div style="min-height: 8em"></div>
    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <h4>Mebel Kualitas Terbaik</h4>
            <div class="flex-w flex-sb-m p-b-20">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Semua
                    </button>

                    @foreach ($categories as $item)
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$item->category}}">
                        {{$item->category}}
                    </button>
                    @endforeach

                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $0.00 - $50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $50.00 - $100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $100.00 - $150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $150.00 - $200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        $200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                @forelse ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->category}}">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 product-size">
                                <div class="image-wrapper">
                                    <img style="object-fit: cover;" class="d-block w-100 h-100 img-fluid"
                                        src="{{ Storage::url($product->image) }}" alt="IMG-PRODUCT">
                                </div>

                                <a href="{{ route('detail', $product->slug) }}"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    Lihat
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a style="font-weight: bold" class=" stext-105 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $product->name }}
                                    </a>
                                    @php
                                        $total = count($product->ratings);
                                        $sum = $product->ratings->sum('rating');
                                        $stars = ceil($total > 0 ? $sum / $total : 0);
                                        $remainder = $total > 0 ? $sum / $total : 0;
                                        if ($remainder != 0) {

                                            $stars_outlined = 5 - $stars-1;
                                        }else {
                                            $stars_outlined = 5 - $stars;
                                        }
                                    @endphp
                                    <span class="fs-18 cl11">
                                        @for ($i = 0; $i < $stars; $i++)
                                        <i class="zmdi zmdi-star"></i>
                                        @endfor
                                        @if ($remainder !== 0)
                                        <i class="zmdi zmdi-star-half"></i>
                                        @endif
                                        @for ($i = 0; $i < $stars_outlined; $i++)
                                        <i class="zmdi zmdi-star-outline"></i>
                                        @endfor
                                    </span>
                                    <span class="stext-105 cl3">
                                        {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04"
                                            src="frontend/images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                            src="frontend/images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="text-center">
                        <p>Tidak ada data</p>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center mt-lg-4">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

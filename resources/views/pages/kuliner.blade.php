@extends('layouts.app')

@section('title')
    Makan - Nisa Mebel product
@endsection

@section('content')
<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Mana nih tempat yang kamu suka?</h1>
                    <p>Yuk, dicek tempat makan populer, favoritnya foodies lokal, dan penawaran terbaik kami ada disini!</p>
                </div>
            </div>

        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @forelse ($items as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="{{route('product-detail', $item->id)}}"><img class="img-fluid" src="{{Storage::url($item->image)}}" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{$item->status}}</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"><span class="fa fa-star" style="color: orange;"></span> 4.5</div>
                        </div>
                        <div class="p-4 pb-0">
                            <a class="d-block h5 mb-2">{{$item->name}}</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->address}}</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-table text-primary me-2"></i>{{$item->table}} Meja</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-home text-primary me-2"></i>{{$item->room}} Ruangan</small>
                        </div>
                    </div>
                    </div>
                    @empty
                        <div class="text-lg-center">
                            <h5>Tidak ada tempat makan</h5>
                        </div>
                    @endforelse


                </div>
            </div>

        </div>
    </div>
</div>
<!-- Property List End -->
@endsection

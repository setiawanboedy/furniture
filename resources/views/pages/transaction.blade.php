@extends('layouts.app')
@section('title', 'Makan - Pemesanan')

@section('content')
<div style="min-height: 8em"></div>
    <div class="container " >

        <div class="row" >
            <div class="d-flex justify-content-center mb-50 mx-5">

                <div class="card card-body mb-3">
                    <div
                        class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                        <div class="mr-2 mb-3 mb-lg-0">

                            <img src="https://i.imgur.com/5Aqgz7o.jpg" width="150" height="150" alt="">

                        </div>

                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold">
                                <a href="#" data-abc="true">Apple iPhone XR (Red, 128 GB)</a>
                            </h6>

                            <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Phones</a>
                                </li>
                                <li class="list-inline-item"><a href="#" class="text-muted"
                                        data-abc="true">Mobiles</a></li>
                            </ul>

                            <p class="mb-3">128 GB ROM | 15.49 cm (6.1 inch) Display 12MP Rear Camera | 7MP Front Camera
                                A12 Bionic Chip Processor | Gorilla Glass with high quality display </p>

                            <ul class="list-inline list-inline-dotted mb-0">
                                <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile
                                        point</a></li>
                                <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                            </ul>
                        </div>

                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                            <h3 class="mb-0 font-weight-semibold">$459.99</h3>

                            <div>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                            </div>

                            <div class="text-muted">1985 reviews</div>

                            <button type="button" class="btn btn-warning mt-4 text-white"><i
                                    class="icon-cart-add mr-2"></i> Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

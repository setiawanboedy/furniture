@extends('layouts.app')
@section('title', 'Makan - Pemesanan')

@section('content')
    <div style="min-height: 8em"></div>
    <div class="container mb-50 mx-5">

        <div class="row">
            <div class="col">

                @forelse ($transactions as $item)
                    <div class="card card-body mt-3">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left">
                            <div class="mr-2 mb-3 mb-lg-0">

                                <img src="{{ Storage::url($item->image) }}" width="150" height="150" alt="">

                            </div>

                            <div class="media-body">
                                <h5 class="media-title font-weight-semibold">
                                    {{ $item->name }}
                                </h5>

                                <p class="mb-3 mt-2">{{ $item->quantity }} barang x
                                    {{ 'Rp ' . number_format($item->price, 0, ',', '.') }}</p>

                            </div>
                            <div class="col text-left m-auto ">
                                <h5 class="font-weight-semibold">
                                    Status
                                </h5>
                                @if ($item->transaction->transaction_status == "SUCCESS")
                                <a class="btn btn-success font-weight-semibold text-white">
                                    {{$item->transaction->transaction_status}}
                                </a>
                                @elseif ($item->transaction->transaction_status == "PENDING")
                                <a class="btn btn-warning font-weight-semibold text-white">
                                    {{$item->transaction->transaction_status}}
                                </a>
                                @else
                                <a class="btn btn-danger font-weight-semibold text-white">
                                    {{$item->transaction->transaction_status}}
                                </a>
                                @endif

                            </div>
                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                <h6 class="mb-0">Total Belanja </h6>
                                <h6 class="py-2">{{ 'Rp ' . number_format($item->total, 0, ',', '.') }}</h6>
                                <a href="{{route('review.index', $item->product_id)}}"  class="btn btn-success mt-4 px-3 text-white">
                                    Ulas</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <h5>Tidak ada transaksi</h5>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection

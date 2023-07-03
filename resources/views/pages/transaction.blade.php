@extends('layouts.detail')
@section('title', 'Makan - Pemesanan')

@section('content')

<div class="mt-lg-5">

    @auth
    @forelse ($transactions as $item)
    <div class="card rounded-3 mb-2 container">
        <div class="card-body p-2">
            <nav class=" navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-collapse">
                        <ul
                            class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between">
                            <li class="nav-item">
                                <div class="h1">{{$item->booking_number}}</div>
                            </li>
                            <li
                                class="nav-item ms-lg-4 mt-2">
                                <p>Tanggal {{$item->date}}, jam {{$item->time}}</p>
                            </li>
                        </ul>
                        @if ($item->transaction_status == "SUCCESS")
                        <span
                        class="btn-success rounded-3 py-1 px-3 " id="status">
                            {{$item->transaction_status}}
                        </span>
                        @elseif ($item->transaction_status == "PENDING")
                        <span
                        class="btn-warning rounded-3 py-1 px-3 " id="status">
                            {{$item->transaction_status}}
                        </span>
                        @else
                        <span
                        class="btn-danger rounded-3 py-1 px-3 " id="status">
                            {{$item->transaction_status}}
                        </span>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
    @empty
    <div class="container">Tidak ada histori pemesanan</div>
    @endforelse
    @endauth

</div>
@endsection

@extends('layouts.app')

@section('title')
    Keranjang - Kekalik Mebel
@endsection

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
                Keranjang Belanja
            </span>
        </div>
    </div>

    <!-- Shoping Cart -->
    <div class="bg0 p-t-25 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">

                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="wrap-table-shopping-cart">

                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Produk</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Harga</th>
                                    <th class="column-4">Jumlah</th>
                                    <th class="column-5">Total</th>
                                </tr>

                                @forelse ($cartItems as $item)
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="how-itemcart1">
                                                <img src="{{ Storage::url($item->image) }}" alt="IMG">
                                            </div>
                                        </td>
                                        <td class="column-2">{{ $item->name }}</td>
                                        <td class="column-3">{{ 'Rp ' . number_format($item->price, 0, ',', '.') }}</td>
                                        <td class="column-4">
                                            <form action="{{ route('cart.update') }}" method="POST"
                                                enctype="multipart/form-data" class="flex justify-end">
                                                @csrf
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <input type="hidden" value="{{ $item->product_id }}" name="product_id">
                                                    <input type="hidden" value="{{ $item->name }}" name="name">
                                                    <input type="hidden" value="{{ $item->price }}" name="price">
                                                    <input type="hidden" value="{{ $item->image }}" name="image">
                                                    <button class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </button>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                        name="quantity" value="{{ $item->quantity }}">

                                                    <button class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </button>
                                                </div>

                                            </form>
                                        </td>
                                        <td class="column-5">{{ 'Rp ' . number_format($item->total, 0, ',', '.') }}</td>
                                        <td class="column-6">

                                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                                @csrf
                                                @method('delete')

                                                <button
                                                    class="px-3 py-1 text-black bg-gray-800 shadow rounded-full how-itemcart1">x</button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-5">
                                            Keranjang Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Total Belanja
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-3">
                        </div>
                        <form action="{{ route('cart.checkout') }}" method="post">
                            @csrf
                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Kirim ke:
                                    </span>
                                </div>

                                <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                    <p class="stext-111 cl6 p-t-2">
                                        Lengkapi alamat anda untuk memudahkan pengiriman.
                                    </p>

                                    <div class="p-t-15">


                                        <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                            <select class="js-select2" name="province">
                                                <option value="">Provinsi</option>
                                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                <option value="Bima">Bima</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state"
                                                placeholder="Kecamatan">
                                        </div>

                                        <div class="bor8 bg0 m-b-22">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number"
                                                name="postcode" placeholder="Kode Pos">
                                        </div>
                                    </div>
                                </div>

                                <label for="pay_method">Pilih Metode Transaksi</label>
                                <select name="pay_method" required class="form-control">
                                    <option value="1">COD</option>
                                    <option value="2">Transfer</option>
                                </select>

                            </div>

                            <div class="flex-w flex-t p-t-27 p-b-33">

                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>
                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        {{ 'Rp ' . number_format($total, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $total }}" name="transaction_total">
                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Checkout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

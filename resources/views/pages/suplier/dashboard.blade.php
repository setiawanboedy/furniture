@extends('layouts.suplier')

@section('title', 'Suplier - Nisa Mebel')

@section('content')
    <!-- Begin Page Content -->
    <div class="content content-right" style="margin-left:-60px">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-home"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"></span></div>
                                        <div class="stat-heading">Restoran</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"></span></div>
                                        <div class="stat-heading">Pemesan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"></span></div>
                                        <div class="stat-heading">Reservasi Berhasil</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"></span></div>
                                        <div class="stat-heading">Reservasi Pending</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->
            <!--  Traffic  -->
            <div class="card shadow">
                <div class="card card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pemesan</th>
                                <th>Tanggal</th>
                                <th>Alamat</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($items as $item) --}}
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            {{-- @empty --}}
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            {{-- @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>

            <!--  /Traffic -->
            <div class="clearfix"></div>

        <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
<!-- /.container-fluid -->
@endsection


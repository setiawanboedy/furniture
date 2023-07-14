@extends('layouts.suplier')

@section('title', 'Suplier - Kekalik Mebel')

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
                            <div class="h4">Laporan Suplier</div>
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
                                <th>Suplier</th>
                                <th>Tanggal</th>
                                <th>Catatan</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($supliers as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_suplier->name }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>
                                        <a href="{{Storage::url($item->file)}}" class="btn btn-info">Unduh Laporan</a>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
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


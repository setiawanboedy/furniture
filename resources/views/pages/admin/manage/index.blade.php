@extends('layouts.admin')
@section('title', 'Admin - Pengaturan Role')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid content" style="margin-left:-60px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Managemen Role</h1>
        </div>

        <div class="card shadow">
            <div class="card card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Roles</th>
                            <th>Ubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <form action="{{ route('manage.update') }}" method="post" class="d-inline">
                                @csrf
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>

                                    <td>
                                        <select name="role" required class="form-control">
                                            <option value="">{{ $user->roles }}</option>
                                            <option value="ADMIN">
                                                ADMIN
                                            </option>
                                            <option value="SUPLIER">
                                                SUPLIER
                                            </option>

                                        </select>
                                    </td>
                                    <td>

                                        <input type="hidden" name="userId" value="{{$user->id}}">
                                        <button class="btn btn-info">
                                            Ubah
                                        </button>

                                    </td>
                                </tr>
                            </form>
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
    </div>
    <!-- /.container-fluid -->

@endsection

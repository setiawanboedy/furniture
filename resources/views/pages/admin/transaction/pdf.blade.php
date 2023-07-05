<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        p {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <center>
            <h4>Laporan Transaksi</h4>
        </center>
        <br />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pemesan</th>
                    <th>Tanggal</th>
                    <th>Alamat</th>
                    <th>Total</th>
                    <th>Bukti</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ 'Rp ' . number_format($item->transaction_total, 0, ',', '.') }}</td>
                        <td>
                            @if ($item->prove != null)
                                <img src="{{ public_path($item->prove) }}" alt="" style="width: 80px; height:80px"
                                    class="img-thumbnail">
                            @else
                                Belum
                            @endif

                        </td>
                        <td>{{ $item->transaction_status }}</td>
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
</body>

</html>

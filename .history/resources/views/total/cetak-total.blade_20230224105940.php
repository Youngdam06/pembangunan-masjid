<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pertanggal</title>
</head>
<body>
    <div class="form-group">
        @foreach ($tot as $item)
        <p align="center"><b>Laporan Saldo Akhir Pertanggal {{ $tglawal }}</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width : 95%;">
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Nominal</th>
            </tr>

            {{-- @foreach ($tot as $item) --}}
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->saldo }}</td>
            @endforeach
        </table>
    </div>
</body>
</html>
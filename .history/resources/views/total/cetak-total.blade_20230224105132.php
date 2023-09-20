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
        <p align="center"><b>Laporan Saldo Akhir Pertanggal</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width : 95%;">
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                {{-- <th>Tanggal</th> --}}
                <th>Nominal</th>
            </tr>

            {{-- @foreach ($tot as $item) --}}
                <td>1</td>
                <td>Pungut Uang</td>
                <td>90.000.000</td>
                
            {{-- @endforeach --}}
        </table>
    </div>
</body>
</html>
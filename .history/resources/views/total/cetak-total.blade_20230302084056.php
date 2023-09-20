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
            <p align="center"><b>Laporan Saldo Perminggu tanggal : {{ $tanggal }}</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width : 95%;" id="example">
                <h3>Saldo Akhir Jumat Lalu:  {{ $tabung->tabungan }}</h3>
                <h3>Tabel Pemasukan</h3>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                </tr>
                @foreach ($tot as $total)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $total->keterangan }}</td>
                    <td>{{ $total->tanggal }}</td>
                    <td>{{ $total->saldo }}</td>
                </tr>
                @endforeach
            </table>
            <h3>Jumlah total pemasukan :  @currency ( $tot->sum('saldo'))</h3>

            <table class="static" align="center" rules="all" border="1px" style="width : 95%;" id="example">
                <h3>Tabel Pengeluaran</h3>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                </tr>
                
                    @foreach ($tat as $total)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $total->keterangan }}</td>
                        <td>{{ $total->tanggal }}</td>
                        <td>{{ $total->nominal }}</td>
                    </tr>
                    @endforeach
            </table>
            <h3>Jumlah total pengeluaran :  @currency ($tat->sum('nominal')) </h3>
            <h3>Jumlah total Akhir :  @currency ($tabung->sum('tabungan') + $tot->sum('saldo') - $tat->sum('nominal'))  </h3>
            
            
        
        </div>
    </body>

</html>
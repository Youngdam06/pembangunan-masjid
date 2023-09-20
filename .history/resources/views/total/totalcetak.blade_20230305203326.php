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
            <p align="center"><b>Laporan Saldo Per Jum'at Tanggal :  {{ $tanggal->tanggal }} </b></p>
            <table class="static" align="center" rules="all" border="1px" style="width : 95%;" id="example">
                <h3 class="align-middle text-center text-sm">Saldo Akhir Jumat Lalu: @currency ($tabung->uang)  </h3>
                <h3 class="align-middle text-center text-sm">Tabel Pemasukan :  </h3>
                <tr>
                  <th>No</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Nominal</th>
                </tr>
                @foreach ($tot as $total)
                <tr>
                  <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                  <td class="align-middle text-center text-sm">{{ $total->keterangan }}</td>
                  <td class="align-middle text-center text-sm">{{ $total->tanggal }}</td>
                  <td class="align-middle text-center text-sm"> @currency($total->saldo)</td>
              </tr>
                @endforeach
            </table>
            <h3 class="align-middle text-center text-sm">Jumlah total pemasukan :  @currency ( $tot->sum('saldo'))</h3>


            <table class="static" align="center" rules="all" border="1px" style="width : 95%;" id="example">
              <h3 class="align-middle text-center text-sm">Tabel Pengeluaran :  </h3>
                <tr>
                  <th>No</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Nominal</th>
                </tr>
                @foreach ($tat as $total)
                <tr>
                    <td class="align-middle text-center text-sm">{{ $loop->iteration  }}</td>
                    <td class="align-middle text-center text-sm">{{ $total->keterangan }}</td>
                    <td class="align-middle text-center text-sm">{{ $total->tanggal }}</td>
                    <td class="align-middle text-center text-sm"> @currency($total->nominal)</td>
                </tr>
                @endforeach
                
            </table>

            <h3 class="align-middle text-center text-sm">Jumlah total pengeluaran :  @currency ($tat->sum('nominal')) </h3>
            <h3 class="align-middle text-center text-sm">Saldo Akhir :  @currency ($tabung->sum('uang') + $tot->sum('saldo') - $tat->sum('nominal'))  </h3>
            <button class="btn btn-primary align-middle text-center text-sm"" onclick="window.print()">Print</button>
  


</main>
    </body>

</html>
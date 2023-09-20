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
                <h3>Saldo Akhir Jumat Lalu: @currency ($tabung->uang)  </h3>
                <h3>Tabel Pemasukan : </h3>
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
                <h3>Tabel Pengeluaran : </h3>
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
            <h3>Saldo Akhir :  @currency ($tabung->sum('uang') + $tot->sum('saldo') - $tat->sum('nominal'))  </h3>

            <button class="btn btn-primary align-right" onclick="window.print()">Print</button>
            
            
        
        </div>
        
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Laporan Pengeluaran</h6>
          </div>
        </div>
      
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <tbody>
              
              @if ($message = Session::get('success'))
                <div class="alert alert-primary text-white">
                    <p>{{ $message }}</p>
                </div>
              @endif
              
              <table class="table table-bordered">
                <tr>
                    <th class="align-middle text-center text-sm">No</th>
                    <th class="align-middle text-center text-sm">Keterangan</th>
                    <th class="align-middle text-center text-sm">Tanggal</th>
                    <th class="align-middle text-center text-sm">Nominal</th>
                    <th class="align-middle text-center text-sm" width="300px">Action</th>
                </tr>
                @foreach ($tat as $total)
                <tr>
                    <td class="align-middle text-center text-sm">{{ ++$i }}</td>
                    <td class="align-middle text-center text-sm">{{ $pengeluaran->keterangan }}</td>
                    <td class="align-middle text-center text-sm">{{ $pengeluaran->tanggal }}</td>
                    <td class="align-middle text-center text-sm"> @currency($pengeluaran->nominal)</td>
                </tr>
                @endforeach
              </table>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  


</main>
    </body>

</html>
    <div class="row">
        <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Laporan Pemasukan</h6>
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
                    </tr>
                    <tr>
                    @foreach ($pemasukans as $pemasukan)
                        <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                        <td class="align-middle text-center text-sm">{{ $pemasukan->keterangan }}</td>
                        <td class="align-middle text-center text-sm">{{ $pemasukan->tanggal }}</td>
                        <td class="align-middle text-center text-sm"> @currency($pemasukan->saldo)</td>
                    </tr>
                    @endforeach
                    aaaaaaaaaaaaaaaaaaaaaaaaaaa
                </table>
                <h4 class="align-middle text-center text-sm" >Total Pemasukan Ada: @currency($pemasukans->sum('saldo'))</h4>
                <div class="row text-center">
                    {!! $pemasukans->links() !!}
                </div>
            {{-- the most loneliest day of my life
            saya disini ingin menjelaskan bagaimana --}}
                </tbody>
                </table>
                
            </div>
            </div>
        </div>
        </div>
    </div>
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
                    </tr>
                    @foreach ($pengeluarans as $pengeluaran)
                    <tr>
                        <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                        <td class="align-middle text-center text-sm">{{ $pengeluaran->keterangan }}</td>
                        <td class="align-middle text-center text-sm">{{ $pengeluaran->tanggal }}</td>
                        <td class="align-middle text-center text-sm"> @currency($pengeluaran->nominal)</td>
                    </tr>
                    @endforeach
                </table>
                <h4 class="align-middle text-center text-sm" >Total Pengeluaran: @currency($pengeluarans->sum('nominal'))</h4>
                <div class="row text-center">
                    {!! $pengeluarans->links() !!}
                </div>
                </tbody>
                </table>
                
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    


    </main>
    </main>

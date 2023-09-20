
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Laporan Pemasukan</h6>
          </div>
        </div>
       
        <div class="card-body">
          @foreach ($pemasukans as $pemasukan)
            <div class="mt-3 mb-3 text-center"><h3>Tanggal</h3></div>
              <div class="mt-2 mb-2 text-center">
              <h4>{{$pemasukan -> $tanggal}}</h4>
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
                  <th class="align-middle text-center text-sm">Tanggal</th>
                </tr>
                <tr>
                  {{-- <td class="align-middle text-center text-sm">{{ $pemasukan->tanggal }}</td> --}}
                </tr>
                <tr>
                    <th class="align-middle text-center text-sm">No</th>
                    <th class="align-middle text-center text-sm">Keterangan</th>
                    <th class="align-middle text-center text-sm">Nominal</th>
                    <th class="align-middle text-center text-sm" width="300px">Action</th>
                </tr>
                <tr>
                    <td class="align-middle text-center text-sm">{{ ++$i }}</td>
                    <td class="align-middle text-center text-sm">{{ $pemasukan->keterangan }}</td>
                    <td class="align-middle text-center text-sm"> @currency($pemasukan->saldo)</td>
                    <td>
                        <form action="{{ route('pemasukans.destroy',$pemasukan->id) }}" method="POST">
                          <div class="align-middle text-center text-sm">
                            <a class="btn btn-primary" href="{{ route('pemasukans.edit',$pemasukan->id) }}">Edit</a>
                          
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </form>
                    </td>
                </tr>
                @endforeach
              </table>
              <h4 class="align-middle text-center text-sm" >Total Pemasukan: @currency($pemasukans->sum('saldo'))</h4>
              <div class="row text-center">
                {!! $pemasukans->links() !!}
              </div>
        
              <div class="container">
                <a class="btn bg-primary btn-dark" href="{{ route('pemasukans.create') }}">Tambah data</a>
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

  
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Projects table</h6>
          </div>
        </div>
       
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <tbody>
              
              @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
              @endif
              
              <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Saldo</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($keuangans as $keuangan)
                <tr>
                    <td class="align-middle text-center text-sm">{{ ++$i }}</td>
                    <td class="align-middle text-center text-sm">{{ $keuangan->keterangan }}</td>
                    <td class="align-middle text-center text-sm">{{ $keuangan->tanggal }}</td>
                    <td class="align-middle text-center text-sm">{{ $keuangan->saldo }}</td>
                    <td>
                        <form action="{{ route('keuangans.destroy',$keuangan->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('keuangans.edit',$keuangan->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </table>
              <div class="row text-center">
                {!! $keuangans->links() !!}
              </div>
              <div class="container">
                <a class="btn bg-primary btn-dark" href="{{ route('keuangans.create') }}">Tamabah data</a>
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
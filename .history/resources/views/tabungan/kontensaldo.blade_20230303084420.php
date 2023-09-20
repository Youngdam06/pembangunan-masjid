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
                    <th class="align-middle text-center text-sm">Tanggal</th>
                    <th class="align-middle text-center text-sm">Sisa Saldo</th>
                    {{-- <th class="align-middle text-center text-sm">Tanggal</th> --}}
                    <th class="align-middle text-center text-sm" width="350px">Action</th>
                    </tr>
                    <tr>
                    @foreach ($tabungan as $item)
                        <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                        <td class="align-middle text-center text-sm">{{ $item->tanggal }}</td>
                        <td class="align-middle text-center text-sm">{{ $item->uang }}</td>
                        <td>
                            <form action="{{ route('tabungans.destroy',$item->id) }}" method="POST">
                            <div class="align-middle text-center text-sm">
                                <a class="btn btn-primary" href="{{ route('tabungans.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                            </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <div class="container">
                        <a class="btn bg-primary btn-dark" href="{{ route('tabungans.create') }}">Tambah data</a>
                    </div>
                </table>
                {{-- <h4 class="align-middle text-center text-sm" >Total Pemasukan Ada: @currency($pemasukans->sum('saldo'))</h4> --}}
                <div class="row text-center">
                    {!! $tabungan->links() !!}
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

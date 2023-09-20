
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Cari Data Tanggal : </h6>
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

            <div class="card-body col-sm">
              <div class="input-group mb-3">
                <label for="label"> </label><input type="date" name="tgl" id="tgl" class="datepicker">
              
              </div>
            </div>
            <div class="input-group mb-3">
              <a href="#" onclick="this.href='/tampil-data-pertanggal/'+document.getElementById('tgl').value " target="_blank" class="btn btn-primary col-md-12"><i class="fas fa-print"></i>      Tampilkan Laporan Data</a>
            </div>

           
            <thead>
              <tr>

              </tr>
            </thead>
            @foreach ($tampil as $item)
            <tbody>
              <tr>
                <td class="align-middle text-center text-sm">{{ $item->tanggal }}</td>
                <td class="align-middle text-center text-sm">{{ $item->uang }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



</main>
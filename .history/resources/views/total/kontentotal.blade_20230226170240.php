
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Total Akhir</h6>
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

            <div class="card-body">
              <div class="input-group mb-3">
                <label for="label">Cari tanggal</label>
                <input type="date" name="tgl" id="tgl" class="form-control">
              </div>
            </div>
            <div class="input-group mb-3">
              <a href="#" onclick="this.href='/tampil-data-pertanggal-pemasukan/'+document.getElementById('tgl').value + " target="_blank" class="btn btn-primary col-md-12"><i class="fas fa-print"></i>      Tampilkan Laporan Data</a></div>
    
            {{-- <h6 class="align-middle text-center text-sm">Tanggal {{ $tanggals }}</h6>

        </div>

            
            <table class="table table-bordered">
              <tr>
                  <th class="align-middle text-center text-sm">No</th>
                  <th class="align-middle  text-sm">Keterangan</th>
                  <th class="align-middle text-sm">Total</th>
              </tr>
        
              <tr>
                  <td class="align-middle text-center text-sm">1</td>
                  <td class="align-middle text-sm">Total Jumat Lalu :</td>
                  <td class="align-middle  text-sm">@currency($saldo)</td>
              </tr>

              <tr>
                <td class="align-middle text-center text-sm">2</td>
                <td class="align-middle  text-sm">Total Saldo Pemasukan :</td>
                <td class="align-middle  text-sm">@currency($saldo)</td>
              </tr>

              <tr>
                <td class="align-middle text-center text-sm">3</td>
                <td class="align-middle  text-sm">Total Saldo Pengeluaran :</td>
                <td class="align-middle  text-sm">@currency($nominal)</td>
              </tr>
              <tr>
                <td class="align-middle text-center text-sm">4</td>
                <td class="align-middle  text-sm">Saldo Akhir :</td>
                <td class="align-middle  text-sm">@currency($total)</td>
              </tr>
      
            </table>   
            <div class="row text-center">
              

            </div>
      
            <div class="container">
  
  
            </div>
            </tbody>
          </table> --}}
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>



</main>
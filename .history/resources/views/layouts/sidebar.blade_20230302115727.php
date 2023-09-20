
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/" target="_blank">
        <img src="/assets/img/icon1.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">MASJID AL-ISTIQOMAH</span>
      </a>
    </div>
  
  
    <hr class="horizontal light mt-0 mb-2">
  
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
  
        
          
  
            
  
            
    
  <li class="nav-item">
    <a class="nav-link text-white " href="/">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
      
      <span class="nav-link-text ms-1">Menu</span>
    </a>
  </li>
  {{-- dropdown link halaman pemasukan data --}}
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
      <span class="nav-link-text ms-1">Laporan</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <li><a class="dropdown-item" href="{{ route('pemasukans.index') }}">Laporan Pemasukan</a></li>
      <li><a class="dropdown-item" href="{{ route('pengeluarans.index') }}">Laporan Pengeluaran</a></li>
      <li><a class="dropdown-item" href="{{ route('saldos.index') }}">Update saldo</a></li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="/total">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">table_view</i>
        </div>
      
      <span class="nav-link-text ms-1">Laporan Total</span>
    </a>
  </li>
  
  
    
  <li class="nav-item">
    <a class="nav-link text-white " href="keuangans/laporanoperasional">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">receipt_long</i>
        </div>
      
      <span class="nav-link-text ms-1">Laporan Operasional</span>
    </a>
  </li>

    
  </aside>
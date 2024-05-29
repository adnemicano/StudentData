<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">STUDENT<sup>DATA</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    {{-- digunakan ketika / jika yg login adalah admin maka menampilkan menu ini  --}}
    @if(Auth::user()->role == 'admin' )
    <!-- Divider -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
    {{-- route ('user.dashboard') di ambil dari aliasnya ->name('admin.dashboard')-> --}}
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.siswa') }}">
        <i class ="fas fa-fw- fa-users"></i>
    <span>Siswa-admin</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.kelas') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Kelas-admin</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Pelanggaran-admin</span></a>
    </li>
    @endif

    {{-- login sebagai user / siswa yg mana alamat url /siswa-user --}}
  @if(Auth::user()->role == 'user' )

 <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.dashboard') }}">
            {{-- route ('user.dashboard') di ambil dari aliasnya ->name('user.dashboard')-> --}}
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

  <hr class="sidebar-divider my-0">

   <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.siswa-user') }}">
        <i class ="fas fa-fw- fa-users"></i>
    <span>Siswa</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.kelas-user') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Kelas</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/pelanggaran-user">
        <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Pelanggaran</span></a>
    </li>
 @endif

    <!-- Divider -->


    <hr class="sidebar-divider my-0">



</ul>

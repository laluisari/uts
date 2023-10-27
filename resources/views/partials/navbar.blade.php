<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">PPDB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('calon_siswa/create') ? 'active' : '' }}" href="{{ route('calon_siswa.create') }}">form daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kelulusan.informasiKelulusan') ? 'active' : '' }}" href="{{ route('kelulusan.informasiKelulusan') }}">Daftar Kelulusan</a>
          </li>
         
        
        </ul>
        
      </div>
    </div>
  </nav>
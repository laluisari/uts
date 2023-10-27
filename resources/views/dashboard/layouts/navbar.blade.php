<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Lebbok</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  {{-- search --}}
  <form action="/dashboard/posts" class="d-flex w-100" role="search">
    @if (request('author')) 
    <input type="hidden" name="author" value="{{ request('author') }}">           
    @endif
    @if (request('category'))
    <input type="hidden" name="category" value="{{ request('category') }}">            
    @endif
  <input class="form-control form-control-dark  rounded-0 border-0" type="text" placeholder="Search" aria-label="Search" name="search">
  </form>
  {{-- end search --}}
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="POST">
      @csrf
      <button class="nav-link px-3 bg-dark border-0" type="submit">logout <span data-feather="log-out"></span> </button>
  
      </form>
    </div>
  </div>
</header>
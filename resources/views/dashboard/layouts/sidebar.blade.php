<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">

          
          <li class="nav-item"> 
            <a class="nav-link {{ Request::is('kelulusan.informasiKelulusan') ? 'active' : '' }}" href="{{ route('kelulusan.informasiKelulusan') }}">
              <span data-feather="file" class="align-text-bottom"></span>
              kelulusan
            </a>
          </li>
         
    
        </ul>

      
      </div>
    </nav>

   
  </div>
</div>
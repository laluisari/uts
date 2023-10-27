@extends('layouts.main')
@section('container')
<!-- CSS -->
<style> 

    /* Animasi pada Jumbotron */
    .jumbotron {
       position: relative;
       overflow: hidden;
  
      
    }

    .jumbotron::before {
       content: "";
       position: absolute;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       background-image: linear-gradient(to right, rgba(245, 245, 245, 0), rgba(245, 245, 245, 1), rgba(245, 245, 245, 0));
       z-index: 2;
       animation: jumbotronAnimation 4s infinite;
    }

    @keyframes jumbotronAnimation {
       from {
          transform: translateX(-50%);
       }
       to {
          transform: translateX(150%);
       }
    }

    .jumbotron h1 {
       position: relative;
       z-index: 3;
    }
 </style>


<div class="container" style="height: 100px" >
      
   <!-- Jumbotron -->
   <div class="jumbotron jumbotron-fluid">
    <div class="container">
       <h1 class="display-4">Selamat Datang di Sekolah Kami</h1>
       <p class="lead">Kami membuka pendaftaran peserta didik baru</p>
       <div class="mt-5">

          <a href="/calon_siswa/create" class="btn btn-primary" style="padding-top: 10px">Isi Formulir Pendaftaran</a>
       </div>
       
    </div>
   </div>
    
</div>
   
     
@endsection
  
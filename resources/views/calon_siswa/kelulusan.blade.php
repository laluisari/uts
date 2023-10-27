@extends('layouts.main')
@section('container')
{{-- <h1 class="text-center my-3">Halo : {{ auth()->user()->name }}</h1> --}}
@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
    {{session('success')}}
    </div>
 @endif

    <div class="container">
        <div class="row " >
            <div class="table-responsive col-md-12">
            @if($siswaLulus->count())
           
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No. Pendaftar</th>
                        <th scope="col">Nama</th> 
                        <th scope="col">Alamat</th> 
                        <th scope="col">Asal Sekolah</th>                       
                        <th scope="col">Nilai Bahasa Indonesia</th>
                        <th scope="col">Nilai IPA</th> 
                        <th scope="col">Nilai Matematika</th> 
                        <th scope="col">Total</th> 
                      

                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswaLulus as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->id }}</td>
                          <td>{{ $data->nama }}</td>
                          <td>{{ $data->alamat }}</td>
                          <td>{{ $data->asal_sekolah }}</td>
                          <td>{{ $data->agama_id }}</td>
                          <td>{{ $data->nilai_ind }}</td>
                          <td>{{ $data->nilai_ipa }}</td>
                          <td>{{ $data->nilai_mtk }}</td>
                          <td>{{ $data->totalRataRata }}</td>
                         
                         

                        </tr>       
                    
                    @endforeach
              </tbody>    
        </table>
                    
                
            @else
                <p>daftar siswa belum tersedia</p>
            @endif
        </div>

    </div>

  
</div>

@endsection
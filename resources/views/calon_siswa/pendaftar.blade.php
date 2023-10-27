@extends('dashboard.layouts.main')
@section('container')
{{-- <h1 class="text-center my-3">Halo : {{ auth()->user()->name }}</h1> --}}
@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
    {{session('success')}}
    </div>
 @endif

    <a href="{{ route('calon_siswa.create') }}"><button class="btn btn-success my-3">tambah data</button></a>
    


    <div class="container">
        <div class="row " >
            <div class="table-responsive col-md-12">
            @if($calonSiswa->count())
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No. Pendaftar</th>
                        <th scope="col">Nama</th> 
                        <th scope="col">Alamat</th> 
                        <th scope="col">Tanggal Lahir</th> 
                        <th scope="col">Jenis Kelamin</th> 
                        <th scope="col">Asal Sekolah</th> 
                        <th scope="col">Agama ID</th> 
                        <th scope="col">Nilai Bahasa Indonesia</th>
                        <th scope="col">Nilai IPA</th> 
                        <th scope="col">Nilai Matematika</th> 
                      

                        <th scope="col" class="text-center">Option</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($calonSiswa as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->id }}</td>
                          <td>{{ $data->nama }}</td>
                          <td>{{ $data->alamat }}</td>
                          <td>{{ $data->tgl_lahir }}</td>
                          <td>{{ $data->jenis_kelamin }}</td>
                          <td>{{ $data->asal_sekolah }}</td>
                          <td>{{ $data->agama_id }}</td>
                          <td>{{ $data->nilai_ind }}</td>
                          <td>{{ $data->nilai_ipa }}</td>
                          <td>{{ $data->nilai_mtk }}</td>
                         
                          <td class="text-center mx-2">
                             <a href="{{ route('calon_siswa.edit', $data->id) }}" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
                             <form action="{{ route('calon_siswa.destroy', $data->id) }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0"><span data-feather="trash-2" class="align-text-bottom"></span></button>
                             </form>
                          </td>

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
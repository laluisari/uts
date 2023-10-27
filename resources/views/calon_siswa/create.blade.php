@extends('layouts.main')

@section('container')
<div class="container">
  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="mt-2">Form Pendaftar</h3>
  </div>
  <div class="row my-3">
    <form action="{{ route('calon_siswa.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
        @error('alamat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required autofocus value="{{ old('tgl_lahir') }}">
        @error('tgl_lahir')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example" name="jenis_kelamin">
          <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
          <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        @error('jenis_kelamin')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" required autofocus value="{{ old('asal_sekolah') }}">
        @error('asal_sekolah')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="agama_id" class="form-label">Agama</label>
        <select class="form-select @error('agama_id') is-invalid @enderror" aria-label="Default select example" name="agama_id">
          <option value="1" {{ old('agama_id') == 1 ? 'selected' : '' }}>Islam</option>
          <option value="2" {{ old('agama_id') == 2 ? 'selected' : '' }}>Protestan</option>
          <option value="3" {{ old('agama_id') == 3 ? 'selected' : '' }}>Katholik</option>
          <option value="4" {{ old('agama_id') == 4 ? 'selected' : '' }}>Lainnya</option>
        </select>
        @error('agama_id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nilai_ind" class="form-label">Nilai Bahasa Indonesia</label>
        <input type="text" class="form-control @error('nilai_ind') is-invalid @enderror" id="nilai_ind" name="nilai_ind" required autofocus value="{{ old('nilai_ind') }}">
        @error('nilai_ind')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nilai_ipa" class="form-label">Nilai IPA</label>
        <input type="text" class="form-control @error('nilai_ipa') is-invalid @enderror" id="nilai_ipa" name="nilai_ipa" required autofocus value="{{ old('nilai_ipa') }}">
        @error('nilai_ipa')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nilai_mtk" class="form-label">Nilai Matematika</label>
        <input type="text" class="form-control @error('nilai_mtk') is-invalid @enderror" id="nilai_mtk" name="nilai_mtk" required autofocus value="{{ old('nilai_mtk') }}">
        @error('nilai_mtk')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
    </form>
  </div>
</div>
@endsection

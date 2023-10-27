<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use Illuminate\Http\Request;

class CalonSiswaController extends Controller
{

    //check daftar pendaftar
    public function pendaftar()
    {
        return view('calon_siswa.pendaftar', ['calonSiswa' => CalonSiswa::all()]);
    }

    //penyimpanan data
    public function create()
    {
        return view('calon_siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'agama_id' => 'required',
            'nilai_ind' => 'required',
            'nilai_ipa' => 'required',
            'nilai_mtk' => 'required'
        ]);

        // Simpan data ke dalam tabel "calon_siswas"
        CalonSiswa::create($request->all());

        return redirect()->route('calon_siswa.create')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('calon_siswa.edit', compact('calonSiswa'));
    }

    public function update(Request $request, CalonSiswa $calonSiswa)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'agama_id' => 'required',
            'nilai_ind' => 'required',
            'nilai_ipa' => 'required',
            'nilai_mtk' => 'required'
        ]);
        // Perbarui data "CalonSiswa"

        $calonSiswa->update($request->all());

        return redirect()->route('calon_siswa.pendaftar')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(CalonSiswa $calonSiswa)
    {
        $calonSiswa->delete();
        return redirect()->route('calon_siswa.pendaftar')->with('success', 'Data berhasil dihapus.');
    }

    public function informasiKelulusan()
    {
        // Ambil semua data siswa
        $siswaLulus = CalonSiswa::all()->filter(function ($calonSiswa) {
            // Hitung rata-rata nilai untuk setiap siswa
            $rataRata = ($calonSiswa->nilai_ind + $calonSiswa->nilai_ipa + $calonSiswa->nilai_mtk) / 3;

            // Filter siswa yang lulus (dengan nilai di atas 15)
            return $rataRata > 15;
        });

        // Hitung rata-rata nilai siswa yang lulus
        $totalRataRata = 0;
        if ($siswaLulus->count() > 0) {
            $totalRataRata = $siswaLulus->sum(function ($calonSiswa) {
                return ($calonSiswa->nilai_ind + $calonSiswa->nilai_ipa + $calonSiswa->nilai_mtk) / 3;
            });
            $totalRataRata = $totalRataRata / $siswaLulus->count();
        }

        // Urutkan siswa lulus berdasarkan rata-rata nilai, dari yang tertinggi ke terendah
        $siswaLulus = $siswaLulus->sortByDesc(function ($calonSiswa) {
            return ($calonSiswa->nilai_ind + $calonSiswa->nilai_ipa + $calonSiswa->nilai_mtk) / 3;
        });

        return view('calon_siswa.kelulusan', [
            'siswaLulus' => $siswaLulus,
            'totalRataRata' => $totalRataRata,
        ]);
    }
}

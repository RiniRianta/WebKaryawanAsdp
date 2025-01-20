<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
class KaryawanController extends Controller
{
    // Method untuk menampilkan data karyawan
    public function tampil()
    {
        $karyawan = Karyawan::get(); // Mengambil semua data dari tabel
        return view('karyawan.tampil', compact('karyawan')); // Mengirimkan data ke view
    }

    // Method untuk menampilkan form tambah karyawan
    public function tambah()
    {
        return view('karyawan.tambah');
    }

    // Method untuk menyimpan data karyawan
    public function submit(Request $request)
{
    try {
        // Buat instance Karyawan dan simpan data
        $karyawan = new Karyawan();
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_hp = $request->no_hp;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->hobi = $request->hobi;

        $karyawan->save();

        // Redirect dengan pesan sukses
        return redirect()->route('karyawan.tampil')->with('status', 'Data berhasil ditambahkan.');
    } catch (\Exception $e) {
        // Tangkap error dan redirect dengan pesan error
        return redirect()->route('karyawan.tampil')->with('status', 'Data gagal ditambahkan. ' . $e->getMessage());
    }
}

    // Method untuk menampilkan form edit data karyawan
    public function edit($id)
{
    $karyawan = Karyawan::findOrFail($id); // Mengambil data berdasarkan ID
    return view('karyawan.edit', compact('karyawan')); // Mengirimkan data ke view
}

    // Method untuk memperbarui data karyawan
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id); // Mengambil data karyawan berdasarkan ID
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_hp = $request->no_hp;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->hobi = $request->hobi;
        $karyawan->save(); // Menyimpan perubahan data

        try {
            $karyawan = Karyawan::findOrFail($id);
            $karyawan->update($request->all());
            return redirect('/karyawan')->with('status', 'Data berhasil diUpdate.');
        } catch (\Exception $e) {
            return redirect('/karyawan')->with('status', 'Data gagal diUpdate.');
        }
    }
    public function delete($id)
    {
        $karyawan = Karyawan::findOrFail($id); // Pastikan data ditemukan
        $karyawan->delete(); // Hapus data
        return redirect()->route('karyawan.tampil')->with('success', 'Data karyawan berhasil dihapus.');

    }
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|digits_between:16,18', // Validasi NIK
            'jenis_kelamin' => 'required', // Validasi jenis kelamin
        ]);

        try {
            // Simpan data
            Karyawan::create([
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);

            // Kirim pesan sukses
            return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Kirim pesan gagal
            return redirect()->back()->with('error', 'Data gagal ditambahkan: ' . $e->getMessage());
        }
    }
}
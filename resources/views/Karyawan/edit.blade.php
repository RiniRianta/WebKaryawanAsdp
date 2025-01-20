@extends('layout')

@section('konten')

<h4>Edit Karyawan</h4>
<form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" class="row g-3">
    @csrf
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" name="nik" value="{{$karyawan->nik}}" id="nik" class="form-control">
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" {{$karyawan->nama}} id="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" {{$karyawan->alamat}} id="alamat" class="form-control">
    </div>

    <div class="mb-3">
        <label for="no_hp" class="form-label">No Hp</label>
        <input type="number" name="no_hp" {{$karyawan->no_hp}} id="no_hp" class="form-control">
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="hobi" class="form-label">Hobi</label>
        <input type="text" name="hobi" {{$karyawan->hobi}} id="hobi" class="form-control">
    </div>

    <button class="btn btn-primary">Edit</button>
</form>

@endsection

@extends('layout')

@section('konten')
@if (session('status'))
    <div id="status-alert" class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<script>
    // Menghilangkan pesan setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('status-alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); // Hapus elemen setelah transisi selesai
        }
    }, 3000); // 3000 ms = 3 detik
</script>

<div class="d-flex">

    <h4 class="text-center mt-5">List Karyawan</h4>
    <div class="ms-auto">
        <a class="btn btn-success mt-5" href="{{ route('karyawan.tambah') }}">Tambah Karyawan</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($karyawan->toArray() as $no => $data)
<tr>
    <td>{{ $no + 1 }}</td> <!-- Nomor urut -->
    <td>{{ $data['nik'] }}</td> <!-- Gunakan array akses dengan string key -->
    <td>{{ $data['Nama'] }}</td>
            <td>{{ $data['Alamat'] }}</td>
            <td>{{ $data['No_Hp'] }}</td>
            <td>{{ $data['Jenis_Kelamin'] }}</td>
            <td>{{ $data['Hobi'] }}</td>
    <td>
        <a href="{{ route('karyawan.edit', $data['id']) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('karyawan.delete', $data['id']) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
        
    </td>

    
</tr>

@endforeach

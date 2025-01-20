<!DOCTYPE html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const alert = document.getElementById('status-alert');
        if (alert) {
            setTimeout(() => {
                alert.style.display = 'none'; // Sembunyikan elemen alert
            }, 3000); // 3000 ms = 3 detik
        }
    });
</script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Karyawan Asdp</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    
    <h1 class="text-center mt-3">CRUD KARYAWAN DENGAN MENGGUNAKAN LARAVEL</h1>

    <div class="mt-3 container" >
    @yield('konten')
    </div>
    
</body>
</html>
# Jobsheet-5: Blade View, Web Templating(AdminLTE), Datatables

- **Nama**: Taufik Dimas Edystara
- **NIM**: 2341720062
- **Kelas**: TI-2A

## Praktikum 1 - Integrasi Laravel dengan AdminLte3

- **Menginstal AdminLTE**

  ```bash
  composer require jeroennoten/laravel-adminlte
  ```

  ![alt text](img/1.1.png)

  ```bash
  php artisan adminlte:install
  ```

  ![alt text](img/1.2.png)

- **Konsigurasi AdminLTE**

  - `resources/views/layouts/app.blade.php`:
    ```php
    @extends('adminlte::page')
    @section('title', 'Dashboard')
    @section('content')
        <h1>Selamat datang di Dashboard</h1>
    @endsection
    ```
  - `resources/views/welcome.blade.php`:

    ```php
    @extends('layout.app')

    {{-- Customize layout sections --}}
    @section('subtitle', 'Welcome')
    @section('content_header_title', 'Home')
    @section('content_header_subtitle', 'Welcome')

    {{-- Content body: main page content --}}
    @section('content_body')
        <p>Welcome to this beautiful admin panel.</p>
    @stop

    {{-- Push extra CSS --}}
    @push('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @endpush

    {{-- Push extra scripts --}}
    @push('js')
        <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    @endpush
    ```

- **Output Pratikum 1**

![alt text](img/1.3.png)

---

## Praktikum 2 - Integrasi dengan DataTables

# Jobsheet- 10: RESTFUL API

- **Nama**: Taufik Dimas Edystara
- **NIM**: 2341720062
- **Kelas**: TI-2A

## Praktikum 1 – Membuat RESTful API Register

1. Mengunduh dan menginstal aplikasi Postman dari postman.
2. Menginstal library JWT Auth versi 2.1.1:
   ```bash
   composer require tymon/jwt-auth:2.1.1
   ```
3. Publish konfigurasi JWT dan generate secret key:
   ```bash
   php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
   php artisan jwt:secret
   ```
4. Modifikasi `config/auth.php` untuk guard API
5. Update kode pada model User.php agar implementasi JWT berjalan
6. Membuat controller untuk Register API:
   ```bash
   php artisan make:controller Api/RegisterController
   ```
7. Modifikasi `routes/api.php` dan uji coba endpoint POST /api/register menggunakan Postman

📌 **File yang diubah/dibuat:**

- `config/jwt.php`
- `.env` (JWT_SECRET)
- `config/auth.php`
- `app/Models/User.php`
- `app/Http/Controllers/Api/RegisterController.php`
- `routes/api.php`

Hasil:<br>

> Kita dapat membuat user baru melalui endpoint register dengan request body form-data melalui Postman.

### Berikut jawaban untuk Kalimat yang ditandai merah pada Jobsheet:

11. Melakukan uji coba REST API melalui aplikasi Postman.
    Buka aplikasi Postman, isi URL `localhost/public/api/register` serta method
    POST. Klik Send. <br>
    ![img](img/1.1.png1.png)<br>

12. Coba masukkan data. Klik tab Body dan pilih form-data. Isikan key sesuai dengan kolom data, serta isikan data registrasi sesuai keinginan.<br>
    ![img](img/1.2.png)<br>

## Praktikum 2 – Membuat RESTful API untuk Login:

1. Membuat controller baru untuk proses login:
   ```bash
   php artisan make:controller Api/LoginController
   ```
2. Tambahkan endpoint login (POST /api/login) dan cek data user login menggunakan token (GET /api/user)
3. Uji coba login dengan Postman, dan salin token untuk digunakan dalam endpoint berikutnya

📌 **File yang diubah/dibuat:**

- `app/Http/Controllers/Api/LoginController.php`
- `routes/api.php`

Hasil:<br>

> Setelah login, akan didapatkan token JWT yang bisa digunakan untuk mengakses data user yang sedang login.

### Berikut jawaban untuk Kalimat yang ditandai merah pada Jobsheet:

4. Melakukan uji coba REST API melalui aplikasi Postman. Buka
   aplikasi Postman, isi URL `localhost/public/api/login` serta method POST.
   Klik Send.<br>
   ![img](img/2.1.png)<br>

5. isikan username dan password sesuai dengan data user yang ada pada database. Klik tab Body dan pilih form-data. Isikan key sesuai dengan kolom data, serta isikan data user. Klik tombol Send, jika berhasil maka akan keluar tampilan seperti berikut. Copy nilai token yang diperoleh pada saat login karena akan diperlukan pada saat logout.<br>
   ![img](img/2.2.png)<br>

6. Lakukan percobaan yang untuk data yang salah dan berikan screenshoot hasil percobaan Anda. <br>
   ![img](img/2.3.png)<br>

7. Coba kembali melakukan login dengan data yang benar. Sekarang mari kita coba menampilkan data user yang sedang login menggunakan URL `localhost/public/api/user` dan method GET. Jelaskan hasil dari percobaan tersebut. <br>
   ![img](img/2.4.png)<br>
   Jawab: Dari Screenshoot diatas kita bisa melihat data user yang sedang login dengan URL menggunakan `localhost/PWL_POS/public/api/user`, caranya di Tab bagian Auth, ubah Auth type nya ke Bearer Token, lalu masukkan Token yang sudah kita dapatkan Saat login pada poin No 5.

## Praktikum 3 – Membuat RESTful API untuk Logout:

1. Tambahkan konfigurasi berikut ke .env:
   ```bash
   JWT_SHOW_BLACKLIST_EXCEPTION=true
   ```
2. Buat controller logout:
   ```bash
   php artisan make:controller Api/LogoutController
   ```
3. Modifikasi endpoint POST /api/logout untuk logout user dengan validasi token

📌 **File yang diubah/dibuat:**

- `.env`
- `app/Http/Controllers/Api/LogoutController.php`
- `routes/api.php`

Hasil:<br>

> User dapat logout dari aplikasi dengan menyertakan token pada request. Token menjadi tidak valid setelah logout.

### Berikut jawaban untuk Kalimat yang ditandai merah pada Jobsheet:

6. Isi token pada tab Authorization, pilih Type yaitu Bearer Token. Isikan token yang didapat saat login. Jika sudah klik Send. <br>
   ![img](img/3.1.png)<br>

## Praktikum 4 – CRUD RESTful API (Tabel m_level):

1. Membuat controller CRUD untuk m_level:
   ```bash
   php artisan make:controller Api/LevelController
   ```
2. Menambahkan semua endpoint CRUD (`GET`, `POST`, `PUT`, `DELETE`) pada `routes/api.php`
3. Uji coba semua operasi CRUD dengan menggunakan Postman

📌 **File yang diubah/dibuat:**

- `app/Http/Controllers/Api/LevelController.php`
- `routes/api.php`

Hasil:<br>

> Kita dapat menampilkan, menambah, mengedit, menampilkan detail, dan menghapus data level melalui API yang telah dibuat.

### Berikut jawaban untuk Kalimat yang ditandai merah pada Jobsheet:

4.  Lakukan uji coba API mulai dari fungsi untuk menampilkan data. Gunakan URL: `localhost/public/api/levels` dan method GET. <br>
    ![img](img/41.png)<br> > Penjelasan: Route GET /api/levels digunakan untuk menampilkan seluruh data level yang ada di dalam database. Method index() di dalam controller akan memanggil fungsi LevelModel::all() untuk mengambil semua data dari tabel m_level, lalu mengembalikannya dalam format JSON

5.  lakukan percobaan penambahan data dengan URL : `localhost/public/api/levels` dan method POST seperti di bawah ini.<br>
    ![img](img/4.2.png)<br> > Penjelasan: Route POST /api/levels digunakan untuk menambahkan data baru ke dalam tabel m_level. Saat request dikirim dengan method POST, method store() akan menangani data yang masuk dari request dan langsung menyimpannya ke database menggunakan LevelModel::create(). Setelah data berhasil disimpan, response berupa data yang baru dibuat dikembalikan dengan status kode 201 Created.

6.  lakukan percobaan menampilkan detail data. <br>
    ![img](img/4.3.png)<br> > Penjelasan: Route GET /api/levels/{level} digunakan untuk menampilkan detail dari satu data level berdasarkan ID yang diberikan. Method show() akan secara otomatis mencari data sesuai ID sehingga kita langsung mendapatkan objek data level yang dimaksud tanpa perlu mencarinya lagi secara manual. Objek tersebut kemudian dikembalikan dalam bentuk JSON.

7.  coba untuk melakukan edit data menggunakan `localhost/public/api/levels/{id}` dan method PUT. Isikan data yang ingin diubah pada tab Param. <br>
    ![img](img/4.4.png)<br> > Penjelasan: Route PUT /api/levels/{level} digunakan untuk mengubah atau memperbarui data level yang sudah ada. Ketika request dikirim dengan method PUT, method update() akan menangani proses update dengan menerima data dari request, lalu menerapkannya ke objek level yang dimaksud. Setelah berhasil diperbarui, data level terbaru dikembalikan sebagai response.

8.  lakukan percobaan hapus data. <br>
    ![img](img/4.5.png)<br> > Penjelasan: Route DELETE /api/levels/{level} digunakan untuk menghapus data level dari database berdasarkan ID yang dikirimkan pada URL. Method destroy() akan menerima objek level tersebut dan langsung menjalankan fungsi delete() untuk menghapusnya. Setelah penghapusan berhasil, sistem akan mengirimkan response JSON yang berisi pesan sukses dan status boolean.

## Tugas – Implementasi API CRUD untuk Tabel Lain:

### Implementasikan CRUD API pada tabel m_user, m_kategori, dan m_barang.

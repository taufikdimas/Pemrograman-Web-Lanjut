# Jobsheet 3 - MIGRATION, SEEDER, DB FAÇADE, QUERY BUILDER, dan ELOQUENT ORM

# Dokumentasi Output hasil pratikum
- ![image](https://github.com/user-attachments/assets/dd21b53d-5a65-43f2-b12d-46907955e229)
- ![image](https://github.com/user-attachments/assets/ed1ea791-b143-4c64-a290-d898fbb11834)
- ![image](https://github.com/user-attachments/assets/7ea20893-fd6c-4bbd-981d-b5e9fa64843a)
- ![image](https://github.com/user-attachments/assets/d76d515d-ea69-40d9-a3ee-c7c4e16f62c6)


## Pertanyaan Jobsheet 3
#### 1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari `APP_KEY` pada file setting `.env` Laravel?
- APP_KEY pada .env digunakan untuk enkripsi data, seperti untuk mengenkripsi session, cookie
#### 2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk `APP_KEY`?
- dapat digenerate dengan perintah:
```
php artisan key:generate
```
#### 3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?
- Pada laravel 10 memiliki 4 default file migrasi, yaitu:
  - `create_users_table.php`: untuk membuat tabel user
  - `create_password_reset_tokens_table.php`: untuk membuat tabel password_reset_tokens yang berfungsi menyimpan token reset password
  - `create_failed_jobs_table.php`: untuk membuat tabel failed_jobs yang menyimpan data pekerjaan (job) yang gagal diproses
  - `create_personal_access_tokens_table.php`: untuk membuat tabel 
#### 4. Secara default, file migrasi terdapat kode `$table->timestamps();`, apa tujuan/output dari fungsi tersebut?
- tujuan dari fungsi tersebut untuk menambahkan dua kolom timestamp ke dalam tabel, yaitu:
  - `created_at`: Menyimpan waktu ketika record pertama kali dibuat.
  - `updated_at`: Menyimpan waktu ketika record terakhir kali diubah.

#### 5. Pada File Migrasi, terdapat fungsi `$table->id();` Tipe data apa yang dihasilkan dari fungsi tersebut?
- tipe data yang dihasilkan adalah unsigned big integer
#### 6. Apa bedanya hasil migrasi pada table `m_level`, antara menggunakan `$table->id()`; dengan menggunakan `$table->id('level_id');`?
- `id();`: menghasilkan kolom primary key dengan nama kolom default yaitu id.
- `id('level_id');`: menghasilkan kolom primary key dengan nama kolom menjadi level_id

#### 7. Pada migration, Fungsi `->unique()` digunakan untuk apa?
- untuk memastikan nilai dalam kolom database tertentu tidak ada yang duplikat
#### 8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom `level_id` pada tabel `m_user` menggunakan `$tabel->unsignedBigInteger('level_id')`, sedangkan kolom `level_id` pada tabel `m_level` menggunakan `$tabel->id('level_id')`?
- pada tabel `m_user` menggunakan `$tabel->unsignedBigInteger('level_id')` karena digunakan sebagai foreign key, sedangkan pada tabel `m_level` menggunakan `$tabel->id('level_id')` karena digunakan sebagai primary key dan auto-increment
#### 9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program `Hash::make('1234');`?
- tujuan dari Class Hash adalah untuk menghasilkan password yang di-hash agar keamanannya terjaga.
- Maksud dari kode `Hash::make('1234');` adalah melakukan hashing terhadap string '1234'
#### 10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya `(?)`, apa kegunaan dari tanda tanya `(?)` tersebut?
- tanda tanya `(?)` digunakan sebagai placeholder untuk parameter binding yang berfungsi mencegah SQL injection
#### 11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode `protected $table = ‘m_user’;` dan `protected $primaryKey = ‘user_id’;`?
- tujuan penulisan kode tersebut untuk mendefinisikan nama tabel dan primary key yang digunakan
#### 12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM)? jelaskan
- Yang paling mudah digunakan adalah Eloquent ORM, karena Eloquent memetakan tabel ke dalam model sehingga menghasilkan kode yang lebih bersih dan mudah di-maintain.

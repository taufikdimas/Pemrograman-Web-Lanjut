# Jobsheet 4 - MODEL dan ELOQUENT ORM

## Dokumentasi Output hasil pratikum

> **Praktikum** **1.1** **\$fillable:**
>
> <img src="Photo/45mckzsg.png"
> style="width:6.26805in;height:2.0875in" />
>
> - Kode tersebut akan membuat record baru dengan username : manager_dua pada table user
>
> <img src="Photo/svc2ot30.png"
> style="width:6.26805in;height:1.23819in" />
>
> - Akan terjadi tampilan error karena adanya konflik antara model dan
>   controller, di mana dalam kasus ini kolom password pada model tidak
>   didefiniskan, namun pada fungsi create terdapat array yang terdapat
>   index

> **Praktikum** **2.1** **–** **Retrieving** **Single** **Models**
>
> <img src="Photo/11kqedlg.png"
> style="width:5.54861in;height:1.23819in" />
>
> - Program tersebut akan hanya mengambil data m_user untuk index ke 1
>
> <img src="Photo/jjvfh0qj.png" style="width:6.26805in;height:1.38194in" />
>
> - Ketiga syntax terbsebut akan mempunyai output yang sama yaitu akan mengprint record pertama.
>
> <img src="Photo/3tztztui.png"
> style="width:6.26805in;height:1.6993in" />
>
> - Program tersebut akan mencari id 1, jika idnya tidak ditemukan maka akan muncul halaman not found.
>
> - Akan muncul halaman error 404 karena id 21 tidak ditemukan.
>
> <img src="Photo/bi3sh23n.png"
> style="width:3.5375in;height:1.79583in" />

> **Praktikum** **2.2** **–** **Not** **Found** **Exceptions**
>
> <img src="Photo/xtox3ipm.png" style="width:4.08736in;height:1.45in" />A:
>
> <img src="Photo/32zqpxsb.png"
> style="width:3.27764in;height:1.66458in" />
>
> - Akan muncul halaman erorr 404 karena username manager9 tidak ditemukan

> **Praktikum** **2.3** **–** **Retreiving** **Aggregrates**
>
> <img src="Photo/bh2lfp1u.png"
> style="width:5.7218in;height:0.54097in" />
>
> - Akan mempunyai output dari menghitung berapa record yang mempunyai user_level 2
>
> <img src="Photo/byem1fkk.png"
>  style="width:6.26805in;height:2.74028in" />

> **Praktikum** **2.4** **–** **Retreiving** **or** **Creating** > **Models**
>
> <img src="Photo/c5avsnty.png"
> style="width:6.26805in;height:0.73819in" /> > <img src="Photo/fhia4j1w.png"
> style="width:6.26805in;height:0.91389in" />
>
> - Akan terjadi error karena
>   funsgi first tidak dapan mencari username manager dan nama Manager. Karena tidak ketemu fungsi tersebut akan menjalankan fungsi create,
>   namun karena attribute level id tidak ada value maka akan terjadi error.
>
> <img src="Photo/srvhntco.png"
>  style="width:6.26805in;height:0.92569in" />
>
> - Dan akan membuat record
>   baru dalam database
> - Tetap akan error seperti percobaan 1, namun jika kita tambahkan kode yang mendefiniskan user_level, maka tampilan akan menjadi serti ini
>
> <img src="Photo/lns3ncy1.png"
> style="width:5.91208in;height:2.0993in" /> > <img src="Photo/ljz2ohug.png"
> style="width:6.26805in;height:1.90069in" />
>
> <img src="Photo/qs1vgufa.png"
>  style="width:6.26805in;height:1.77778in" />
>
> - Akan menyimpan haris
>   kode pada Use

> **Praktikum** **2.5** **–** **Attribute** **Changes**
>
> <img src="Photo/ypd3cmiy.png"
> style="width:6.26805in;height:0.83889in" />
>
> - Ini berarti attributenya belum ada yang terganti.
>
> <img src="Photo/wfejampw.png"
> style="width:6.26805in;height:0.83611in" />
>
> - Hasil tersebut menandakan bahwa data telah pernah diubah.

> **Praktikum** **2.6** **–** **Create,** **Read,** **Update,** **Delete**
> **(CRUD)**
>
> <img src="Photo/50m4wvyg.png"
> style="width:5.46458in;height:3.32014in" />
>
> - Akan berisikan table
> - crud yang berisikan m_user
>
> <img src="Photo/glz4mv4v.png"
> style="width:6.26805in;height:2.25972in" />
>
> - Akan muncul halaman untuk mengcreate data baru untuk m_user
>
> <img src="Photo/0vypcmci.png"
> style="width:5.37569in;height:2.24653in" /><img src="Photo/zzudqzyu.png"
> style="width:6.26805in;height:1.43472in" />
>
> - Akan maka jika isisan disi dan tombol simpan diklik, maka akan menambahkan record baru
>
> <img src="Photo/4hydprgx.png"
> style="width:6.26805in;height:2.01944in" />
>
> - Halaman akan berubah menjadi halaman edit yang di mana value
>   isiannya akan sama dengan value yang kita pencet edit
>
> <img src="Photo/34h40wio.png"
> style="width:6.26805in;height:1.99097in" />
>
> - Akan mengubah value attribute untuk user_id 1 yaitu admin
>
> - kode tersebut akan berjalan ketika tombol hapus diklik, ketika
>   diklik maka akan menghapus bari yang dipencet

> **Praktikum** **2.7** **–** **Relationships**
>
> <img src="Photo/lkfvmdhk.png"
> style="width:6.26805in;height:2.52292in" />
>
> - Kode akan mengambil semua user yang mempunyai level.
>
> <img src="Photo/beykbnwx.png"
> style="width:6.26805in;height:3.43333in" />
>
> - Akan menampilkan value dari kode level dan nama level

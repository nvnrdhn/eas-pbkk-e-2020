# eas-pbkk-e-2020
Aplikasi web phalcon untuk monitoring bantuan covid-19

Dibuat oleh: Novan Ardhana - 05111740000086

## Tabel
![alt text][db_img]
- Tabel User: berisi data pengguna seperti ID User, nama, email, password. Tabel User terhubung ke Tabel Transaksi dengan relasi one-to-many (satu user bisa memiliki banyak transaksi).
- Tabel Kategori: berisi data jenis-jenis bantuan yang tersedia seperti ID Kategori, nama kategori, dll. (contoh: Bahan Makanan, Alat Kesehatan, dll.)
- Tabel Transaksi: menyimpan data transaksi seperti ID Transaksi, ID User penyumbang, tanggal transaksi, keterangan, dll.
- Tabel Bantuan: menyimpan list item yang disumbangkan pada tiap transaksi. Tabel ini memiliki atribut ID Bantuan, Nama bantuan, ID Transaksi, ID Kategori, jumlah, dan satuan. Merupakan tabel relasional many-to-many yang menghubungkan tabel Transaksi dengan tabel Kategori untuk mempermudah penyimpanan data transaksi yang memiliki lebih dari 1 Bantuan.

## View
- index/index.volt: Halaman utama
- user/login.volt: Halaman login user.
- user/register.volt: Halaman register user.
- bantuan/index.volt: Halaman utama bantuan, menampilkan tabel yang berisi seluruh bantuan. View ini juga digunakan untuk menampilkan bantuan dengan kategori yang dipilih.
- bantuan/create.volt: Halaman form untuk menambah transaksi bantuan baru.
- bantuan/details.volt Halaman yang menampilkan detail transaksi untuk bantuan yang bersangkutan.
## Controller
- IndexController:
  - indexAction: Fungsi yang otomatis dijalankan ketika pengguna membuka aplikasi. Jika pengguna yang sudah login membuka halaman index maka fungsi ini akan me-redirect pengguna agar menuju ke halaman bantuan.
- BantuanController:
  - indexAction: Fungsi ini bertugas untuk mengambil seluruh data bantuan kemudian memberikannya ke view yang bersangkutan.
  - kategoriAction: Mirip dengan indexAction, fungsi ini akan mengambil data-data bantuan dengan kategori yang dipilih. Fungsi menerima parameter ID kategori.
  - createAction: Fungsi ini bertugas untuk membuat entri transaksi baru beserta bantuan-bantuan yang diinput dengan mengambil request POST yang diberikan.
  - detailsAction: Fungsi ini bertugas untuk mengambil detail transaksi dari ID bantuan yang diberikan sebagai parameter.
- UserController:
  - loginAction: Fungsi ini bertugas untuk memeriksa kredensial yang diberikan pengguna yaitu berupa email dan password. Jika kredensial terdaftar dalam database maka fungsi akan men-set session auth berupa ID dan nama user yang bersangkutan. Kemudian fungsi akan melakukan redirect ke halaman bantuan.
  - registerAction: Fungsi ini bertugas untuk mendaftarkan user baru ke database. Fungsi ini juga akan memeriksa email yang diinput, jika sudah digunakan oleh user lain maka fungsi akan memberikan flash error. Ketika user berhasil melakukan register maka fungsi ini akan melakukan redirect ke halaman login.
  - logoutAction: Fungsi ini bertugas untuk menghapus session user.
## Model
- User: Menampung atribut-atribut pada tabel User
- Kategori: Menampung atribut-atribut pada tabel Kategori
- Transaksi: Menampung atribut-atribut pada tabel Transaksi
- Bantuan: Menampung atribut-atribut pada tabel Bantuan

[db_img]: https://raw.githubusercontent.com/nvnrdhn/eas-pbkk-e-2020/master/db_img.png "db_img"
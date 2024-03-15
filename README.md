# Latihan MVC PHP
MVC PHP
 <br>
 Link Video Tutorial : [Video](https://www.youtube.com/playlist?list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx)
 <br>

- Routing
```
http://localhost/Latihan/MVC-PHP/public/index.php?url=home/index
```

MVC (Model-View-Controller) adalah sebuah pola desain arsitektural yang digunakan dalam pengembangan perangkat lunak. Ini memisahkan elemen aplikasi ke dalam tiga komponen utama: Model, View, dan Controller. Penerapan pola MVC sangat umum dalam pengembangan web, termasuk dalam pengembangan dengan PHP.

Berikut adalah penjelasan singkat tentang setiap komponen MVC dalam konteks PHP:

1. **Model:**
   - Komponen ini bertanggung jawab untuk mengelola data dan logika bisnis aplikasi.
   - Model mewakili struktur data dan aturan bisnis aplikasi.
   - Dalam konteks pengembangan web, model sering berinteraksi dengan database untuk menyimpan dan mengambil data.
   - Contoh model dalam aplikasi PHP dapat berupa kelas-kelas PHP yang mengelola operasi database seperti mengambil, menyimpan, dan memperbarui data.

2. **View:**
   - Komponen ini bertanggung jawab untuk menampilkan data dari model kepada pengguna.
   - View mengatur tampilan antarmuka pengguna (UI) aplikasi.
   - Dalam konteks pengembangan web, view biasanya berupa file HTML atau template yang berisi markup HTML dan beberapa logika template sederhana.
   - View tidak boleh memiliki logika bisnis atau akses langsung ke database; tugasnya hanya untuk menampilkan data yang telah disediakan oleh model.

3. **Controller:**
   - Komponen ini bertanggung jawab untuk menerima input dari pengguna, memprosesnya, dan memutuskan tindakan apa yang harus dilakukan berdasarkan input tersebut.
   - Controller berfungsi sebagai perantara antara model dan view.
   - Dalam konteks pengembangan web, controller biasanya berupa skrip PHP yang mengatur alur logika aplikasi.
   - Controller mengambil data dari model, memprosesnya (jika diperlukan), dan kemudian memilih view yang sesuai untuk menampilkan respons kepada pengguna.

Dengan menggunakan pola desain MVC, pengembang dapat memisahkan logika bisnis, tampilan, dan pengaturan alur aplikasi. Ini membuat kode menjadi lebih terorganisir, mudah di-maintain, dan mudah di-skala. Dalam konteks PHP, MVC sangat umum digunakan dalam pengembangan framework seperti Laravel, CodeIgniter, dan Symfony.

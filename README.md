# Analisis Penggunaan Controller pada Web Portofolio – Laravel

Project ini merupakan web portofolio pribadi yang dibangun menggunakan framework Laravel dengan konsep MVC (Model – View – Controller). Fokus utama pada tahap ini adalah penerapan Controller untuk mengatur alur data agar struktur project menjadi lebih rapi, terorganisir, dan mudah dikembangkan.

## 1. Controller yang Digunakan
Pada project ini terdapat beberapa controller di dalam folder app/Http/Controllers, yaitu:
- HomeController.php
- PortfolioController.php

Controller tersebut berfungsi sebagai penghubung antara route (web.php) dan Blade view, serta menjadi tempat pengolahan data yang akan dikirim ke tampilan.

## 2. Fungsi Controller pada Project
Controller memiliki beberapa fungsi utama, yaitu:
1. Mengatur halaman yang akan ditampilkan
2. Mengelola data statis, seperti:
- Data diri / profil
- Data social media
- List skill
- List project
- Kontak
3. Mengirim data ke file Blade yang ada di folder resources/views

Contoh data yang dikelola di dalam Controller:

$social = [
    'github'   => 'https://github.com/nblasr',
    'linkedin' => 'https://linkedin.com/in/nblasr',
    'email'    => 'mailto:nabila@example.com'
];

$skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'];

Data di atas kemudian dikirim ke view menggunakan kode berikut:

return view('welcome', compact('social', 'skills'));

Dengan cara ini, file Blade tidak menyimpan data atau logika, melainkan hanya menampilkan data yang dikirim dari Controller.

## 3. Blade View yang Menerima Data dari Controller
Controller mengirim data ke halaman utama yaitu:
resources/views/welcome.blade.php
File tersebut kemudian memanggil beberapa section, yaitu:
- sections/hero.blade.php
- sections/about.blade.php
- sections/skills.blade.php
- sections/projects.blade.php
- sections/contact.blade.php
Masing-masing section menerima dan menampilkan data yang berasal dari Controller.
Contoh penggunaan data di dalam Blade (misalnya pada hero.blade.php):

<a href="{{ $social['github'] }}" target="_blank">
    <svg>...</svg>
</a>

Artinya, link GitHub tersebut tidak ditulis langsung di Blade, melainkan dikontrol sepenuhnya dari Controller.

## 4. Perubahan Routing (routes/web.php)
Sebelum menggunakan Controller, halaman dipanggil langsung melalui view di route. Kemudian routing diubah menjadi menggunakan Controller sebagai berikut:

use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

Artinya, ketika user membuka halaman utama (/), Laravel akan:
- Masuk ke PortfolioController
- Menjalankan function index()
- Mengirim data ke file welcome.blade.php
- Menampilkan halaman portofolio
Alur ini sudah sesuai dengan standar MVC Laravel.

## 5. Alur Kerja Controller pada Website
Urutan kerja dalam project ini adalah:
1. User membuka website
2. File routes/web.php memanggil PortfolioController
3. PortfolioController menyiapkan seluruh data portofolio
4. Data dikirim ke welcome.blade.php
5. welcome.blade.php menampilkan section:
- Hero
- About
- Skills
- Projects
- Contact

Setiap section menampilkan data dari Controller, bukan dari hardcode di blade.

## 6. Keuntungan Menggunakan Controller
Penggunaan Controller dalam project ini memberikan beberapa keuntungan:
- Struktur project lebih rapi
- Tampilan (Blade) terpisah dari logika
- Lebih mudah dikembangkan di masa depan
- Siap dihubungkan dengan database
- Sesuai konsep MVC Laravel
- Mudah ditambahkan fitur baru seperti admin panel atau CRUD
Jika suatu saat project ini dikembangkan lebih lanjut, Controller yang sudah ada dapat langsung digunakan untuk mengelola data dari database.

## 7. Kesimpulan

Penggunaan HomeController dan PortfolioController pada web portofolio Laravel ini sangat membantu dalam mengatur alur data dan menjaga file Blade tetap bersih dari logika yang berlebihan.

Dengan penerapan Controller, web portofolio ini tidak hanya berupa tampilan statis, tetapi sudah tersusun secara lebih profesional, terstruktur, dan sesuai standar pengembangan web modern menggunakan Laravel.

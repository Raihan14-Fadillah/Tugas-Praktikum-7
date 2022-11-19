
<?php $__env->startSection('konten'); ?>
<head>
 <title>Home</title>
 <style>
    .container{
        width: 800px;
        text-align: justify;
    }
    h1{
        text-align: center;
    }
 </style>
</head>
<body>

    <div class="container">
        <h1>Tugas Pendahuluan 6 </h1>
    <ol>
        <li>Jelaskan apa yang dimaksud dengan Framework.</li>
        <ul><li>Framework adalah platform yang dipergunakan untuk membuat atau mengembangkan suatu aplikasi atau perangkat lunak. Jadi, dengan menggunakan framework, seorang programmer atau developer tidak perlu membuat kodenya dari nol. Framework sudah menyediakan dasar kode yang diperlukan untuk membangun sebuah software. Framework bisa disebut juga template untuk membentuk sesuatu. Framework mirip dengan application programming interface (API).</li></ul>
        <li>Jelaskan keunggulan menggunakan Laravel Framework.</li>
        <ul>
            <li>Laravel merupakan framework yang bersifat Open </li>
            <li>Banyak digunakan karena dokumentasinya yang lengkap dan selalu Update</li>
            <li>Terdapat sistem blade template (membuat template menjadi terstruktur dan dinamis)</li>
            <li>Fitur migration Database (tidak perlu membuat ulang struktur database yang baru karena sistem akan melakukan migrasi data secara langsung)</li>
            <li>Terdapat beberapa pilihan keamanan yang dapat digunakan agar aplikasi tetap aman</li>
        </ul>
        <li>Jelaskan mengenai konsep MVC dalam pemrograman Laravel.</li>
        <ul><li>MVC adalah model view controller, yang merupakan  pola desain arsitektur  sistem pengembangan web, yang terdiri dari tiga bagian, yaitu: <br>
            a. Model yang merupakan bagian dari manajemen basis data dan pemrosesan langsung. <br>
            b. View adalah bagian yang menampilkan informasi kepada pengguna. <br>
            c. Controller adalah bagian yang menghubungkan model dan tampilan dalam setiap proses permintaan  pengguna. <br>
            </li>
        <li>Cara Kerja pada MVC khususnya pada Laravel : <br>
            a.	Bagian View membutuhkan data untuk ditampilkan kepada pengguna. <br>
            b.	Controller Kemudian menerima permintaan dan mengirimkannya ke bagian model untuk diproses. <br>
            c.	Selain itu, model  mengelola dan mencari data informasi dari database. <br>
            d.	Model mengembalikan informasi ini ke controller untuk menampilkan hasil dalam view. <br>
            e.	Controller mengambil hasil dari bagian model dan mengaturnya di bagian view. <br>
            </li></ul>
    </ol>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.tampilan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raiha\Documents\KULIAH\SEMESTER 3\PAW\Praktikum\modul7\resources\views/tp6.blade.php ENDPATH**/ ?>
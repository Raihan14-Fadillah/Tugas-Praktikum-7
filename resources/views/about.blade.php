@extends('layout.tampilan')
@section('konten')
<head>
 <title>About</title>
</head>
<body>

    <div class="container">
        <h1 style="margin: 0 20px;">About Me</h1>
        <br>
        <img src="{{ ('img/raihan.jpg') }}" width='270' height='270'>
        <br>
        <h1 style="text-align:center;">Raihan Fadillah</h1>
        <br>
        <h1 style="margin: 0 20px;">Background</h1>
        <br>
        <p>
            Nama Saya Raihan, Saya berasal dari Sumenep, Saya merupakan anak pertama dari 2 bersaudara.
            Saya bersekolah di SDN Saronggi 1 kemudian melanjutkan ke SMP di desa yang sama yaitu SMPN 1 Saronggi.
            Namun, waktu SMA saya berpindah tidak sekolah di Saronggi Lagi, melainkan melanjutkan ke SMA desa Sebelah,
            yaitu SMAN 1 Bluto. <br><br>Teknik informatika universitas trunojoyo madura bukanlah tujuan saya pada awalnya. 
            berawal dari mimpi berkuliah jauh dari rumah,selayaknya orang perantauan pada umumnya.
            namun, pupus sebelum dimulai. restu orang tua dan keterbatasan "koneksi" menjadi kendalanya.
            lalu memutar otak dengan pesan berkuliah di perguruan tinggi negeri di pulau yang sama "madura".
            mau tidak mau universitas trunojoyo madura lah yang menjadi pilihan, perguruan tinggi negeri
            satu-satunya di pulau madura. alasannya agar dekat dengan keluarga dan jika ingin menjengukku 
            di tempat kos. ku carilah mana jurusan yang memang di bidangku. dengan bermodal lolos eligible
            snmptn di sekolahku, aku menepatkan hatiku di prodi teknik mekatronika dan teknik informatika
            di pilihan kedua sebagai formalitas saja. <br><br> teknik mekatronika menjadi pilihan pertamaku karena
            aku punya saudara yang berkuliah di universitas trunojoyo madura dengan prodi yang sama.
            niatnya agar aku bisa belajar dan dapat contekan tugasnya dari semester ke semester dan lulus
            dengan tepat waktu dan tidak kesulitan. pada akhirnya niat dari awal sudah buruk, pada akhirnya
            hasil pun demikian. aku tertolak dan malah masuk di prodi yang awalnya hanya kuanggap sebagai
            "formalitas pengisian snmptn". teknik informatika, disinilah aku sampai saat ini semester 3
            dengan segala kisah di dalamnya.
        </p>
        <h1 style="margin: 0 20px;">Suka Duka Praktikum PAW</h1>
        <br>
        <p>
            Setiap pertemuan Praktikum PAW saya selalu mengantuk karena pemilihan waktu yang malam.
            awalnya aman-aman saja karena masi sore, namun karena bentrok dari kelas-kelas praktikum lain
            . Alhasil dari kelas saya yang mengalah untuk mundur malam dan itu sangat membuat mengantuk.
            Kemudian terkadang Asprak menjelaskan tidak jelas, terkadang kecepetan, kadang-kadang tidak detail, sehingga kami
            bingung untuk mempraktekkannya secara langsung karena tidak paham dan tidak keburu. 
            <br><br> Tapi dari semua kekurangannya saya senang Setiap praktikum PAW karena suatu hal.
            namun hal tersebut saya belum tau karena apa. Terimakasih Pak Khozaimi beserta Jajaran Kakak Asprak
            yang sudah mengajari kami.
        </p>
    </div>
</body>
</html>
<style>
    img{
        text-align: center;
        border-radius: 10px;
        display: block; 
        margin: 20px auto;
        color: #1c2331;
    }
    .profil{
        background-color: rgba(127, 255, 212, 0.549);
        border-radius: 10px;
        padding: 20px;
        margin: 20px;
    }
 </style>
@endsection
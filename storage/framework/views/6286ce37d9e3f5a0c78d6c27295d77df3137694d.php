<head>
    <title>-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='css/tampilan.css' rel="stylesheet">
    <title>Home</title>
  </head>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark shift fixed-top " >
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="/home">Simple SIAKAD</a>
          </button>
            <ul class="nav navbar-nav justify-content-end nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="/home">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tp6">Input Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Me</a>
              </li>  
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <div class=".container">
            <?php echo $__env->yieldContent('konten'); ?>
    </div>
</body>
<footer
    class="text-lg-start text-white" style="background-color: #1c2331">
        <div class="text-md-start mt-5">
        <div class="row mt-3">
            <!-- Column 1 -->
            <div class="col-md-4">
              <br>
              <img src="<?php echo e(('img/utm.png')); ?>" width ='50px' heigt='50px' style='margin: 5px' >
              <h6 class="bawah fw-bold">Jurusan Teknik Informatika Universitas Tunojoyo Madura
              </h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                Jl. Raya Telang,Kecamatan Kamal, Bangkalan <br>
                69162 Indonesia <br>
                Kampus Universitas Trunojoyo Madura <br>
              </p>
            </div>
            <!-- Column 2 -->
            <div class="col-md-3">
              <h6 class="bawah fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>Telp : 031-3011146</p>
              <p>Fax : 031-3011506</p>
              <p>email : if.ft@trunojoyo.ac.id</p>
            </div>
            <!-- Column 3 -->
            <div class="col-md-2">
              <h6 class="bawah fw-bold">Layanan</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Pembayaran UKT</a>
              </p>
              <p>
                <a href="#!" class="text-white">Pendaftaran KIP</a>
              </p>
              <p>
                <a href="#!" class="text-white">Pendaftaran Wisuda</a>
              </p>
              <p>
                <a href="#!" class="text-white">Administrasi</a>
              </p>
            </div>
            <!-- Column 4 -->
            <div class="col-md-3">
              <h6 class="bawah fw-bold">Resource</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
                  <p>
                    <a href="#!" class="text-white">e-Journel</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Portal Tugas Akhir</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Website Resmi Kampus</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Download Administrasi</a>
                  </p>
            </div>
          </div>
        </div>
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2022 Copyright : <br>
        <a class="text-white" href="https://github.com/Raihan14-Fadillah"
           >Raihan Fadillah</a
          >
      </div>
</footer>

<?php /**PATH C:\Users\raiha\Documents\KULIAH\SEMESTER 3\PAW\Praktikum\modul7\resources\views/layout/tampilan.blade.php ENDPATH**/ ?>
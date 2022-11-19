
<?php $__env->startSection('konten'); ?>
<head>
 <title>Home</title>
</head>
<body>

    <div class="container">
        <div class="container mt-3">
            <div class='cntr'>
                <h1 style="margin: 0 20px;">Input Data Mahasiswa</h1>
            </div>
            <br>
            <form action="/add/addAct" method="">
                <div class="row">
                    <div class="col">
                        <h6>Nama Mahasiswa</h6>
                        <input type="text" class="form-control" placeholder="Masukan Nama Mahasiswa" name="nama">
                    </div>
                    <div class="col">
                        <h6>Alamat Email</h6>
                        <input type="text" class="form-control" placeholder="Masukan Email Mahasiswa" name="email">    
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <h6>NIM</h6>
                        <input type="text" class="form-control" placeholder="Masukan NRP Mahasiswa" name="nrp">
                    </div>
                    <div class="col">
                        <h6>Alamat Rumah</h6>
                        <input type="text" class="form-control" placeholder="Masukan Alamat Mahasiswa" name="alamat">    
                    </div>
                </div>
                <br>
                <div style="text-align: right">
                <input type="reset" class="btn btn-outline-dark text-dark" name="reset" value="RESET">
                <button type="submit" class="btn text-white" style="background-color: #1c2331">TAMBAH</button> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.tampilan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raiha\Documents\KULIAH\SEMESTER 3\PAW\Praktikum\mcrud\resources\views/add.blade.php ENDPATH**/ ?>
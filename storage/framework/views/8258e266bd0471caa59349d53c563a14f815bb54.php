
<?php $__env->startSection('konten'); ?>
<head>
 <title>Home</title>
</head>
<body>
    <div class="container">
        <h1 style="margin: 0 20px;">Data Mahasiswa</h1><br>
        <div class="container-flex">
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container-view">
                <div class="left text-white">
                    <h6><?php echo e($ms->nama); ?></h6>
                    <p><?php echo e($ms->nrp); ?></p>
                    <p><?php echo e($ms->alamat); ?></p>
                </div>
                <div class="right text-white">
                    <a href="/edit/<?php echo e($ms->nrp); ?>"><img src="img/edit.png" alt="edit" style="height: 20px;width:20px;"></a>
                    <a href="/delete/<?php echo e($ms->nrp); ?>"><img src="img/trash.png" alt="delete" style="height: 20px;width:20px;"></a>
                        <p style="margin-top: 10px;"><?php echo e($ms->email); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>
</html>
<style>
    .container-flex{
        display: flex;
        margin: 0 auto;
        flex-wrap: wrap;
    }
    .table{
        background-color: #1c2331;
    }
    .container-view{
        background-color: #1c2331;
        width: 350px;
        height: 100px;
        border-radius: 10px; 
        display: flex;
        margin: 19px;
    }
    .left{
        padding: 7px;
        margin: 1px 13px;
        font-size: 12;
        width: 40%;
    }
    .right{
        text-align: right;
        width: 175px;
        font-size: 12;
        margin:10px ;
    }
 </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.tampilan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raiha\Documents\KULIAH\SEMESTER 3\PAW\Praktikum\mcrud\resources\views/home.blade.php ENDPATH**/ ?>
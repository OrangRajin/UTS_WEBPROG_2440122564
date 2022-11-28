

<?php $__env->startSection('title'); ?>
    Home Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Judul Buku</h5>
    <p class="card-text">Synopsis</p>
    <h5 class="card-title">Author</h5>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTS_WEBPROG\UTS_GiantBookPublisher\resources\views/homePage.blade.php ENDPATH**/ ?>
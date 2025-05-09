<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Blog</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>


<header>
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo e(route('posts.index')); ?>">Mini-Blog</a>
    </div>
  </nav>
</header>

<!-- Body -->
<body>
  <?php echo $__env->yieldContent('content'); ?>
</body>

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container d-lg-flex justify-content-between">
    <span class="text-light">BrotherlyHamlet Blog 2025</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html><?php /**PATH C:\Users\PAUL\Herd\laravelblog\resources\views/layouts/app.blade.php ENDPATH**/ ?>
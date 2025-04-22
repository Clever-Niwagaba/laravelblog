
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="<?php echo e(route('posts.create')); ?>" role="button">Add Post</a>
    <h1>This here's all the posts we got</h1>
  </div>
    
  <hr>
  <!-- Message if a post is posted successfully -->
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <p><?php echo e($message); ?></p>
  </div>
  <?php endif; ?>
    <?php if(count($posts) > 0): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2">
              <img class="img-fluid" style="max-width:50%;" src="<?php echo e(asset('images/'.$post->image)); ?>" alt="">
            </div>
            <div class="col-10">
              <h4><?php echo e($post->title); ?></h4>
            </div>
          </div>
          <p><?php echo e($post->description); ?></p>
          <hr>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
    <p>No Posts found</p>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PAUL\Herd\laravelblog\resources\views/posts/index.blade.php ENDPATH**/ ?>
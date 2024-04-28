<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Popular Categories</h2>
        </div>
      </div>
      <div class="row">

          
     
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo e(route('category.index', [$category->id,$category->slug ])); ?>" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"></span>
              <h2><?php echo e($category->name); ?></h2>
              <span class="counting"><?php echo e($category->jobs->count()); ?></span>
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
      </div>

    </div>
  </div><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views/frontend/partials/category.blade.php ENDPATH**/ ?>
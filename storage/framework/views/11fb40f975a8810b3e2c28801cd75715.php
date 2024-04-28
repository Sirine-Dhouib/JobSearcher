<?php $__env->startSection('content'); ?>

<div style="height: 95px;"></div>
<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('uploads/banner')); ?>/<?php echo e($company->banner); ?>);">
    <div class="container text-center">
      <h1 class="mb-0" style="    color: #fff;
      font-size: 2.5rem;">Company name:<strong>&nbsp;<?php echo e($company->cname); ?></strong></h1>
      <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Jobs</a> </span> <span><span class="sep m-0"> ></span> Company details</span></p>
    </div>
</div>
  


<div class="site-section bg-light">
    <div class="container">
      <div class="row">
     
        <div class="col-md-12 col-lg-12 mb-5">
        
          
        
          <div class="p-4 bg-white">
  
            <div class="mb-4 mb-md-4 mr-5">
             <div class="job-post-item-header">
                <div class="d-flex align-items-center">
                    <?php if($company->logo): ?>
                    
                    <img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e($company->logo); ?>" style="width:100px; height:100px;border-radius:100px;object-fit: cover;" class="border  mb-3" alt="">
                    <?php endif; ?>
        
                    <h3 class="mx-4 mb-0">Company name:<strong>&nbsp;<?php echo e($company->cname); ?></strong> </h3>

                </div>
                <p class="mt-3"><strong>Company Details:</strong> &nbsp;<?php echo e($company->description); ?></p>
                <p><strong>Slogan:</strong>&nbsp;<?php echo e($company->slogan); ?></p>
                <p><strong>Address:</strong>&nbsp;<?php echo e($company->address); ?></p>
                <p><strong>Phone:</strong>&nbsp;<?php echo e($company->phone); ?></p>
                <p><strong>Website: </strong>&nbsp;<a target="_blank" href="<?php echo e($company->website); ?>"><?php echo e($company->website); ?></a></p>
               
             </div>
        
            </div>
  
          </div>
        </div>
  

      </div>

      <?php if(count($company->jobs)> 0): ?>
        
     
      <div class="row">
     
        <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 bg-white">
            <h3 class="mb-5 h3"><?php echo e($company->cname); ?> <i style="color: #28a745;" class="icon-hand-o-right"></i> other Jobs</h3>
            <div class="rounded border jobs-wrap">
  
          
              <?php $__currentLoopData = $company->jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
  
              <a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>" class="job-item d-block d-md-flex align-items-center  border-bottom  
                
                <?php if($job->type =='fulltime'): ?>         
                fulltime
                <?php elseif($job->type =='freelance'): ?> 
                freelance  
                <?php elseif($job->type =='partime'): ?>   
                partime  
                <?php elseif($job->type =='remote'): ?>   
                remote
                <?php endif; ?>
  
                ">
                <?php if($job->company->logo): ?>
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="<?php echo e(asset('/uploads/logo')); ?>/<?php echo e($job->company->logo); ?>" alt="Image" class="img-fluid mx-auto">
                </div>
                <?php endif; ?>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3><?php echo e($job->title); ?></h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo e($job->position); ?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo e(Str::limit($job->address, 20)); ?></div>
                      <div><span class="icon-clock-o mr-1"></span> <?php echo e($job->created_at->diffForHumans()); ?></div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    
                    <span class="text-info p-2 rounded border border-info">Apply Job</span>
                  </div>
                </div>  
              </a>
  
  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  
  
            </div>
          </div>
        </div>

      </div>
      <?php endif; ?>




    </div>
  </div>
  




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views/frontend/company/index.blade.php ENDPATH**/ ?>
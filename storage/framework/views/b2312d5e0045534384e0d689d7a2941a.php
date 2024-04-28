<?php $__env->startSection('content'); ?>

  <div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 1.5rem;"><?php echo e($job->title); ?></h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Jobs</a> </span> <span><span class="sep m-0"> ></span> Job details</span></p>
  </div>
</div>




<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if(Session::has('jobmsg')): ?>
        <div class="p-2 bg-white mb-2">
          <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
              <strong>That's Awesome !</strong> <?php echo e(Session::get('jobmsg')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        </div>
          
        <?php endif; ?>

        <?php if(Session::has('error_msg')): ?>
        <div class="p-2 bg-white mb-2">
          <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
              <strong>Error !</strong> <?php echo e(Session::get('error_msg')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        </div>
          
        <?php endif; ?>

        <?php if(isset($errors) && count($errors) > 0): ?>
          <div class="p-2 bg-white mb-2">
            <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
               <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          </div>
        <?php endif; ?>


      </div>
    </div>
    <div class="row">
   
      <div class="col-md-12 col-lg-8 mb-5">
      
        
      
        <div class="p-5 bg-white">

          <div class="mb-4 mb-md-4 mr-5">
           <div class="job-post-item-header d-flex align-items-center">
             <h2 class="mr-3 text-black h4"><?php echo e($job->position); ?></h2>
             <div class="badge-wrap">
              <span class="border border-warning text-warning py-2 px-4 rounded"><?php echo e(Str::ucfirst($job->type)); ?></span>
              <span class="border ml-3 bg-primary border-primary text-white py-2 px-4 rounded"><a href="#"data-toggle="modal" data-target="#recomend-job-modal"><i class="icon-envelope-o" style="font-size: 20px;color:#fff"></i></a></span>
             </div>
           </div>
           <div class="job-post-item-body d-block d-md-flex">
             <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Office address:</a></div>
             <div><span class="fl-bigmug-line-big104"></span> <span><?php echo e($job->address); ?></span></div>
           </div>
          </div>


        
          <div class=" mb-8 bg-white">
            <!-- icon-book mr-3-->
            <h3 class="h5 text-black mb-3"><i class="icon-library_books" style="color: #28a745;">&nbsp;</i>Description </a></h3>
            <p> <?php echo e($job->description); ?></p>
            
          </div>
    
          <div class=" mb-8 bg-white">
            <!--icon-align-left mr-3-->
            <h3 class="h5 text-black mb-3"><i class="icon-user" style="color: #28a745;">&nbsp;</i>Roles and Responsibilities</h3>
            <p><?php echo e($job->roles); ?> .</p>
            
          </div>
          <div class=" mb-8 bg-white">
            <h3 class="h5 text-black mb-3"><i class="icon-users" style="color: #28a745;">&nbsp;</i>Number of vacancy</h3>
            <p><?php echo e($job->number_of_vacancy); ?> Year of Experience.</p>
            
          </div>
          <div class=" mb-8 bg-white">
            <h3 class="h5 text-black mb-3"><i class="icon-clock-o" style="color: #28a745;">&nbsp;</i>Experience</h3>
            <p><?php echo e($job->experience); ?>&nbsp;years</p>
            
          </div>
          <div class=" mb-8 bg-white">
            <h3 class="h5 text-black mb-3"><i class="icon-genderless" style="color: #28a745;">&nbsp;</i>Gender</h3>
            <p> <?php echo e(Str::ucfirst($job->gender)); ?></p>
            
          </div>
          <div class=" mb-8 bg-white">
            <h3 class="h5 text-black mb-3"><i class="icon-money" style="color: #28a745;">&nbsp;</i>Salary</h3>
            <p>$<?php echo e($job->salary); ?></p>
          </div>
      
 

        </div>
      </div>

      <div class="col-lg-4">
        
        
        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3">Short Job Info</h3>
            <p>Company name: <?php echo e($job->company->cname ?? ''); ?></p>
            <p>Address: <?php echo e($job->address); ?></p>
            <p>Employment Type: <?php echo e(Str::ucfirst($job->type)); ?></p>
            <p>Position: <?php echo e(Str::ucfirst($job->position)); ?></p>
            <p>Posted: <?php echo e($job->created_at->diffForHumans()); ?></p>
            <p>Last date to apply: <?php echo e(date('F d, Y', strtotime($job->last_date))); ?></p>

            <p><a href="<?php echo e(route('company.index',[$job->company->id,$job->company->slug])); ?>" class="btn btn-warning" style="width: 100%;">Visit Company Page</a></p>

            <?php if(Auth::check() && Auth::user()->user_type=='seeker'): ?>
                  <?php if(!$job->checkApplication()): ?>
                  <p>
                    <apply-component jobid=<?php echo e($job->id); ?>></apply-component>

                  </p>
                      
                  <?php else: ?>
                      <p> <button type="button" class="w-100 text-black btn btn-warning " disabled>Already applied</button></p>
                  <?php endif; ?>

                  <p> <favorite-component :jobid=<?php echo e($job->id); ?> :favorited=<?php echo e($job->checkSaved() ? 'true':'false'); ?>></favorite-component></p>

          

            <?php endif; ?>

            <?php if(!Auth::check() ): ?>

              <p><a href="/register" class="btn btn-dark" style="width: 100%;">For apply need to Register/Login.</a></p>

            <?php endif; ?>
          
        </div>
      </div>
    </div>
  </div>
</div>



<?php if(count($jobRecommendation) > 0): ?>
  

  <div class="site-section bg-light pt-0">
    <div class="container">
      <div class="row">

        <div class="col-md-12 block-16" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex mb-0">
            <h2 class="mb-5 h3 mb-0">Recommended Jobs</h2>
            <div class="ml-auto mt-1"><a href="#" class="owl-custom-prev">Prev</a> / <a href="#" class="owl-custom-next">Next</a></div>
          </div>

          <div class="nonloop-block-16 owl-carousel">

            <?php $__currentLoopData = $jobRecommendation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommendJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
          
            <div class="border rounded p-4 bg-white">
              <h2 class="h5"><?php echo e($recommendJob->title); ?></h2>
              <p><span class="
                border rounded p-1 px-2
                <?php if($recommendJob->type =='fulltime'): ?>         
                text-info  border-info
                <?php elseif($recommendJob->type =='freelance'): ?> 
                text-warning   border-warning
                <?php elseif($recommendJob->type =='partime'): ?>   
                text-danger   border-danger
                
                <?php elseif($recommendJob->type =='remote'): ?>   
                text-dark   border-dark
                <?php endif; ?>

                "><?php echo e(Str::ucfirst($recommendJob->type)); ?></span></p>
              <p>
                <span class="d-block"><span class="icon-suitcase"></span> <?php echo e(Str::limit($recommendJob->position, 30)); ?></span>
                <span class="d-block"><span class="icon-room"></span> <?php echo e(Str::limit($recommendJob->address, 30)); ?></span>
                <span class="d-block"><span class="icon-money mr-1"></span>Salary: $<?php echo e($recommendJob->salary); ?></span>
              </p>
              <p class="mb-0"><?php echo e($recommendJob->roles); ?></p>

              <a href="<?php echo e(route('job.show', [$recommendJob->id, $recommendJob->slug])); ?>"><button class="btn btn-success btn-sm mt-4">Apply this Job</button></a>
            </div>
          
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        


          </div>

        </div>
      </div>
    </div>
  </div>

<?php endif; ?>

  <!-- Job Recomend Modal -->
  <div class="modal fade" id="recomend-job-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content pb-4">
        <div class="modal-header mt-2 mb-2">
          <h5 class="modal-title" id="recomend-job-modal"><?php echo e(__('Send job to your friend.')); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
          
              <div class="card-body">
                  <form method="POST" action="<?php echo e(route('mail')); ?>">
                      <?php echo csrf_field(); ?>
                    
                      <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">
                      <input type="hidden" name="job_slug" value="<?php echo e($job->slug); ?>">
                      <input type="hidden" name="title" value="<?php echo e($job->title); ?>">
                      <input type="hidden" name="cname" value="<?php echo e($job->company->cname); ?>">
                      <input type="hidden" name="position" value="<?php echo e($job->position); ?>">

                      <div class="row mb-2">
                          <label for="your_name" class="col-md-12 col-form-label text-md-start"><?php echo e(__('Your name *')); ?></label>
  
                          <div class="col-md-12">
                              <input id="your_name" type="text" class="form-control <?php $__errorArgs = ['your_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="your_name" value="<?php echo e(old('your_name')); ?>"  autocomplete="your_name" autofocus>
  
                              <?php $__errorArgs = ['your_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                      </div>

                      <div class="row mb-2">
                          <label for="your_email" class="col-md-12 col-form-label text-md-start"><?php echo e(__('Your email *')); ?></label>
  
                          <div class="col-md-12">
                              <input id="your_email" type="email" class="form-control <?php $__errorArgs = ['your_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="your_email" value="<?php echo e(old('your_email')); ?>"  autocomplete="your_email" autofocus>
  
                              <?php $__errorArgs = ['your_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                      </div>
                      <div class="row mb-2">
                        <label for="friend_name" class="col-md-12 col-form-label text-md-start"><?php echo e(__('Your friend name *')); ?></label>

                        <div class="col-md-12">
                            <input id="friend_name" type="text" class="form-control <?php $__errorArgs = ['friend_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="friend_name" value="<?php echo e(old('friend_name')); ?>"  autocomplete="friend_name" autofocus>

                            <?php $__errorArgs = ['friend_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="row mb-2">
                      <label for="friend_email" class="col-md-12 col-form-label text-md-start"><?php echo e(__('Your friend email *')); ?></label>

                      <div class="col-md-12">
                          <input id="friend_email" type="email" class="form-control <?php $__errorArgs = ['friend_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="friend_email" value="<?php echo e(old('friend_email')); ?>"  autocomplete="friend_email" autofocus>

                          <?php $__errorArgs = ['friend_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($message); ?></strong>
                              </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                  </div>
  
                      <div class="row mb-0">
                          <div class="col-md-12 ">
                              <button type="submit" class="btn btn-primary">
                                  <?php echo e(__('Mail this job')); ?>

                              </button>
  

                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>

      </div>
    </div>
  </div>
    <!-- Modal -->
  



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views/frontend/jobs/show.blade.php ENDPATH**/ ?>
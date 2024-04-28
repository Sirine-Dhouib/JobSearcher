<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Applicants</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="#">Comapany</a> </span> <span><span class="sep m-0"> ></span> <?php echo e(Auth::user()->company->cname); ?></span></p>
  </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if(count($applicants) > 0): ?>
                    
                <div class="card">
                    <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-header">Job Title:  <a href="<?php echo e(route('job.show', [$applicant->id, $applicant->slug])); ?>"><?php echo e($applicant->title); ?></a></div>

                    <?php $i=0; ?>
                    <?php $__currentLoopData = $applicant->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    
                                  
                                    <th scope="col">Sl:</th>
                                    <th scope="col">Nababur:</th>
                                 
                                    <th scope="col">Email:</th>
                                    <th scope="col">Gender:</th>
                               
                                    <th scope="col">Bio:</th>
                                    <th scope="col">Cover letter:</th>
                                    <th scope="col">Resume:</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td scope="row"><?php echo e($i); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->profile->gender); ?></td>
                           
                                        <td><?php echo e($user->profile->bio); ?></td>
                            
                                        <?php if($user->profile->cover_letter): ?>
                                        <td><a class="badge badge-secondary" target="_blank" href="<?php echo e(url('storage/'.$user->profile->cover_letter)); ?>">Cover letter</a></td>
                                        
                                        <?php else: ?>
                                        <td>Not uploaded</td>
                                        <?php endif; ?>

                                        <?php if($user->profile->resume): ?>
                                        <td><a class="badge badge-secondary" target="_blank" href="<?php echo e(url('storage/'.$user->profile->resume)); ?>">Resume</a></td>
                                        
                                        <?php else: ?>
                                        <td>Not uploaded</td>
                                        <?php endif; ?>
                                    
                                    </tr>
                            
                        
                                </tbody>
                            </table>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php else: ?>

                    <h3 class="text-center">No applicants apply your yet.</h3>

                <?php endif; ?>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views/frontend/jobs/applicants.blade.php ENDPATH**/ ?>
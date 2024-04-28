<?php $__env->startSection('content'); ?>

       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="<?php echo e(route('adminPostCreate')); ?>" class="theme-primary-btn btn btn-primary"><i class="material-icons">add</i>&nbsp;Create new post</a>
            <a href="<?php echo e(route('adminPostTrash')); ?>" class="theme-danger-btn btn btn-danger"><i class="material-icons">delete</i>&nbsp;Restore posts</a>
          
        </div>
    </div>
      <!--  Header BreadCrumb -->  



        <!-- Users DataTable-->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card bg-white">
                    <div class="card-body mt-3">
                      <div class="table-responsive">
                          <table id="usersTable" class="table table-striped table-borderless" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Post Thumbnail</th>
                                    <th>Post Title</th>
                                    <th>Post Description</th>
                            
                                    <th>Posted Date</th>
        
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php $i=0; ?>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++ ?>
                                    
    
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><img class="img-thumbnail" src="<?php echo e(asset('storage/'.$post->post_thumbnail)); ?>" alt="" width="80"></td>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e(Str::limit($post->description, 50)); ?></td>
                                
                                        <td><span class="badge badge-lg badge-info text-white"><?php echo e($post->created_at->diffForHumans()); ?></span></td>


                                    
                                       
                                        <td>
                                            <?php if($post->status == '0'): ?>
                                                <a  class="badge badge-lg badge-danger text-white" href="<?php echo e(route('adminPostToggle', [$post->id])); ?>"><?php echo e(__('Draft')); ?></a>

                                              
                                            <?php else: ?>

                                                <a  class="badge badge-lg badge-success text-white" href="<?php echo e(route('adminPostToggle', [$post->id])); ?>"><?php echo e(__('Live')); ?></a>

                                              
                                            <?php endif; ?>
                                            
                                        </td>
                                        <td style="width: 18%">
                                            <a class="btn btn-sm btn-secondary" href="<?php echo e(route('adminPostShow',[$post->id])); ?>"><i class="material-icons">remove_red_eye</i> </a>  
                                            <a  class="btn btn-sm btn-info" href="<?php echo e(route('adminPostEdit',[$post->id])); ?>"><i class="material-icons">edit</i></a> 


                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#postDelete-<?php echo e($post->id); ?>" type="button"><i class="material-icons">delete</i></button>

                                            <!-- Delete modal -->
                                            <div class="modal fade" id="postDelete-<?php echo e($post->id); ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-<?php echo e($post->id); ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="staticBackdropLabel-<?php echo e($post->id); ?>"><?php echo e($post->title); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4> Do you want to move post Trash?</h4>
                                                    </div>
                                                    <form action="<?php echo e(route('adminPostDestroy')); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>


                                                </div>
                                                </div>
                                            </div>



                                        </td>
                                    </tr>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             



                        </table>
                      </div>
                    </div>
                </div>
            </div>

        </div>

         <!-- Users DataTable-->   










<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>
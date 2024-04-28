<footer class="site-footer">
    <div class="container">
      

      <div class="row">
        <div class="col-md-4">
          <h3 class="footer-heading mb-4 text-white">About</h3>
          <p>"Job Searcher" is a job portal web application designed to help job seekers find suitable employment opportunities and employers post job listings efficiently.</p>
          <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                <ul class="list-unstyled">

                  <?php $__currentLoopData = App\Models\Category::has('jobs')->limit(5)->where('status', 1)->orderBy('name', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('category.index', [$cat->id,$cat->slug ])); ?>"><?php echo e($cat->name); ?> (<?php echo e($cat->jobs->count()); ?>)</a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  
                </ul>
            </div>
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white">Categories</h3>
                <ul class="list-unstyled">
                  <?php $__currentLoopData = App\Models\Category::has('jobs')->limit(5)->where('status', 1)->orderBy('name', 'asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('category.index', [$cat->id,$cat->slug ])); ?>"><?php echo e($cat->name); ?> (<?php echo e($cat->jobs->count()); ?>)</a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
          </div>
        </div>

        
        <div class="col-md-2">
          <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
            <div class="col-md-12">
              <p>
                <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

              </p>
            </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          
          Copyright &copy; </script><script>document.write(new Date().getFullYear());</script> All Rights Reserved 

          </p>
        </div>
        
      </div>
    </div>
  </footer>
</div>

<script src="<?php echo e(asset('external/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/jquery.stellar.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/jquery.countdown.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('external/js/aos.js')); ?>"></script>


<script src="<?php echo e(asset('external/js/mediaelement-and-player.min.js')); ?>"></script>

<script src="<?php echo e(asset('external/js/main.js')); ?>"></script>
  

<script>
    document.addEventListener('DOMContentLoaded', function() {
              var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

              for (var i = 0; i < total; i++) {
                  new MediaElementPlayer(mediaElements[i], {
                      pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                      shimScriptAccess: 'always',
                      success: function () {
                          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                          for (var j = 0; j < targetTotal; j++) {
                              target[j].style.visibility = 'visible';
                          }
                }
              });
              }
          });
  </script>



 

</body>
</html><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views////frontend/partials/footer.blade.php ENDPATH**/ ?>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.adminName', 'Dashboard | Job Searcher')); ?></title>
    

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/previews/004/773/704/non_2x/a-girl-s-face-with-a-beautiful-smile-a-female-avatar-for-a-website-and-social-network-vector.jpg" type="image/png">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!--====== Material Icons ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/iconfont/material-icons.css')); ?>">

    <!-- dataTables.bootstrap4.min css-->
    <link href="<?php echo e(asset('backend/assets/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" media="screen">

    <!-- Chart.min css-->
    <link href="<?php echo e(asset('backend/assets/css/Chart.min.css')); ?>" rel="stylesheet" media="screen">

    <!-- animate css-->
    <link href="<?php echo e(asset('backend/assets/css/animate.css')); ?>" rel="stylesheet" media="screen">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/sidebar.css')); ?>">
	   <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/responsive.css')); ?>">

     <!--====== CkEditors js ======-->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/js/ckeditor.js')); ?>">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

</head>
<body>


<!-- Prealoder -->
<div class="spinner_body">
    <div class="spinner"></div>  
 </div>
 
 <!-- Prealoder --><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\Job Searcher\resources\views////admin/partials/head.blade.php ENDPATH**/ ?>
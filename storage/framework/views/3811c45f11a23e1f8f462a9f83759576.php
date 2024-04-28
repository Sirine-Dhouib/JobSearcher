
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.jobBoard', 'Job Searcher')); ?></title>
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/previews/004/773/704/non_2x/a-girl-s-face-with-a-beautiful-smile-a-female-avatar-for-a-website-and-social-network-vector.jpg" type="image/png">
    <meta name="description" content="Unlock unparalleled job board performance with our meticulously designed Laravel Vue template. Seamlessly blend functionality and aesthetics while dominating search rankings through advanced SEO optimization. Elevate user experience, engage job seekers and employers effortlessly. Explore limitless possibilities for your job board platform today.">


    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo e(asset('external/fonts/icomoon/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('external/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('external/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('external/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('external/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('external/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('external/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('external/css/animate.css')); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="<?php echo e(asset('external/fonts/flaticon/font/flaticon.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('external/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('external/css/style.css')); ?>">


</head>

<body><?php /**PATH D:\Downloads\XAMPP\Installation\htdocs\JobFinder-Job-Portal-Laravel-Vue-Script\resources\views////frontend/partials/head.blade.php ENDPATH**/ ?>